<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Trending_destinations extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Trending_destinations_model');
    } 

    /*
     * Listing of locations
     */
    function index()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        } 
    
        $data['trending_destinations'] = $this->Trending_destinations_model->get_all_trending_destinations();
        
        $data['_view'] = 'trending_destinations/index';
        $this->load->view('admin/index',$data);
    }

    /*
     * Adding a new amenity
     */
    function add()
    {   
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        } 
        if($this->session->userdata('user_type')==1){ 
        if(isset($_POST) && count($_POST) > 0)     
        {   
           
            $params = array(
				'locations' => $this->input->post('locations'),
                'location_pic' => $_FILES['location_pic']['name'],
                "state" => $this->input->post('trending_destinations'),
            );

            $config['upload_path']          = './uploads/trending_destinations';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1005*320;
           
            $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('location_pic')) {
            $error = array('error' => $this->upload->display_errors()); 
             print_r ($error);
                die();
             }
        
            
            $this->Trending_destinations_model->add_trending_destinations($params);
            redirect('trending_destinations/index');
        }
        else
        {            
            $data['_view'] = 'trending_destinations/add';
            $this->load->view('admin/index',$data);
        }
    }else{
        show_error('you are not permitted to access this page');
    }
    }  

    /*
     * Editing a location
     */
    function edit($id)
    {   
        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        } 
        if($this->session->userdata('user_type')==1){
        // check if the destination exists before trying to edit it
        $data['trending_destinations'] = $this->Trending_destinations_model->get_trending_destinations($id);
        
        if(isset($data['trending_destinations']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {  
                //echo 'hi';die();
        
                $date=date('Y-m-d H:i:s'); 
                $params = array(
					'locations' => $this->input->post('locations'),
                    'state' => $this->input->post('trending_destinations'),

                );
                if(isset($_FILES['location_pic']['name']) && $_FILES['location_pic']['name']!='')
                { 
                 
                    $location_pic=$_FILES['location_pic']['name'];
                    
                    $params['location_pic']=$location_pic;
                    $config['upload_path']          = './uploads/trending_destinations';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 1005*320;
    
                    $this->load->library('upload', $config);
                     $this->upload->do_upload('location_pic');
                }



                $this->Trending_destinations_model->update_trending_destinations($id,$params);            
                redirect('trending_destinations/index');
            }
            else
            {
                $data['_view'] = 'trending_destinations/edit';
                $this->load->view('admin/index',$data);
            }
        }
        else
            show_error('The destination you are trying to edit does not exist.');
    }else{
        show_error('you are not permitted to access this page');
    }
    } 

    /*
     * Deleting destinations
     */
    function remove($id)
    {

        if (!$this->session->userdata('is_logged_in')) {
            redirect('login_user/login');
        } 
        if($this->session->userdata('user_type')==1){
        $trending_destinations = $this->Trending_destinations_model->get_trending_destinations($id);

        // check if the destination exists before trying to delete it
        if(isset($trending_destinations['id']))
        {
            $this->Trending_destinations_model->delete_trending_destinations($id);
            redirect('trending_destinations/index');
        }
        else
            show_error('The destination you are trying to delete does not exist.');
        }else{
            show_error('you are not permitted to access this page');
        }
    }
    
}