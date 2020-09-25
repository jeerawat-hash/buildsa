<?php 
/**
 * 
 */
class Devices extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct(); 
		$this->load->model("Devices_model");
 
 
	}

	public function index()
	{
			
 		echo json_encode($this->Devices_model->getLastData());	
	
	}

	public function IOTDevice()
	{
 		error_reporting(0);
 		
 		$this->load->library("PhpMQTTServer"); 
 			

		    $server_mq  = "192.168.200.111"; #Server ip address
		    $port_mq  = 1883;
		    $username_mq = "sakorn";  #username ที่ได้สร้างไว้ตอนตั้งค่า MQTT Broker
		    $password_mq = "sakorn";  #password ที่ได้สร้างไว้ตอนตั้งค่า MQTT Broker
		    $client_id_mq = "Client-".rand();

		    $this->mqtt = new PhpMQTTServer($server_mq, $port_mq, $client_id_mq);
		    $this->mqtt->connect(true, NULL, $username_mq, $password_mq);
			 
		    $msg = $this->mqtt->publish($_POST["Channel"], $_POST["Status"], 0);

		    $this->mqtt->close();
		    
		      
	       
	}

	public function IOTtest($Channel,$Status)
	{
 		error_reporting(0);
 		
 		$this->load->library("PhpMQTTServer"); 
 			

		    $server_mq  = "192.168.200.111"; #Server ip address
		    $port_mq  = 1883;
		    $username_mq = "sakorn";  #username ที่ได้สร้างไว้ตอนตั้งค่า MQTT Broker
		    $password_mq = "sakorn";  #password ที่ได้สร้างไว้ตอนตั้งค่า MQTT Broker
		    $client_id_mq = "Client-".rand();

		    $this->mqtt = new PhpMQTTServer($server_mq, $port_mq, $client_id_mq);
		    $this->mqtt->connect(true, NULL, $username_mq, $password_mq);
			 
		    $msg = $this->mqtt->publish($Channel, $Status, 0);

		    $this->mqtt->close();
		    
		      
	       
	}



	public function app($ID = null)
	{ 

		$Data["INFO"] = "null";
		if ($ID != null) { 
			$Data["INFO"] = $this->Devices_model->getDataByID($ID);	
		}

		$this->load->view("direct/app",$Data);


	}
	
	public function temperature()
	{

		$this->load->view("direct/temperature");

	}

	public function testtemp()
	{

		$this->load->view("direct/test");

	}

	public function tempupload()
	{

		//print_r($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]);
		//print_r($_POST);


		if (isset($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["name"])) {
			

			$file = $_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
			move_uploaded_file($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
			$ImgUrl = "https://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
			$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],date("Y-m-d"),date("H:i:s"));
			
			echo "CaptureImage @ URL : ".$ImgUrl; 


		}else
		if (isset($_FILES["/home/pi/Desktop/capture/output_jpg"]["name"])) {
			///// for rasb
 

			$file = $_FILES["/home/pi/Desktop/capture/output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
			move_uploaded_file($_FILES["/home/pi/Desktop/capture/output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
			$ImgUrl = "https://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
			$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],date("Y-m-d"),date("H:i:s"));

			echo "CaptureImage @ URL : ".$ImgUrl; 

 

			///// for rasb
		}else{
			//// for mac

			
			$file = $_FILES["/Users/jeerawat/Desktop/testffmpeg/output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
			move_uploaded_file($_FILES["/Users/jeerawat/Desktop/testffmpeg/output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
			$ImgUrl = "https://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
			$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],date("Y-m-d"),date("H:i:s"));

			echo "CaptureImage @ URL : ".$ImgUrl; 

			//print_r($_FILES);
			//print_r($_POST);
			//// for mac
		}
		
		
	
		//$file = $_FILES["/home/pi/Desktop/output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
		//move_uploaded_file($_FILES["/home/pi/Desktop/output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
		//$ImgUrl = "http://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
		//$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],$_POST["Date"],$_POST["Time"]);


	}



}


			function procmsg($topic, $msg){
			  echo "Recieved at: " . date("Y-m-d H:i:s", time()) . "\n";
			  echo "Topic: {$topic}\n";
			  echo "Message: $msg\n\n";
			}

 ?>
