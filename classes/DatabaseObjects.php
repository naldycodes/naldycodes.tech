<?php 


/**
* 
*/

require_once 'core/init.php';

class DatabaseObjects {
	
	public static function count_results($result) {
		$db = new db();
		$results = $db->num_rows($result);
		return $results;
	}

	// compare num rows
	public static function compare_num_rows($result, $compare) {
		$db = new Db();
		$affected_rows = self::count_results($result);
		if ($affected_rows == $compare) {
			return true;
		} else {
			return false;
		}
	}

	// run query
	public static function run_query($sql) {
		$db = new Db();
		$query_result = $db->query($sql);
		return $query_result;
	}

	// fetch results
	public static function fetch_results($query_result) {
		$db = new Db();
		$result = $db->fetch_object($query_result);
		return $result;
	}

	// run query with result
	public static function get_query_results($sql) {
		$db = new Db();
		$query_result = self::run_query($sql);
		$result = self::fetch_results($query_result);
		return $result;
	}
	
}


 ?>