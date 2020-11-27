<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ligaf';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}


function get_campo($c,$t,$cb,$i) {
	$q=mysql_query("select $c from $t where $cb=$i");
	if(mysql_num_rows($q)==0)
		return "";
	else
	{
		$f=mysql_fetch_assoc($q);
		return $f[$c];
	}
}

function get_campoj($c,$t,$cb,$i,$ce,$e) {
	$q=mysql_query("select $c from $t where $cb=$i and $ce=$e");
	if(mysql_num_rows($q)==0)
		return "";
	else
	{
		$f=mysql_fetch_assoc($q);
		return $f[$c];
	}
}

?>
