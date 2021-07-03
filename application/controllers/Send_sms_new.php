<?php 

class Send_sms_new extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Hotel_model');
        $this->load->model('Login_user_model');
    }


public function index(){
$bookingId=$this->input->post('inputVar');

//Loading Booking details from model
$data['result'] = $this->Login_user_model->getbooking($bookingId);
echo $data['result']['hotel_id'];

//Sms content
$book= $this->Hotel_model->get_hotel($data['result']['hotel_id']); 
$address=explode(',', $book['hotel_address']);
$address=implode('+', $address);
$address = preg_replace('/\s+/', '+', $address);
$mapAdd = "http://maps.google.com/maps?saddr=My+Location&daddr=".$address;
$message="Booking No-".$data['result']['reservation_id'].", Name:".$data['result']['guest_name']." is confirmed for hotel ".$data['result']['name']. " from -".$data['result']['check_in']. " to -".$data['result']['check_out'] ." for ". $data['result']['persons']. " Guest(s). "."Link for directions:".$mapAdd;

//sms code
$username = 'faceone';
$password = 'salu';
$from = 'OLAKTE';
$url = "http://sms.scubedigi.com/api.php?username=".$username."&password=".$password."&to=".$data['result']['guest_numbers']."&from=".urlencode($from)."&message=".urlencode($message)."&PEID=1501667280000019636";
$ch  =  curl_init();
curl_setopt ($ch,CURLOPT_URL, get_tiny_url($url)) ;
curl_setopt ($ch,CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch) ;
curl_close($ch) ; 


}

function get_tiny_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
}

};

?>