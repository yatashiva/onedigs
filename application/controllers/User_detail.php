<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_detail extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_detail_model');
        $this->load->model('Login_user_model');
        

    } 

    /*
     * Listing of user_details
     */
    function index()
    {
        $data['user_details'] = $this->User_detail_model->get_all_user_details();
        
        $data['_view'] = 'user_detail/index';
        $this->load->view('admin/index',$data);
    }

    /*
     * Adding a new user_detail
     */
    function add()
    {   

        if(isset($_POST) && count($_POST) > 0)     
        {   

            
            // echo "<pre>";
            // print_r ($_POST);
            // echo "</pre>";
            // echo "jghkj";
            // die;
            extract($this->input->post());
            // if($user_type ==3){

                $loginparams= array(
                    // 'password' => md5($password),
					'username' => $name,
					// 
					'phone_no' => $phone_no,
					'user_type' => 3,
					'status' => 1,

                );
                if($email!=null){
                   $loginparams['email']= $email;
                   $get_user=$this->Login_user_model->checkUser_email($email);
                   if($get_user)
                   {
                     $res['status']="fail";
                     $res['error']="Email already exists";

                echo json_encode($res); 
                die;

                   }
                }

                $get_user_mobile=$this->Login_user_model->checkUser($phone_no);
                if($get_user_mobile)
                {
                   $res['status']="fail";
                     $res['error']=" Phone Number already exists";

                echo json_encode($res); 
                die;
                }

                
                $id = $this->Login_user_model->add_login_user($loginparams);
               

                $userparams= array(
                'login_id' => $id,
				'name' => $name,
				'phone_no' => $phone_no,
                
                );
                if($email!=null){
                    $userparams['email']= $email;
                 }
                 
                $user_detail_id = $this->User_detail_model->add_user_detail($userparams);
                $user_details = $this->User_detail_model->get_user_detail($user_detail_id);

                if($user_detail_id!=null){
                    $otp = rand(100001, 999999);
                    // $otp = 123456;
                  $loginp= array('otp' => $otp);
                 $up= $this->Login_user_model->update_login_user($id,$loginp);
                 $message="You are Successfully registered with NohoRooms.Please enter following otp to continue".$otp;
                 $this->sendotp($message,$phone_no);

                $res['userdetails'] = $user_details;

                // if($email!=null && $up !=null){
                //     $config = Array(
                //         'protocol' => 'smtp',
                //         'smtp_host' => 'ssl://smtp.gmail.com',
                //         'smtp_port' => 465,
                //         'smtp_user' => 'srikanth456789@gmail.com',
                //         'smtp_pass' => 'Sri@2017',
                //         'mailtype'  => 'html', 
                //         'charset'   => 'iso-8859-1'
                //     );
                //     $this->load->library('email');
                //     $this->email->initialize($config);
                //     $this->email->set_newline("\r\n");
                //     $this->email->from('srikanth456789@gmail.com', 'Your Name'); 
                //     $this->email->to($email);
                //     $this->email->subject('OTP for Login'); 
                //     $this->email->message('Please Enter the following otp for Login :'.$otp);
                    
                    
                //     $result = $this->email->send();
                // }

                 }
                $res['status']="success";

                echo json_encode($res); 
                
        }
        // else
        // {    
        // $res['status']="fail";

                // echo json_encode($res);    
            // $data['_view'] = 'user_detail/add';
            // $this->load->view('layouts/main',$data);
        // }
    }  

    /*
     * Editing a user_detail
     */
    function edit($id)
    {   
       //var_dump($id);die;
        // check if the user_detail exists before trying to edit it
          $data['user_detail'] = $this->User_detail_model->get_user_detail_by_login_id($id);
            // var_dump($data['user_detail']);die;
        if(isset($_POST) && count($_POST) > 0)     
            { 
              $params = array(
					// 'login_id' => $this->input->post('login_id'),
					'name' => $this->input->post('name'),
					'phone_no' => $this->input->post('phone_no'),
					'email' => $this->input->post('email'),
					// 'created_at' => $this->input->post('created_at'),
					// 'updated_at' => $this->input->post('updated_at'),
					// 'address' => $this->input->post('address'),

                );
              
              $params1 = array(
                    // 'login_id' => $this->input->post('login_id'),
                    'username' => $this->input->post('name'),
                    'phone_no' => $this->input->post('phone_no'),
                    'email' => $this->input->post('email'),
                    // 'created_at' => $this->input->post('created_at'),
                    // 'updated_at' => $this->input->post('updated_at'),
                    // 'address' => $this->input->post('address'),

                );
             
                // var_dump($params);die;
            $this->User_detail_model->update_user_detail($id,$params);

               $this->User_detail_model->update_user_detail1($id,$params1);  
               // var_dump($reg);die;          
                redirect(base_url());

}
           
            
                
          else
            {
                $data['view'] = 'user_detail/edit';
                 $this->load->view('user_detail/edit',$data);
            }           
        
        
    } 

    /*
     * Deleting user_detail
     */
    function remove($id)
    {
        $user_detail = $this->User_detail_model->get_user_detail($id);

        // check if the user_detail exists before trying to delete it
        if(isset($user_detail['id']))
        {
            $this->User_detail_model->delete_user_detail($id);
            redirect('user_detail/index');
        }
        else
            show_error('The user_detail you are trying to delete does not exist.');
    }
    function sendotp($msg,$email)
{
     // $otp = rand(100001, 999999);
     $username = 'nohorooms';
  $password = '298244';
  // $to ='7675021368';
  $from = 'NOHORM';
  // $message = 'Please Enter the following otp for Login :'.$otp;
  $url = "http://sms.scubedigi.com/api.php?username=".$username."&password=".$password."&to=".$email."&from=".urlencode($from)."&message=".urlencode($msg)."";
//Curl Start
  // $ch  =  curl_init();
 // $response = curl($url); 
 $ch  =  curl_init();
 // $timeout  =  30;
 curl_setopt ($ch,CURLOPT_URL, $url) ;
 curl_setopt ($ch,CURLOPT_RETURNTRANSFER, true);
 // curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
 $response = curl_exec($ch) ;
 curl_close($ch) ; 
 //Write out the response
 // die($response);
}
}
