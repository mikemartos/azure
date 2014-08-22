<?php
echo 'this is my first page \n';

echo 'how is it going';


/*
 PHP MSSQL Example

Replace data_source_name with the name of your data source.
Replace database_username and database_password
with the SQL Server database username and password.
*/
$data_source='ry76ak4ig9.database.windows.net';
$user='mike';
$password='Ms10kl31011';
		
// This query generates a result set with one record in it.
$sql="SELECT * FROM TEST";

# Execute the statement.
$rs=odbc_exec($conn,$sql);		
		
ECHO $rs

?>

