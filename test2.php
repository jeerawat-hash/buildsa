<meta charset="utf-8">
<?php 
 
 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, "SELECT 
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
      Old_blanace as 'ยอดค้างเดิมรวม'
       
      FROM invoice
      WHERE room_no = '111/6'
      ORDER BY invoice_date DESC;
       ");


    while ($result = odbc_fetch_array($query)) {

          print_r(odbc_fetch_array($query))."<br>";

    }
 

    


 ?>