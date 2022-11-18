<?php
$host = "host=127.0.0.1";
$port = "port=5432";
$dbname = "dbname=registration";
$credentials="user=postgres password=root";

$db = pg_connect("$host $port $dbname $credentials" );
if(!$db){
    echo "Error:unable to open database\n";

} else {
    echo "opened database successfully\n";
}

 $sql = <<<EOF
  CREATE TABLE COMPANY
  (ID INT PRIMARY KEY NOT NULL,
  NAME            TEXT NOT NULL,
  AGE              INT NOR NULL,
  ADDRESS         CHAR(50),
  SALARY          REAL);

EOF;
 $ret = pg_query($db, $sql);
 if(!$ret){
    echo pg_last_error($db);

 } else {
    echo "Table created successfully\n";
 }
 pg_close($db);

?>