<?php 

class Send_email_new extends CI_Controller {

    function __construct() {
        parent::__construct();
        //Load email library
        $this->load->library('email');
        $this->load->model('Login_user_model');
    }


public function index(){
$bookingId=$this->input->post('inputVar');

//Loading Booking details from model
$data['result'] = $this->Login_user_model->getbooking($bookingId);

var_dump($data['result']['guest_email']);

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'olakiteappps@gmail.com',
    'smtp_pass' => 'Welcome@123',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);


$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");


//Email content
// $htmlContent = 'Hi there!<br>'.'<br>'."This are the booking detail:".'<br>'.'Resend time:'.date("h:i:sa").$booking_id['booking_id'].$booking_id[0].'<br>Booking details:'.$booking_id;
$htmlContent = 'Hi there!<br>'.'<br>'."These are the booking detail:".'<br>'
.'Hotel Name: '.$data['result']['name'].'<br>Booking ID: '.$data['result']['reservation_id'].'<br>Name: '.$data['result']['guest_name'].'<br>No.of Guests: '.$data['result']['persons'].'<br>Check in: '.$data['result']['check_in'].'<br>Check out: '.$data['result']['check_out'];



$this->email->to($data['result']['guest_email']);
$this->email->from('olakiteapps@gmail.com','Olakite');
$this->email->subject('Booking histroy of Olakite.com');
$this->email->message($htmlContent);

//Send email
$this->email->send();
}

};

?>