<?php
echo 'this is my first page ';

$myServer = "ry76ak4ig9.database.windows.net";
$myUser = "mike";
$myPass = "Ms10kl31011";
$myDB = "gedtest";
//connection to the database
echo 'conf ';

//create an instance of the  ADO connection object
$conn = new COM ("ADODB.Connection")
or die("Cannot start ADO");

//define connection string, specify database driver
$connStr = "PROVIDER=SQLOLEDB;SERVER=".$myServer.";UID=".$myUser.";PWD=".$myPass.";DATABASE=".$myDB;
$conn->open($connStr); //Open the connection to the database


?>

