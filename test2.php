<meta charset="utf-8">
<?php 
 
 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, "select Person_name from invoice ");


    while ($result = odbc_fetch_array($query)) {

          print_r(odbc_fetch_array($query))."<br>";

    }
 

    


 ?>