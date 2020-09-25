<?php
error_reporting(-1);
ini_set('display_errors','On');
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

$query = 'SELECT * FROM invoice';
$mdb_file = '/home/admin/web/saraya.sakorncable.com/public_html/DB/saraya.mdb';
$driver = 'MDBTools';
$dataSourceName = "odbc:Driver=$driver;DBQ=$mdb_file;";
$db = new PDO($dataSourceName);
$sth = $db->prepare($query);
$sth -> execute();

foreach($sth as $row) {

    print_r($row);

}

?>
