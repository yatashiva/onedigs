<?php

class Hotel extends CI_Controller{
    function __construct()
    {
        parent::__construct();
         $this->load->model('Hotel_model');
        $this->load->model('Reservation_model');
        $this->load->model('Room_category_model');
        $this->load->model('Vendor_detail_model');
        $this->load->model('Amenity_model');
        $this->load->model('Inventory_model');
    } 

	function search()
    {   
        // $this->load->library('../controllers/inventory');
        
         $this->Inventory_model->inventory();
        if(isset($_POST) && count($_POST) > 0)     
        {   
	
					// var_dump("hi");die;
    // $location=explode(', ',$this->input->get('location'));
    // $count = count($location);
    // $i= $count-3;
    // // var_dump($count);die;        
    // $arr=explode(' - ',$this->input->get('daterange'));
    // $rooms=explode(',',$this->input->get('rooms'));
    // $room = preg_replace('/\D/', '', $rooms[0]);
    // $guest = preg_replace('/\D/', '', $rooms[1]);
            $params = array(            
                'location' =>$this->input->post('location'),
                'start' =>$this->input->post('start'),
                'end' =>$this->input->post('end'), 
                'rooms' => $this->input->post('rooms'),
                'guests' =>$this->input->post('guests'),
                
            );
        //   var_dump($params);die;

            $data['hotels'] = $this->Hotel_model->get_hotels_location($params);
            // $data['count'] = count($data['hotels']);
            // $data['location'] = $this->input->get('location');
            // $data['date_range']=$this->input->get('daterange');
            // $data['start'] =$params['start'];
            // $data['end'] =$params['end'];       
            // $data['rooms'] =$rooms;
            // $data['guest'] =$guests;        
            // $data['rooms']=$this->input->get('rooms');
               
            if($data['hotels'] == NULL)
                {
                    //$data1['hotels'] = $this->Hotel_model->get_hotels($params);
                    $this->load->view('frontend/in',$data);
                }
            else
                {
					// var_dump($data);die;
                  echo json_encode($data);  
                    // $this->load->view('frontend/in',$data);
                }
        }
        else
        {
			var_dump("bie");die;
            redirect('home/index');
        }
       
    } 
    
    function booking()
    {
    	$this->load->view('frontend/booking1');
    }

	
	  
   
}
