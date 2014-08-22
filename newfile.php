<?php
echo 'this is my first page \n';

echo 'how is it going';


/*
 PHP MSSQL Example

Replace data_source_name with the name of your data source.
Replace database_username and database_password
with the SQL Server database username and password.
*/
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
while($row = mssql_fetch_array($result))
{
	echo "<li>" . $row["id1"] . "</li>";
}
//close the connection
mssql_close($dbhandle);


?>

