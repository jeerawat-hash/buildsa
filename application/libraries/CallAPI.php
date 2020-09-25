<?php 
  
	class CallAPI
	{

			public $dest = "URL";
 
			var $return;
		function send($value)
		{	
			
					//API URL
				$url = $this->dest;

				//create a new cURL resource
				$ch = curl_init($url);

				//setup request to send json via POST
				//$data = $array;

				$payload = json_encode($value);

				//attach encoded JSON string to the POST fields
				curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

				//set the content type to application/json
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

				//return response instead of outputting
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				//execute the POST request
				 $result = curl_exec($ch);
				 $this->return = $result;

				//close cURL resource
				curl_close($ch);

		}

		function get_back()
		{	
			//return json_decode($this->array,true);
			return $this->return;
		}

  
  
	}




 ?>