<meta charset="utf-8">
<?php 
ini_set('display_errors',1);

 
$driver = "MDBTools";
$dbName = "/home/admin/web/saraya.sakorncable.com/public_html/DB/saraya.mdb";
$db = new PDO("odbc:Driver=$driver;DBQ=$dbName", "", "");

  foreach ($db->query("SELECT  invoice_id,Total_invoice,old_blanace  FROM invoice") as $row) {
      
      print_r($row)."<br>";

}

    


 ?>