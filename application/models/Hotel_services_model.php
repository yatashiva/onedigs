<?php 

class Hotel_services_model extends CI_Model {

    function __construct()

    {

        parent::__construct();

    }
   function get_hotels_location($params)
	  {        
        $query1= "select *,min(min_price) from (
        select hotels.*, room_categories.price as min_price,room_categories.baseprice as base_price from hotels JOIN
        (select  DISTINCT(hotels.id) from hotels JOIN
        (select DISTINCT(hotels.id) from hotels JOIN(SELECT hotels.id,max(inventory.total_available - inventory.booked) as availability,inventory.category_id,inventory.date FROM hotels INNER JOIN
        inventory on inventory.hotel_id = hotels.id
        WHERE (date>='".$params['checkin']."' AND date<'".$params['checkout']."') 
        and hotels.location = '". $params['location']."' 
        GROUP by inventory.category_id)min_cat on min_cat.id = hotels.id
        WHERE min_cat.availability >= '". $params['rooms']."')min_rooms on min_rooms.id = hotels.id
        INNER join room_categories on room_categories.hotel_id = min_rooms.id
        WHERE room_categories.capacity * ".$params['rooms'].">= '". $params['adults']."')final on final.id= hotels.id
        join room_categories on room_categories.hotel_id = hotels.id
        GROUP by room_categories.hotel_id
        UNION DISTINCT
        select hotels.*, sub_category.price as min_price,sub_category.base_price as base_price from hotels JOIN
        (select  DISTINCT(hotels.id) from hotels JOIN
        (select DISTINCT(hotels.id) from hotels JOIN(SELECT hotels.id,max(inventory.total_available - inventory.booked) as availability,inventory.category_id,inventory.date FROM hotels INNER JOIN
        inventory on inventory.hotel_id = hotels.id
        WHERE (date>='".$params['checkin']."' AND date<'".$params['checkout']."') 
        and hotels.location = '". $params['location']."' 
        GROUP by inventory.category_id)min_cat on min_cat.id = hotels.id
        WHERE min_cat.availability >= '". $params['rooms']."')min_rooms on min_rooms.id = hotels.id
        INNER join sub_category on sub_category.hotel_id = min_rooms.id
        WHERE sub_category.capacity * ".$params['rooms'].">= '". $params['adults']."')final on final.id= hotels.id
        join sub_category on sub_category.hotel_id = hotels.id
        GROUP by sub_category.hotel_id) as res GROUP by id
        ";
        // $result=$this->db->query($query1)->result_array();
       
          return $this->db->query($query1)->result_array(); 
    }
    function get_all_amenities()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('amenities')->result_array();
    }
    function get_reservation($id)
    {

        return $this->db->get_where('reservations',array('id'=>$id))->row_array();
    }
    function get_room_availability_sample($params){
        // var_dump($params);
       
        // $datearray = explode(' - ',$params['date']);
        // var_dump($datearray);die;
        $startdate = $params['checkin'];
        $enddate = $params['checkout']; 
         $begin = new DateTime($startdate);
$end = new DateTime($enddate);

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$i=1;
$j=1;
foreach ($period as $dt) {
    $date=$dt->format("Y-m-d");
       
        if(array_key_exists("sub_category_id",$params)){
            // $query = "SELECT min(total_available - booked) as availability FROM `inventory`  WHERE (date>='".$startdate."' AND date<'".$enddate."') AND blocked=0 AND (total_available - booked) >= '".$params['rooms']."' AND capacity >= '".$params['adults']."' and hotel_id = '".$params['hotel_id']."' AND category_id = '".$params['category_id']."' and sub_category_id = '".$params['sub_category_id']."'";
            $query = "SELECT (total_available - booked) as availability FROM `inventory`  WHERE date='$date' AND blocked=0 AND (total_available - booked) >= '".$params['rooms']."' AND capacity >= '".$params['adults']."' and hotel_id = '".$params['hotel_id']."' AND category_id = '".$params['category_id']."' and sub_category_id = '".$params['sub_category_id']."'";
        }else{
            // $query = "SELECT min(total_available - booked) as availability FROM `inventory`  WHERE date='$date' AND blocked=0 AND (total_available - booked) >= '".$params['rooms']."' AND capacity >= '".$params['adults']."' and hotel_id = '".$params['hotel_id']."' AND category_id = '".$params['category_id']."'";
             $query = "SELECT (total_available - booked) as availability FROM `inventory`  WHERE date='$date' AND blocked=0 AND (total_available - booked) >= '".$params['rooms']."' AND capacity >= '".$params['adults']."' and hotel_id = '".$params['hotel_id']."' AND category_id = '".$params['category_id']."'";
            

        }
    
            
        $res = $this->db->query($query)->row_array();
        if(!empty($res) && $res['availability']!=0)
        {
            $j++;
        }
        $i++;
    }
        // 
    if($i!=$j){
            return "false";
        }else{
            return "true";
        }
    }
    function get_category_pic($param)
    {
        return $this->db->get_where('gallery',array('hotel_id' =>$param['hotel_id'],'category_id' => $param['category_id'], 'sub_category_id' => $param['sub_category_id']))->row_array();
    }

}