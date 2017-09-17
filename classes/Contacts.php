<?php 

	/**
	* 
	*/
	class Contacts {
		
		public static function send_message($name, $email, $message) {
			$db = new Db();
			$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
			$result_set = $db->query($sql);
			return "The message was sent successfuly";
		}
		
	}


 ?>