<meta charset="utf-8">
<?php 
 error_reporting(E_ALL);

 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, "SELECT Invoice_id,Invoice_no,Invoice_date,Due_date,Room_no FROM invoice");


    while ($result = odbc_fetch_array($query)) {

          print_r(odbc_fetch_array($query))."<br>";

    }
 

    


 ?>