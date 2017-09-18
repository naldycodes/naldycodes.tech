<?php 

/**
* class to handle file logs
*/
class Logfiles {

	public static function m_log($new_msg) {
		// initialize empty string
		$init_string = "";

		// get the log date and time as my function is called
		$new_Log['event_datetime'] = '['.date('D Y-m-d h:i:s A').'][client '.$_SERVER['REMOTE_ADDR'].']';

		//if message is array 
	 	if(is_array($new_msg)) {  
	 		//concatenate msg with datetime  
	 		foreach($new_msg as $msg)  
	 			$init_string.=$new_Log['event_datetime']." ".$msg."__END \n";  
		} else  {   
			//concatenate msg with datetime  
		 $init_string.=$new_Log['event_datetime']." ".$new_msg."__END \n";  
		}  
			//create file with current date name  
			$stCurLogFileName='log_'.date('Ymd').'.txt';  

			//create new file every new day 
			$fHandler = fopen("logs/".$stCurLogFileName,'a+'); 

			//write the info into the file  
			fwrite($fHandler,$init_string);  
			//close handler  
			fclose($fHandler);
	}
}


?>