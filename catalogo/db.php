<?php
require_once("config.php");
class db_layer
{
	private $conn;
	function __construct() 
	{
	}

	public function getConnection()
	{
		if($this->conn == "")
		{
		   $conn = mysql_connect(HOST,USR,PSW);
		   mysql_select_db(DB);
		   mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci';"); 
		   @$this->conn = $conn;
		}
	    return(@$conn);
	}
	
	public function execute_sql($arg_sql,&$arg_result,&$arg_error_msg)
	{
		$arg_sql = str_replace(';', ':', $arg_sql);
		$this->getConnection();
		if (!($arg_result = mysql_query($arg_sql)))
		{
			$arg_error_msg = "There was a problem With the Database".NL."Error : ".mysql_error().NL.NL;
			$arg_error_msg .= "SQL = [".$arg_sql."]";
			echo $arg_sql1= $arg_sql." ### ".mysql_error();
			return FALSE;
		}
		else 
		{
			return TRUE;
		} 
	}
}
?>