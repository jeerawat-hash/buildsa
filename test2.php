<?php 
 $conn = odbc_connect("TestDatabase", "", "");


    $q =    odbc_exec($conn, "SELECT top 1 * FROM invoice ");

    print_r(odbc_fetch_array($q));
 


 ?>