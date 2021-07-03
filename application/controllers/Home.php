<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Hotel_model');
        $this->load->model('Trending_destinations_model');

    }
    
    function index() {
        $data['hotels'] = $this->Hotel_model->get_top_hotel();
        $data['trending_destinations'] = $this->Trending_destinations_model->get_all_trending_destinations();
    //  print_r ($data['trending_destinations']);

    //  print_r ($data['hotels']);

    //  die();
        $this->load->view('frontend/index', $data);
 }
 function hotelsList()
 {
	 $this->load->view('frontend/in');
 }
 
 
 
}