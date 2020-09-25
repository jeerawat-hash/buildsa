<?php 
	
if (!($conn = odbc_connect("TestDatabase", "", ""))) {
echo "Connection Falied.";
} else {
echo "Connection Success.";
}


 ?>