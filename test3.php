<meta charset="utf-8">
<?php 
ini_set('display_errors',1);


 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, " SELECT  Person_name  FROM invoice  ");


    while ($result = odbc_fetch_array($query)) {

            echo $result["Person_name"]."<br>";

    }
 

    


 ?>