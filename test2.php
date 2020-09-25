<meta charset="utf-8">
<?php 
ini_set('display_errors',1);

 
$driver = "MDBTools";
$dbName = "/home/admin/web/saraya.sakorncable.com/public_html/DB/saraya.mdb";
$db = new PDO("odbc:Driver=$driver;DBQ=$dbName", "", "");

  foreach ($db->query("SELECT 
Invoice_id,
Invoice_no,
Invoice_date,
Due_date,
Room_no,
Person_id,
Person_name,
Invoice_amount as 'เดือนนี้',
Receipt_amount as 'รับเข้า',
Invoice_pre_amount ,
Total_invoice as 'ยอดรวมต้องจ่าย', 
 
FROM invoice") as $row) {
      
      print_r($row)."<br>";

}

    


 ?>