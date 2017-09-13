<?php 

	/**
	* 
	*/
	class Session {
		
		
		// check if session message exists
		public static function exists($name) {
			return (isset($_SESSION[$name])) ? true : false;
		}

		// create a session data
		public static function put($name, $value) {
			return $_SESSION[$name] = $value;
		}

		// get session data
		public static function get($name) {
			return $_SESSION[$name];
		}

		// delete session data
		public static function delete($name) {
			if (self::exists($name)) {
				unset($_SESSION[$name]);
			}
		}

		// the flash message function
		public static function flash($name, $string="") {
			if (self::exists($name)) {
				$session = self::get($name);
				self::delete($name);
				return $session;
			} else {
				self::put($name, $string);
			}
		}
	}

 ?>