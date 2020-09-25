<meta charset="utf-8">
<?php 
ini_set('display_errors',1);


 $conn = odbc_connect("TestDatabase", "", "");


    $query =    odbc_exec($conn, 'SELECT  Old_blanace  FROM invoice );


  
    


 ?>