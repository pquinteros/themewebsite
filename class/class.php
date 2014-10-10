<?php

class Conectar
{
	public static function con()
	{
		$con=mysql_connect("192.168.1.3","root","123456");
		
		if (!$con )
		{
			echo "error sql";
			exit;
		}
		mysql_query("SET NAMES 'utf8'");

		mysql_select_db("generic");
		return $con;
		
	}
}

?>
