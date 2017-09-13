<?php 

	/**
	* 
	*/
	class Contacts {
		
		public static function send_message($name, $email, $message) {
			$db = new Db();
			$date_asked = date('Y-m-d');
			$sql = "INSERT INTO messages (name, email, message, date_asked) VALUES ('$name', '$email', '$message', '$date_asked')";
			$result_set = $db->query($sql);
		}
		
	}


 ?>