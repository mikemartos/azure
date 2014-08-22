<?php
echo 'this is my first page ';

$myServer = "ry76ak4ig9.database.windows.net";
$myUser = "mike";
$myPass = "Ms10kl31011";
$myDB = "gedtest";
//connection to the database
echo 'conf ';
$dbhandle = mssql_connect($myServer, $myUser, $myPass)
or die("Couldn't connect to SQL Server on $myServer");
echo 'mssql_connect ';
//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle)
or die("Couldn't open database $myDB");
echo 'mssql_select_db ';
//declare the SQL statement that will query the database
$query = "SELECT * ";
$query .= "FROM test ";

//execute the SQL query and return records
$result = mssql_query($query);
echo 'mssql_query ';
$numRows = mssql_num_rows($result);
echo "<h1>" . $numRows . " Row" . ($numRows == 1 ? "" : "s") . " Returned </h1>";

//display the results
while($row = mssql_fetch_array($result))
{
	echo "<li>" . $row["id1"] . "</li>";
}
//close the connection
mssql_close($dbhandle);


?>

