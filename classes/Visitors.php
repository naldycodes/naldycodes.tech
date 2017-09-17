<?php 


	require_once 'core/init.php';

	/**
	* 
	*/
	class Visitors
	{
		
		public static function savevisitor($ip,$user_agent)

				{
				
					$db = new Db();
					$sql = "INSERT INTO visitors (ip, user_agent) VALUES ('$ip','$user_agent')";
					$result_set = $db->query($sql);

				}		
		
	}


 ?>