<?php
echo 'this is my first page ';

$myServer = "ry76ak4ig9.database.windows.net,1433";
$myUser = "mike";
$myPass = "Ms10kl31011";
$myDB = "gedtest";

//connection to the database
$dbhandle = mssql_connect($myServer, $myUser, $myPass)
or die("Couldn't connect to SQL Server on $myServer");

//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle)
or die("Couldn't open database $myDB");



?>

