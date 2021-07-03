<?php 
class Send_email extends CI_Controller {

    function __construct() {
        parent::__construct();
        //Load email library
        $this->load->library('email');
        $this->load->library('session');

    }


public function index(){
//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'info@nohorooms.com',
    'smtp_pass' => 'saavi@123n',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$fname = $this->session->userdata('fname');
$lname = $this->session->userdata('lname');
$cnumber = $this->session->userdata('c_number');
$emailId = $this->session->userdata('emailId');



$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");



//Email content
$htmlContent = 'Hi there!<br>'.'<br>'.$fname.' '.$lname.' has shown intrest in nohorooms career and shared the below details:<br>'.'Mobile number: '.$cnumber.'<br>Email ID: '.$emailId.'<br>Area of intrest: '.$this->session->userdata('c_optn').'<br>Profile summary: '.$this->session->userdata('p_summary');

$this->email->to('info@nohorooms.com');
$this->email->from('info@nohorooms.com','Hotel Booking Portal');
$this->email->subject('Career requests for nohorooms.com');
$this->email->message($htmlContent);
//have to get these file names dynamically  
//$this->email->attach('/path/to/photo1.jpg');

//Send email
$this->email->send();
redirect('home/index');

    }

    public function feedback_contact(){

        //SMTP & mail configuration
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'info@nohorooms.com',
            'smtp_pass' => 'saavi@123n',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $fname = $this->session->userdata('fname');
        $lname = $this->session->userdata('lname');
        $cnumber = $this->session->userdata('cnumber');
        $emailId = $this->session->userdata('emailId');
        $mSummary = $this->session->userdata('mSummary');
        
        
        
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        
        
        //Email content
        $htmlContent = 'Hi there!<br>'.'<br>'.$fname.' '.$lname.' wanted to contact nohorooms and shared the below details:'.'<br>'.'Mobile number:'.$cnumber.'<br>Email Id: '.$emailId.'<br>Message summary: '.$mSummary;
        
        $this->email->to('info@nohorooms.com');
        $this->email->from('info@nohorooms.com','MyWebsite');
        $this->email->subject('Contact requests for nohorooms.com');
        $this->email->message($htmlContent);
        //have to get these file names dynamically  
        //$this->email->attach('/path/to/photo1.jpg');
        
        //Send email
        $this->email->send();
        redirect('home/index');
        
        }

};

?>