<?php 
	
if (!($conn = odbc_connect("TestDatabase", "", ""))) {
echo "Connection Falied.";
} else {
echo "Connection Success.";

    $q =    odbc_exec($conn, "SELECT *
FROM invoice
WHERE room_no = '111/6'
ORDER BY invoice_date DESC");

    print_r(odbc_fetch_array($q));
}


 ?>