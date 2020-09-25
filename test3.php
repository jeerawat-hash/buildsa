<meta charset="utf-8">
<?php 
ini_set('display_errors',1);


 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, " SELECT  Invoice_amount,Total_invoice  FROM invoice  ");


    while ($result = odbc_fetch_array($query)) {

            print_r($result);

    }
 

    


 ?>