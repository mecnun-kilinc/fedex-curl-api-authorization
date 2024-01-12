<?php

/*
Test: https://apis-sandbox.fedex.com/
Production: https://apis.fedex.com/

grant_type= client_credentials&client_id=your client ID&client_secret=Your secret


*/


// class starts
class fedex {


	public $res;	
		
	public function __construct () {

		
		$url = 'https://apis-sandbox.fedex.com/oauth/token';


		$headers = array("Content-Type: application/x-www-form-urlencoded");
		$postyBody = "grant_type=client_credentials&client_id=XXXX-XXX-XXXX-XXX&client_secret=XXXX-XXX-XXXX-XXX";
		
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postyBody);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		$reponse = curl_exec($ch);
		
		curl_close($ch);

		$this->res = json_decode($reponse);
		

	}



	public function result () {


		echo "<pre>";
		var_dump($this->res);
		echo "</pre>";


		}


	} // class ends



	$response = new fedex();


	$response->result();
