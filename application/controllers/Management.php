<?php 
/**
 * 
 */
class Management extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct(); 
		$this->load->model("Mobile_model");
 
 
	}

	public function index()
	{		

			$header['page_name'] = 'เลือกรายการ';
			$header['page_focus'] = 'home';
			 

			$this->load->view("page/template_mobile/header_admin",$header);
			$this->load->view("page/mobile/management");
			$this->load->view("page/template_mobile/footer");
			
	}
	public function authen()
	{		
 	 
 		echo $this->Mobile_model->Authentication($_POST["SecrectKEY"]);
			
	}
	public function createDataServicesCostFromXlsx()
	{


		$is_error = 2;

		if ($_FILES["ServicesCost"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerInvoice.xlsx"); 
 
			move_uploaded_file($_FILES["ServicesCost"]["tmp_name"], "/home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerInvoice.xlsx");
  
			$result = $this->Mobile_model->createDataFromXlsx("CustomerInvoice.xlsx"); 

			//print_r($result);
 
			foreach ($result as $Value) {

				if (isset($Value["Old_balance"])) {
					$this->Mobile_model->insertDataServicesCost($Value["Invoice_id"],$Value["Invoice_no"],$Value["Invoice_date"],$Value["Room_no"],$Value["Person_id"],$Value["Invoice_amount"],$Value["Old_balance"],$Value["Total_invoice"],$Value["Receipt_amount"],$Value["Doc_status"]); 
				}else{
					$is_error = 2;
				}
 
				 
			}

 
			//echo "1";
			echo $is_error;
		//	print_r($_FILES);
		}else{

			//echo "2";
			echo $is_error;
		}
 

	}
/*
	public function createDataServicesCostDetailFromXlsx()
	{


		if ($_FILES["ServicesCostDetail"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerInvoiceDetail.xlsx");
			
			move_uploaded_file($_FILES["ServicesCostDetail"]["tmp_name"], "/home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerInvoiceDetail.xlsx");
  
			$result = $this->Mobile_model->createDataFromXlsx("CustomerInvoiceDetail.xlsx");

			//print_r($result);
 
			foreach ($result as $Value) {

 
				//$this->Mobile_model->insertDataServicesCost($CUST,$Value["DATE"],$Value["CODE"],$Value["AMOUNT"]);
	 

			}

 
			echo "1";

		}else{

			echo "2";

		}
 

	}
	*/
	public function createDataReceiveFromXlsx()
	{


		//print_r($_FILES["ReceiveCost"]);


		if ($_FILES["ReceiveCost"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerReceipt.xlsx");
			
			move_uploaded_file($_FILES["ReceiveCost"]["tmp_name"], "/home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerReceipt.xlsx");

 			$result = $this->Mobile_model->createDataFromXlsx("CustomerReceipt.xlsx");

			//$this->Mobile_model->clearDataReceiveCost();

			foreach ($result as $Value) {

				//$this->Mobile_model->insertDataReceiveCost($Value["CUSTOMER"],$Value["RECEIPT"],$Value["CODE"],$Value["AMOUNT"]);

				//print_r($Value);

			}

			echo "1";
 

		}else{

			echo "2";

		}
 

	} 


	public function createDataReceiveDetailFromXlsx()
	{


		//print_r($_FILES["ReceiveCost"]);


		if ($_FILES["ReceiveCostDetail"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerReceiptDetail.xlsx");
			
			move_uploaded_file($_FILES["ReceiveCostDetail"]["tmp_name"], "/home/admin/web/saraya.sakorncable.com/public_html/upload/temp/CustomerReceiptDetail.xlsx");

 			$result = $this->Mobile_model->createDataFromXlsx("CustomerReceiptDetail.xlsx");

			//$this->Mobile_model->clearDataReceiveCost();

			foreach ($result as $Value) {

				//$this->Mobile_model->insertDataReceiveCost($Value["CUSTOMER"],$Value["RECEIPT"],$Value["CODE"],$Value["AMOUNT"]);

				//print_r($Value);

			}

			echo "1";
 

		}else{

			echo "2";

		}
  
	} 

 













}


function notify($message,$token){

			    $lineapi = $token; 
				$mms =  trim($message); 
				date_default_timezone_set("Asia/Bangkok");
				$con = curl_init();
				curl_setopt( $con, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
				// SSL USE 
				curl_setopt( $con, CURLOPT_SSL_VERIFYHOST, 0); 
				curl_setopt( $con, CURLOPT_SSL_VERIFYPEER, 0); 
				//POST 
				curl_setopt( $con, CURLOPT_POST, 1); 
				curl_setopt( $con, CURLOPT_POSTFIELDS, "message=$mms"); 
				$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
			    curl_setopt($con, CURLOPT_HTTPHEADER, $headers); 
				curl_setopt( $con, CURLOPT_RETURNTRANSFER, 1); 
				$result = curl_exec( $con ); 

}


 ?>