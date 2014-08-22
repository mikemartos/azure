<?php
echo 'this is my first page ';

$myServer = "ry76ak4ig9.database.windows.net";
$myUser = "mike";
$myPass = "Ms10kl31011";
$myDB = "gedtest";

//connection to the database
$dbhandle = mssql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer"); 

//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle)
or die("Couldn't open database $myDB");

//declare the SQL statement that will query the database
$query = "SELECT * ";
$query .= "FROM test ";

//execute the SQL query and return records
$result = mssql_query($query);

$numRows = mssql_num_rows($result);
echo "<h1>" . $numRows . " Row" . ($numRows == 1 ? "" : "s") . " Returned </h1>";

//display the results

//close the connection
mssql_close($dbhandle);

?>

