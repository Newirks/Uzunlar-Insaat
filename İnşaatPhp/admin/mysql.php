<?php

 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'uzunlar');
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($conn,DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error());

	@mysql_query("SET NAMES 'utf8'");
	@mysql_query("SET CHARACTER SET 'utf8'");
	@mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
 }
?>