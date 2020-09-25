<meta charset="utf-8">
<?php 
ini_set('display_errors',1);

 
$driver = "MDBTools";
$dbName = "/home/admin/web/saraya.sakorncable.com/public_html/DB/saraya.mdb";
$db = new PDO("Driver=Microsoft Access Driver (*.mdb);DBQ=".$dbName.";UID=;PWD=;");

  foreach ($db->query("SELECT  *  FROM invoice WHERE room_no like '111/6%' ") as $row) {
      
      print_r($row)."<br>";

}

    


 ?>