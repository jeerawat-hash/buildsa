 
<?php 
ini_set('display_errors',1);

 
$driver = "MDBTools";
$dbName = "/home/admin/web/saraya.sakorncable.com/public_html/DB/saraya.mdb";
$db = new PDO("odbc:Driver=$driver;DBQ=$dbName", "", "");

  foreach ($db->query("SELECT  Person_name  FROM invoice WHERE room_no like '111/6%' ") as $row) {
      
      print_r($row)."<br>";

}

    


 ?>