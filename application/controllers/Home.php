<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		error_reporting(0);
		$data = ['user_id'=>96];

		$http_method = 'POST';
		$auth = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM";
		$url  = 'https://softonauts.com/clients/Android/get-drop-in-navigator-list';
		 
		 $req = curl_init($url);
		 curl_setopt($req, CURLOPT_HTTPHEADER, array(
			'Authorization:'.$auth,
			'Accept: application/xml',
			'Content-Type: application/x-www-form-urlencoded',
		));

		curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($req, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($req, CURLOPT_TIMEOUT, 30);
		 curl_setopt($req, CURLOPT_CUSTOMREQUEST, $http_method);


		if (!is_null($data)) {
			if (is_array($data)) {
				$raw = http_build_query($data);
			} else {
 
				$raw = $data;
			}
			curl_setopt($req, CURLOPT_POSTFIELDS, $raw);

		}

	 $raw = curl_exec($req);

	 $res = json_decode($raw);
	 
	 $page_data['data'] =   $res;


	 $this->load->view('home',$page_data );

	}

	public function post_action()
	{

		$data = ['location_id'=>$_POST['location_id']]; 

			$http_method = 'POST';
			$auth = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MX0.By2r2BwheJsbrEGrHOaMQwrrmlY7wHVFzWtuEmv39fM";
			$url  = 'https://softonauts.com/clients/Android/get-time-slots';
			 
	         $req = curl_init($url);
	         curl_setopt($req, CURLOPT_HTTPHEADER, array(
	            'Authorization:'.$auth,
	            'Accept: application/xml',
	            'Content-Type: application/x-www-form-urlencoded',
	        ));

		    curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($req, CURLOPT_SSL_VERIFYPEER, true);
		    curl_setopt($req, CURLOPT_TIMEOUT, 30);
         	curl_setopt($req, CURLOPT_CUSTOMREQUEST, $http_method);

 
	        if (!is_null($data)) {
	            if (is_array($data)) {
	                $raw = http_build_query($data);
	            } else {
	 
	                $raw = $data;
	            }
	            curl_setopt($req, CURLOPT_POSTFIELDS, $raw);

	        }

     	 $raw = curl_exec($req);
         $res = json_decode($raw);
    
		 $message='';
		
		if(isset($res->timeslots))
		{
			$message.=' <ul role="tablist">';
		
			foreach($res->timeslots as $index => $data)
			{
 				$dt =$data->show_date ;
 
				$message.='<li role="tab"><a href="#tabs-'.$index.'" class="text-center" role="presentation">'.$dt.'
				<br>
				<small class="fdc">'.$data->count.' slot available</small></a></li>';	
			}

			$message.=' </ul>'; 

			foreach($res->timeslots as $index => $data)
			{
				$dt =$data->show_date ;

				$message.=' <div>'; 
				$message.=' <div id="tabs-'.$index.'" role="tabpanel">';
				
				$message.=' <div class="col-md-12 text-center mb-4"><b>'.$dt.'
				</b></div>'; 

				if(isset($data->slotes))
				{
					foreach($data->slotes as $key => $slots)
					{
					 	$url = base_url("appointment_details");
						$message.='<div class="col-md-12 mb-2"><b>'.$key.':</b> <small>'.count($slots).' slots
						available</small></div>
						<div class="col-md-12 mb-3">';
						foreach($slots as $slot)
						{
							$message.='    <a href="'. $url.'" > <button class="btn btn-sm btn-outline-primary mr-2">'.$slot.'</button></a>'; 
						}
						$message.='</div>';  
					}
				}
			 $message.='</div></div>';
			
			}
		} 
			echo $message; 
	}


    public function appointment_details()
    {
        $this->load->view('appointment_details');
    }


}
