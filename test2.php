<?php 
/*
 $conn = odbc_connect("TestDatabase", "", "");


    $q =    odbc_exec($conn, "SELECT top 1 * FROM saraya.invoice ");

    print_r(odbc_fetch_array($q));
 */

    $driver = "MDBTools"; 
      $dbName = "/home/admin/web/saraya.sakorncable.com/public_html/DB/saraya.mdb"; 
      $db = new PDO("odbc:Driver=$driver;DBQ=$dbName", "", "");



 ?>