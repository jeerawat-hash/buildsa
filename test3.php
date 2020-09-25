<meta charset="utf-8">
<?php 
ini_set('display_errors',1);


 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, " SELECT  invoice_id,Invoice_no,Invoice_date,Due_date,Room_no,Person_id,Person_name,Invoice_amount,Total_invoice,Receipt_amount  FROM invoice WHERE room_no like '111/6%' ");


    while ($result = odbc_fetch_array($query)) {

          print_r(odbc_fetch_array($query))."<br>";

    }
 

    


 ?>