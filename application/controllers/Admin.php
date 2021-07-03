<?php

class Admin extends CI_Controller {

    function __construct() {
       
        parent::__construct();
        $this->load->model('Hotel_model');
        $this->load->model('Reservation_model');
        $this->load->model('Room_category_model');
        $this->load->model('Vendor_detail_model');
        $this->load->model('Amenity_model');
        $this->load->model('Inventory_model');
         $this->load->model('Travel_agent_model');
         $this->load->model('Login_user_model');
        
    }


    function index() {
       
           $this->load->view('admin/login');
    }

    function dashboard(){
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        }    
$monday = date( 'Y-m-d', strtotime( 'monday this week' ) );
        $tuesday = date( 'Y-m-d', strtotime( 'tuesday this week' ) );
        $wednesday = date( 'Y-m-d', strtotime( 'wednesday this week' ) );
        $thursday = date( 'Y-m-d', strtotime( 'thursday this week' ) );
        $friday = date( 'Y-m-d', strtotime( 'friday this week' ) );
        $saturday = date( 'Y-m-d', strtotime( 'saturday this week' ) );
        $sunday = date( 'Y-m-d', strtotime( 'sunday this week' ) );
        // $monday = strtotime("last monday");
        // $monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
         
        // $sunday = strtotime(date("Y-m-d",$monday)." +6 days");
         
        // $start = date("Y-m-d",$monday);
        // $end = date("Y-m-d",$sunday);
        // $data['daily'] = $this->Hotel_model->daily_data($start,$end);
        
       // var_dump($data['daily']);die;
        if($this->session->userdata('user_type')==1){
         $data['monday'] = $this->Hotel_model->daily($monday);
        $data['tuesday'] = $this->Hotel_model->daily($tuesday);
        
        $data['wednesday'] = $this->Hotel_model->daily($wednesday);
        
        $data['thursday'] = $this->Hotel_model->daily($thursday);
        
         $data['friday'] = $this->Hotel_model->daily($friday);
        
         $data['saturday'] = $this->Hotel_model->daily($saturday);
        
         $data['sunday'] = $this->Hotel_model->daily($sunday);
        $data['num'] = $this->Hotel_model->gethtls();
        $data['reservations'] = $this->Hotel_model->total_reservations();
        $data['users'] = $this->Hotel_model->total_users();
        $data['agents'] = $this->Hotel_model->total_agents();
        // print_r($data);
        // die();
       
    }
    elseif($this->session->userdata('user_type')==2)
    {
        $id=$this->session->userdata('login_id');
      
         $data['monday'] = $this->Hotel_model->daily($monday,$id);
        $data['tuesday'] = $this->Hotel_model->daily($tuesday,$id);
        
        $data['wednesday'] = $this->Hotel_model->daily($wednesday,$id);
        
        $data['thursday'] = $this->Hotel_model->daily($thursday,$id);
        
         $data['friday'] = $this->Hotel_model->daily($friday,$id);
        
         $data['saturday'] = $this->Hotel_model->daily($saturday,$id);
        
         $data['sunday'] = $this->Hotel_model->daily($sunday,$id);
        $data['num'] = $this->Hotel_model->gethtls($id);
        $data['reservations'] = $this->Hotel_model->total_reservations($id);
        $data['users'] = $this->Hotel_model->total_users();
        // $data['agents'] = $this->Hotel_model->total_agents();
    }
    elseif($this->session->userdata('user_type')==4)
    {
         $id=$this->session->userdata('login_id');

         $data['monday'] = $this->Hotel_model->daily_agent($monday,$id);
        $data['tuesday'] = $this->Hotel_model->daily_agent($tuesday,$id);
        
        $data['wednesday'] = $this->Hotel_model->daily_agent($wednesday,$id);
        
        $data['thursday'] = $this->Hotel_model->daily_agent($thursday,$id);
        
         $data['friday'] = $this->Hotel_model->daily_agent($friday,$id);
        
         $data['saturday'] = $this->Hotel_model->daily_agent($saturday,$id);
        
         $data['sunday'] = $this->Hotel_model->daily_agent($sunday,$id);
       // $data['num'] = $this->Hotel_model->gethtls($id);
        $data['reservations'] = $this->Hotel_model->total_reservations_agent($id);
        $data['amount_gained'] = $this->Travel_agent_model->amount_gained($id);
      
    }

       
      $data['_view'] = 'admin/dashboard';
 $this->load->view('admin/index', $data);
    }
   
    function hotelview($id){
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        }    

        


        $data['_view'] = 'admin/hotel_details';
        $this->load->view('admin/index', $data);

    }
    function viewprofile(){
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        }    
        $id=$this->session->userdata('login_id');

        // adding this to show the pan and gst inputs in profile update page, based on clients
        $data['details'] = $this->Login_user_model->get_login_user($id);
        if( $data['details']['user_type'] == 4){
        $data['agent_detail'] = $this->Travel_agent_model->get_agent($id);
        }
        
        $data['details'] = $this->Login_user_model->get_login_user($id);
        $data['_view'] = 'admin/viewprofile';
        $this->load->view('admin/index', $data);

    }
      function editprofile(){
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        } 
        if(isset($_POST) && count($_POST) > 0){
            $id=$this->session->userdata('login_id');
            $params = array(
                    'username' => $this->input->post('username'),
                    'phone_no' => $this->input->post('phone_no'),
                    'email' => $this->input->post('email'),
                   );
            $params1 = array(
                    'name' => $this->input->post('username'),
                    'phone_no' => $this->input->post('phone_no'),
                    'email' => $this->input->post('email'),
                   );

            if($this->session->userdata('user_type')==2){
                $this->Login_user_model->update_login_user($id,$params);
                $this->Vendor_detail_model->update_vendor_detail($id,$params1);
             }else if($this->session->userdata('user_type')==4){
                $params1 = array(
                    'gst_no' => $this->input->post('gst_no'),
                    'pan_no' => $this->input->post('pan_no'),
                );
                $this->Login_user_model->update_login_user($id,$params);
                $this->User_detail_model->update_user_detail($id,$params1);  
             }
             // in the above else if we checked if it is travel agent an dadded extra inputs to update in the  user_details table
                else {
                   $this->Login_user_model->update_login_user($id,$params);
                   $this->User_detail_model->update_user_detail($id,$params1);
             }
              $this->session->set_flashdata('user_saved', 'User has been saved');
             redirect('admin/viewprofile');
        }  
        else{

// checking if the user is travel agent and adding necessary parameters to the data array to check in the view for travel agent and give extra inputs in profile            
        $id=$this->session->userdata('login_id');
        $data['details'] = $this->Login_user_model->get_login_user($id);
        if( $data['details']['user_type'] == 4){
            $data['agent_detail'] = $this->Travel_agent_model->get_agent($id);
            }
        $data['_view'] = 'admin/editprofile';
        $this->load->view('admin/index', $data);
         }

    }
    function changepassword(){
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        }    
        if(isset($_POST) && count($_POST) > 0){
           
            $id=$this->session->userdata('login_id');
            $password = md5($this->input->post('password'));
            $old = md5($this->input->post('old'));
             $data['details'] = $this->Login_user_model->get_login_user($id);

              // var_dump($password);die;

             if($old == $data['details']['password']){
                    $this->Login_user_model->changepassword($id,$password);
        
                    redirect('admin/dashboard');
             }
             else{
                // $id=$this->session->userdata('login_id');
                // $data['details'] = $this->Login_user_model->get_login_user($id);
                // $data['_view'] = 'admin/changepassword';
                // $this->load->view('admin/index', $data);
                echo '<script>
                        alert("Old password is wrong please enter correct password");
                        window.location.href="' . base_url() . 'index.php/admin/changepassword";
                       </script>';

             }
            

        }  
        else{

        $id=$this->session->userdata('login_id');
        $data['details'] = $this->Login_user_model->get_login_user($id);
        $data['_view'] = 'admin/changepassword';
        $this->load->view('admin/index', $data);
         }

    }

}