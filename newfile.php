<?php
echo 'this is my first page x ';

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

//declare the SQL statement that will query the database
$query = "SELECT * FROM test";

//execute the SQL statement and return records
$rs = $conn->execute($query);

$num_columns = $rs->Fields->Count();
echo $num_columns . "<br>";

for ($i=0; $i < $num_columns; $i++) {
	$fld[$i] = $rs->Fields($i);
}

echo "<table>";

?>

