<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Feedback_contact extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    } 

    /*
     * Directing to Email controller
     */
    public function index()
    {
        if(isset($_POST) && count($_POST) > 0)     
        {   
                   
            $params = array(
            'fname' => $this->input->post('firstname'),
            'lname' => $this->input->post('lastname'),
            'cnumber' => $this->input->post('contact_number'),
            'emailId' => $this->input->post('emailId'),
            'mSummary' => $this->input->post('message_summary'),
            );
            $this->session->set_userdata($params);
            redirect('Send_email/feedback_contact/');
            
        }
        else{
            $this->load->view('frontend/f_form/');
            }
        
    }



}

//     /*
//      * Adding a new amenity
//      */
//     function add()
//     {   
//         if (!$this->session->userdata('is_logged_in')) {
//             redirect('login_user/login');
//         } 
//         if($this->session->userdata('user_type')==1){ 
//         if(isset($_POST) && count($_POST) > 0)     
//         {   
           
//             $params = array(
// 				'name' => $this->input->post('name'),
//                 'icon' => $this->input->post('aIcon')				
//             );
            
//             $amenity_id = $this->Amenity_model->add_amenity($params);
//             redirect('amenity/index');
//         }
//         else
//         {            
//             $data['_view'] = 'amenity/add';
//             $this->load->view('admin/index',$data);
//         }
//     }else{
//         show_error('you are not permitted to access this page');
//     }
//     }  

//     /*
//      * Editing a amenity
//      */
//     function edit($id)
//     {   
//         if (!$this->session->userdata('is_logged_in')) {
//             redirect('login_user/login');
//         } 
//         if($this->session->userdata('user_type')==1){
//         // check if the amenity exists before trying to edit it
//         $data['amenity'] = $this->Amenity_model->get_amenity($id);
        
//         if(isset($data['amenity']['id']))
//         {
//             if(isset($_POST) && count($_POST) > 0)     
//             {  
//             $date=date('Y-m-d H:i:s'); 
//                 $params = array(
// 					'name' => $this->input->post('name'),
//                     'icon' => $this->input->post('aIcon'),
// 					'updated_at' => $date,
//                 );

//                 $this->Amenity_model->update_amenity($id,$params);            
//                 redirect('amenity/index');
//             }
//             else
//             {
//                 $data['_view'] = 'amenity/edit';
//                 $this->load->view('admin/index',$data);
//             }
//         }
//         else
//             show_error('The amenity you are trying to edit does not exist.');
//     }else{
//         show_error('you are not permitted to access this page');
//     }
//     } 

//     /*
//      * Deleting amenity
//      */
//     function remove($id)
//     {

//         if (!$this->session->userdata('is_logged_in')) {
//             redirect('login_user/login');
//         } 
//         if($this->session->userdata('user_type')==1){
//         $amenity = $this->Amenity_model->get_amenity($id);

//         // check if the amenity exists before trying to delete it
//         if(isset($amenity['id']))
//         {
//             $this->Amenity_model->delete_amenity($id);
//             redirect('amenity/index');
//         }
//         else
//             show_error('The amenity you are trying to delete does not exist.');
//         }else{
//             show_error('you are not permitted to access this page');
//         }
//     }
    
// }
