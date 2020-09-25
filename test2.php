<?php 
 
 $conn = odbc_connect("TestDatabase", "", "");


    $q =    odbc_exec($conn, "select Person_name from invoice ");

    print_r(odbc_fetch_array($q));
 

    


 ?>