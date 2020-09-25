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
      Invoice_amount ,
      Receipt_amount ,
      Invoice_pre_amount ,
      Total_invoice ,
      Old_blanace '
      FROM invoice
      WHERE room_no = '111\/6'
      ORDER BY invoice_date DESC;
       ");


    while ($result = odbc_fetch_array($query)) {

          print_r(odbc_fetch_array($query))."<br>";

    }
 

    


 ?>