<?php 


	require_once 'core/init.php';

	/**
	* 
	*/
	class Visitors
	{
		
		public static function savevisitor($ip,$user_agent)

				{
				
					if ($ip == '156.159.176.26') {
						$logfiles = new Logfiles();
						$logfiles->m_log("Admin visited the site");
					} else {
						$db = new Db();
						$sql = "INSERT INTO visitors (ip, user_agent) VALUES ('$ip','$user_agent')";
						$result_set = $db->query($sql);
					}

				}		
		
	}


 ?>