<?php
error_reporting(-1);
ini_set('display_errors','On');
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

$query = 'SELECT * FROM invoice';
$mdb_file = '/home/admin/web/saraya.sakorncable.com/public_html/DB/saraya.mdb';
$uname = explode(" ",php_uname());
$os = $uname[0];
switch ($os){
  case 'Windows':
    $driver = '{Microsoft Access Driver (*.mdb)}';
    break;
  case 'Linux':
    echo "Linux\r\n";
    $driver = 'MDBTools';
    break;
  default:
    exit("Don't know about this OS");
}
$dataSourceName = "odbc:Driver=$driver;DBQ=$mdb_file;";
$db = new PDO($dataSourceName);
$sth = $db->prepare($query);
$sth -> execute();

foreach($sth as $row) {

    print_r(array_value($row));

}

?>
