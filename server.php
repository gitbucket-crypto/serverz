<?php 

function connect()
{
	$host = "192.168.210.40";
	$port = "5432";
	$dbname = "postgres";
	$user= "postgres";
	$password = "2Smx'P?8[#RA\#9Z";
	$conn  = new \PDO('pgsql:host='.$host.';port='.$port.';dbname='.$dbname.';user='.$user.';password='.$password);
	$conn ->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION) or die("Database not found");
	return $conn;
}


var_dump(connect());
?>