<meta charset="utf-8">
<?php 
 error_reporting(E_ALL);

 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, "SELECT CONVERT(decimal(28,2), Old_blanace) AS Old_blanace FROM invoice where Room_no like '111/6%' ");


    while ($result = odbc_fetch_array($query)) {

          print_r(odbc_fetch_array($query))."<br>";

    }
 

    


 ?>