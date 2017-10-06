<?php 

	/**
	* 
	*/
require_once 'core/init.php';

	class Functions extends DatabaseObjects{

		public $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		public static $number ="123456789";


		// redirect to other pages
		public function redirect_to($url="") {
			header("location: $url");
		}

		 // show success
		public static function showsuccess($message) {
			?>	
			<script>
				window.onload = function () {
					alert("hahaha");
				}
			</script>
			<?php
		}

		// genrate random string
		public static function generateRandomValue($string, $length = 8) {
            $characters = $string;
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }



        // get the daily quote
		public static function get_quote() {
			$db = new Db();
			$random = self::generateRandomValue(self::$number, 1);
			$sql = "SELECT * FROM quote WHERE id = {$random} LIMIT 1";
			$result = $db->query($sql);
			$count = self::compare_num_rows($result, 1);
			if ($count) {
				$result_set = $db->fetch_array($result);
				return $result_set;
			} else {
				return false;
			}


		}


		// get all services
		public static function get_services() {
			// $db = new Db();
			$sql = "SELECT * FROM services";
			$result = self::get_query_results($sql);
			// $result_set = $db->query($sql);
			// $result = $db->fetch_array($result_set);
			return $result;
		}





	}

	


 ?>