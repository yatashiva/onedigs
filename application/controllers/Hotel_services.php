<?php require(APPPATH.'libraries/REST_Controller.php');

class Hotel_services extends REST_Controller {

	function __construct(){

        parent::__construct();

		$this->load->model('Hotel_services_model');
        $this->load->model('Login_user_model');
        $this->load->model('User_detail_model');
        $this->load->model('Amenity_model');
        $this->load->model('Hotel_model');
        $this->load->model('Margin_model');
        $this->load->model('Inventory_model');
        $this->load->model('Room_category_model');
		// $this->load->helper('activationcode_helper');
		date_default_timezone_set("Asia/kolkata");

	}

    function status_respond($status){

        // write_audit_log($status);

        echo json_encode($status);exit;

    }

    
    	
    	
    function generateapikey($length = 25) {

	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

	    $charactersLength = strlen($characters);

	    $randomString = '';

	    for ($i = 0; $i < $length; $i++) {

	        $randomString .= $characters[rand(0, $charactersLength - 1)];

	    }

	    return $randomString;

	}

	function validPass($password) {
	  

	    if (!preg_match_all('$\S*(?=\S{6,})\S*$', $password)) {
	        return 'ERROR_138';
	    } else {
	 	    return 1;
	    }
	}

	function validEmail($email) {
    $isValid = true;
    $atIndex = strrpos($email, "@");
    if (is_bool($atIndex) && !$atIndex) {
        $isValid = false;
    } else {
        $domain = substr($email, $atIndex + 1);
        $local = substr($email, 0, $atIndex);
        $localLen = strlen($local);
        $domainLen = strlen($domain);
        if ($localLen < 1 || $localLen > 64) {
            // local part length exceeded
            $isValid = false;
        } else if ($domainLen < 1 || $domainLen > 255) {
            // domain part length exceeded
            $isValid = false;
        } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
            // local part starts or ends with '.'
            $isValid = false;
        } else if (preg_match('/\\.\\./', $local)) {
            // local part has two consecutive dots
            $isValid = false;
        } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
            // character not valid in domain part
            $isValid = false;
        } else if (preg_match('/\\.\\./', $domain)) {
            // domain part has two consecutive dots
            $isValid = false;
        } else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
            // character not valid in local part unless
            // local part is quoted
            if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                $isValid = false;
            }
        }
        if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
            // domain not found in DNS
            $isValid = false;
        }
    }
    return $isValid;
}
//Search hotel
function search_hotels_get()
{
	$search_info=$this->input->get();
	// $search_info['AuthKey']=$this->generateapikey(20);
	$location=$search_info['location'];
	$rooms=$search_info['rooms'];
	$adults=$search_info['adults'];
	$checkin=$search_info['checkin'];
	$checkout=$search_info['checkout'];
	 $apiKey = $search_info['apiKey'];
	if($location=='')
	{
		$result = array("status" => 0, "error" => array('ERROR_111',ERROR_111));
			return $this->status_respond($result);
	}
	if($rooms=='')
	{
		$result = array("status" => 0, "error" => array('ERROR_112',ERROR_112));
			return $this->status_respond($result);
	}
	if($adults=='')
	{
		$result = array("status" => 0, "error" => array('ERROR_113',ERROR_113));
			return $this->status_respond($result);
	}
	if($checkin=='')
	{
		$result = array("status" => 0, "error" => array('ERROR_114',ERROR_114));
			return $this->status_respond($result);
	}
	if($checkout=='')
	{
		$result = array("status" => 0, "error" => array('ERROR_115',ERROR_115));
			return $this->status_respond($result);
	}
	if($apiKey == '') {
            $result = array("status" => 0, "error" => array('ERROR_104',ERROR_104));
            return $this->status_respond($result);
        }
         $apiKey = "sciens";

            if($apiKey == $search_info['apiKey']) {
            	$hotels = $this->Hotel_services_model->get_hotels_location($search_info);
            	$amenities=$this->Hotel_services_model->get_all_amenities();
            	  $result = array("status" => 1, "data" => $hotels,"amenities" => $amenities);
            	} 
            	else {
                $result = array("status" => 0, "error" => array('ERROR_101',ERROR_101));
            }
            return $this->status_respond($result);


}
function signup_post()
{
    $user_info=$this->input->post();
    $name=$user_info['username'];
    
    $mobile=$user_info['phone_no'];
    $apiKey=$user_info['apiKey'];
    if($name=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_116',ERROR_116));
            return $this->status_respond($result);
    }
    if($mobile=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_117',ERROR_117));
            return $this->status_respond($result);
    }
    if(isset($user_info['email']) && $user_info['email']!='')
    {
        $email=$user_info['email'];
        $user_email=$this->Login_user_model->checkUser_email($email);
        if($user_email !='')
        {
            $result = array("status" => 0, "error" => array('ERROR_118',ERROR_118));
            return $this->status_respond($result);
        }
    }
    else
    {
        $email=NULL;
    }
    if($apiKey == '') {
            $result = array("status" => 0, "error" => array('ERROR_104',ERROR_104));
            return $this->status_respond($result);
        }
         $apiKey = "sciens";
         $add_info=array('username'=>$name,
            'phone_no'=>$mobile,
            'email'=>$email,
            'user_type'=>3,
            'status'=>1);
         $user=$this->Login_user_model->checkUser($mobile);
         if($user == '')
         {


            if($apiKey == $user_info['apiKey']) 
            {

 $id = $this->Login_user_model->add_login_user($add_info);
  $userparams= array(
                'login_id' => $id,
                'name' => $name,
                'phone_no' => $mobile,
                'email'=>$email
                
                );
                
                   
                 
                $user_detail_id = $this->User_detail_model->add_user_detail($userparams);
                $user_details = $this->User_detail_model->get_user_detail($user_detail_id);

                if($user_detail_id!=null){
                    // $otp = rand(100001, 999999);
                    $otp = 123456;
                  $loginp= array('otp' => $otp);
                 $up= $this->Login_user_model->update_login_user($id,$loginp);
                   $result = array("status" => 1, "data" => $user_details);
                   return $this->status_respond($result);

                
            }
        }
        else
        {
             $result = array("status" => 0, "error" => array('ERROR_101',ERROR_101));
              return $this->status_respond($result);

        }
    }
        else
        {
            $result = array("status" => 0, "error" => array('ERROR_102',ERROR_102));
            return $this->status_respond($result);

        }

}
function login_post()
{
    $login_info=$this->input->post();
    $username=$login_info['username'];
    $otp=$login_info['otp'];
  
    $apiKey=$login_info['apiKey'];
    if($username=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_123',ERROR_123));
            return $this->status_respond($result); 
    }
    if($otp=='')
    {
         $result = array("status" => 0, "error" => array('ERROR_124',ERROR_124));
            return $this->status_respond($result); 
    }
    if($apiKey=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_104',ERROR_104));
            return $this->status_respond($result); 

    }
    $apiKey='sciens';
    if($apiKey==$login_info['apiKey'])
    {
    if($this->validEmail($login_info['username'])==TRUE)
    {
        $email=$login_info['username'];
        $user_email=$this->Login_user_model->checkUser_email($email);
        if($user_email=='')
        {
            $result = array("status" => 0, "error" => array('ERROR_121',ERROR_121));
            return $this->status_respond($result); 
        }
        else
        {
            $params=array(
            'email'=>$login_info['username'],
            'otp'=>$login_info['otp']);
            $login=$this->Login_user_model->login($params);
            if($login=='')
            {
                 $result = array("status" => 0, "error" => array('ERROR_100',ERROR_100));
            return $this->status_respond($result); 

            }
            else
            {
                $access_token=$this->generateapikey();
                $update_info=array(
                    'access_token'=>$access_token
                    );
                $this->Login_user_model->update_login_user($login['id'],$update_info);
                $login=$this->Login_user_model->login($params);
                $result = array("status" => 1, "data" => $login);
                return $this->status_respond($result); 

            }


        }
        
    }
    else
    {
         $phone_no=$login_info['username'];
        $user_email=$this->Login_user_model->checkUser($phone_no);
        if($user_email=='')
        {
            $result = array("status" => 0, "error" => array('ERROR_122',ERROR_122));
            return $this->status_respond($result); 
        }
        else
        {
            // if (filter_var($user_email, FILTER_VALIDATE_INT) == FALSE) {
            //      $result = array("status" => 0, "error" => array('ERROT_180',ERROT_180));
            //     return $this->status_respond($result);
            // } elseif($length_mob != 10) {
            //      $result = array("status" => 0, "error" => array('ERROT_181',ERROT_181));
            //     return $this->status_respond($result);
            // } 
            $params=array(
            'phone_no'=>$login_info['username'],
            'otp'=>$login_info['otp']);
            $login=$this->Login_user_model->login($params);
            if($login=='')
            {
                 $result = array("status" => 0, "error" => array('ERROR_100',ERROR_100));
            return $this->status_respond($result); 

            }
            else
            {
                $access_token=$this->generateapikey();
                $update_info=array(
                    'access_token'=>$access_token
                    );
                $this->Login_user_model->update_login_user($login['id'],$update_info);
                $login=$this->Login_user_model->login($params);
                $result = array("status" => 1, "data" => $login);
                return $this->status_respond($result); 

            }


        }

    }
}
else
{
    $result = array("status" => 0, "error" => array('ERROR_101',ERROR_101));
            return $this->status_respond($result); 
}


}
function profile_get()
{
    $userdetails = $_GET;

        
        $id = $userdetails['id'];
        $accesstoken = $userdetails['access_token'];
        $apiKey=$userdetails['apiKey'];
        if($id=='')
        {
            $result = array("status" => 0, "error" => array('ERROR_127',ERROR_127));
            return $this->status_respond($result);  
        }
        if($accesstoken=='')
        {
             $result = array("status" => 0, "error" => array('ERROR_103',ERROR_103));
            return $this->status_respond($result); 
        }
        if($apiKey=='')
        {
             $result = array("status" => 0, "error" => array('ERROR_104',ERROR_104));
            return $this->status_respond($result); 
        }
        $apiKey="sciens";
        if($apiKey==$userdetails['apiKey'])
        {
            $access=$this->Login_user_model->checkusertokenexist($accesstoken);
            if($access=='')
            {
                $result = array("status" => 0, "error" => array('ERROR_105',ERROR_105));
            return $this->status_respond($result); 
            }
            else
            {
                $data=$this->Login_user_model->get_login_user($id);
                if($data=='')
                {
                      $result = array("status" => 0, "error" => array('ERROR_110',ERROR_110));
            return $this->status_respond($result); 
                }
                else
                {
                    $result = array("status" => 1, "data" => $data);
            return $this->status_respond($result); 
                }
            }

        }
        else
        {
            $result = array("status" => 0, "error" => array('ERROR_101',ERROR_101));
            return $this->status_respond($result); 
        }

}
function amenities_get()
{
    $amenities=$this->Hotel_services_model->get_all_amenities();
                  $result = array("status" => 1,"amenities" => $amenities);
                  return $this->status_respond($result); 
        
}
function  room_availablity_get()
{
    $hotel_info=$this->input->get();
    $hotel_id=$hotel_info['hotel_id'];
    $checkin=$hotel_info['checkin'];
    $checkout=$hotel_info['checkout'];
    $rooms=$hotel_info['rooms'];
    $adults=$hotel_info['adults'];
    $apiKey=$hotel_info['apiKey'];
    if($hotel_id=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_106',ERROR_106));
            return $this->status_respond($result);
    }
    if($rooms=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_112',ERROR_112));
            return $this->status_respond($result);
    }
    if($adults=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_113',ERROR_113));
            return $this->status_respond($result);
    }
    if($checkin=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_114',ERROR_114));
            return $this->status_respond($result);
    }
    if($checkout=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_115',ERROR_115));
            return $this->status_respond($result);
    }
    if($apiKey == '') {
            $result = array("status" => 0, "error" => array('ERROR_104',ERROR_104));
            return $this->status_respond($result);
        }
        $apiKey="sciens";
        if($apiKey==$hotel_info['apiKey'])
        {
            $hotel=$this->Hotel_model->get_hotel($hotel_id);
            if($hotel=='')
            {
                $result = array("status" => 0, "error" => array('ERROR_107',ERROR_107));
            return $this->status_respond($result);
            }
            else
            {
                $params=array('id'=>$hotel_id);
                 $subcategories = $this->Hotel_model->getSubCategories($params);
                 $category=array();
                   foreach ($subcategories as $key) {
                      $params =  array('hotel_id' =>$key['hotel_id'],'category_id'=>$key['category_id'],'sub_category_id'=>$key['sub_category_id'],'checkin'=>$checkin ,'checkout'=>$checkout,'rooms'=>$rooms,'adults'=>$adults);

                       $res = $this->Hotel_services_model->get_room_availability_sample($params);
                       $images=$this->Hotel_services_model->get_category_pic($params);
                       $key['image']=$images['gallery'];
               // print_r($res);
               if($res == 'true'){
                
                $key['soldout']=0;
               }
               else
               {
                $key['soldout']=1;
               }
               $category[]=$key;

                   }
                     $gallery=$this->Hotel_model->get_common_pics($hotel_id);
                   // $cat=$this->_group_by($category,'category_name');
                  $result = array("status" => 1, "data" => $category,"images"=>$gallery);

            return $this->status_respond($result);

            }

        }
        else
        {
            $result = array("status" => 0, "error" => array('ERROR_101',ERROR_101));
            return $this->status_respond($result); 
        }

}
 function _group_by($array, $key) {
        $return = array();
        foreach($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }

    function booking_post()
    {
        $booking_info=$this->input->post();
        $hotel_id=$booking_info['hotel_id'];
        $category_id=$booking_info['category_id'];
        $sub_category_id=$booking_info['sub_category_id'];
        $rooms=$booking_info['rooms'];
        $adults=$booking_info['adults'];
        $checkin=$booking_info['checkin'];
        $checkout=$booking_info['checkout'];
        $apiKey=$booking_info['apiKey'];
        // $no_of_days=$booking_info['no_of_days'];
        $accesstoken=$booking_info['accesstoken'];

        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < 6; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                if($hotel_id=='')
                {
                     $result = array("status" => 0, "error" => array('ERROR_106',ERROR_106));
            return $this->status_respond($result);
                }
                if($category_id=='')
                {
                      $result = array("status" => 0, "error" => array('ERROR_164',ERROR_164));
            return $this->status_respond($result);
                }
                  if($sub_category_id=='')
                {
                      $result = array("status" => 0, "error" => array('ERROR_165',ERROR_165));
            return $this->status_respond($result);
                }
               if($rooms=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_112',ERROR_112));
            return $this->status_respond($result);
    }
    if($adults=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_113',ERROR_113));
            return $this->status_respond($result);
    }
    if($checkin=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_114',ERROR_114));
            return $this->status_respond($result);
    }
    if($checkout=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_115',ERROR_115));
            return $this->status_respond($result);
    }
    if($accesstoken=='')
        {
             $result = array("status" => 0, "error" => array('ERROR_103',ERROR_103));
            return $this->status_respond($result); 
        }
    if($apiKey == '') {
            $result = array("status" => 0, "error" => array('ERROR_104',ERROR_104));
            return $this->status_respond($result);
        }
        $apiKey="sciens";
        if($apiKey==$booking_info['apiKey'])
        {
            $access=$this->Login_user_model->checkusertokenexist($accesstoken);
            if($access=='')
            {
                $result = array("status" => 0, "error" => array('ERROR_105',ERROR_105));
            return $this->status_respond($result); 
            }
            else
            {
            $hotel=$this->Hotel_model->get_hotel($hotel_id);
            if($hotel=='')
            {
                $result = array("status" => 0, "error" => array('ERROR_107',ERROR_107));
            return $this->status_respond($result);
            }
            else
            {
                 $price = $this->Hotel_model->getSubcost($sub_category_id);
                   $no_of_days=(strtotime($checkout)-strtotime($checkin))/(24*60*60);
                 $capacity=2;
if($adults == (($capacity + 1 ) * $rooms))
{
    $amount=($price['price'] + $price['extra_bed_price']+ $price['double_price']) *$no_of_days *$rooms;
}
elseif($adults < (($capacity + 1) * $rooms) && $adults > ($capacity * $rooms) )
{
    $extra=($adults-($capacity * $rooms));
     $amount=(($price['price'] *$rooms )+ (($price['extra_bed_price']+ $price['double_price']) * $extra)) *$no_of_days ;


}
else
{


 $amount=($rooms * $price['price'])*$no_of_days;
}
     $get_tax=$this->Room_category_model->get_tax($hotel_id);
     $total_tax=0;
     
     // $tax=($get_tax['tax']*$amount)/100;
     foreach($get_tax as $tax)
 {
    if($tax['tax']=="Percentage")
    {
        $tax1=($amount*$tax['max'])/100;
     //    var_dump($tax1);
     // var_dump ($total_tax);
        $total_tax= (int)$total_tax+ (int)$tax1;
    }
    else
    {
        $total_tax=(int)$total_tax+ (int)$tax['max'];
    }

 }
 $booking_type="Personal";
 $margin=$this->Margin_model->get_margin_by_hotel($hotel_id);
// print_r($price);
// die;
$hotel_margin=($amount * $margin['percentage'] )/100;
 $online_payment="online";

     $total_amount=($amount+$total_tax);
      $params = array(
                'reservation_id' => $randomString,
                'hotel_id' => $hotel_id,
                'category_id' => $category_id,
                'sub_category_id'=>$sub_category_id,
                'no_of_rooms' => $rooms,
                'no_of_persons' => $adults,
                'check_in' => $checkin,
                'check_out' => $checkout,
                'price' => $amount,
                'tax' => $total_tax,
                'total_price' => $total_amount,
                'hotel_margin'=>$hotel_margin,
                'payment_type' => $online_payment,
                'user_id' => $access['id'],
                'guest_name' => $access['username'],  
                'guest_email'=>$access['email'],
                'guest_numbers'=>$access['phone_no'],              
                'booking_status' => "booked",
                'booking_type'=>$booking_type
               
            );
       $reservation_id = $this->Reservation_model->add_reservation($params);

$begin = new DateTime($checkin);
$end = new DateTime($checkout);

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);

foreach ($period as $dt) {
    $date=$dt->format("Y-m-d");
// print_r($dt->format("Y-m-d"));
                    $booked_rooms=$this->Inventory_model->get_inventory_hotel_category($hotel_id,$category_id,$sub_category_id,$date);
                    // print_r($booked_rooms);
                    $booked=$booked_rooms['booked']+ $rooms;
                    // echo $booked;
                    // $params1=array('booked'=>$booked);
                    $res=$this->Inventory_model->update_booked($hotel_id,$category_id,$sub_category_id,$booked,$date);
                    // print_r($res);
                }
                $data=$this->Hotel_services_model->get_reservation($reservation_id);
                 $result = array("status" => 1, "data" => $data);
            return $this->status_respond($result); 

        }
    }
}
        else
        {
             $result = array("status" => 0, "error" => array('ERROR_101',ERROR_101));
            return $this->status_respond($result); 
        }

    }
    function review_booking_post()
    {
        $booking_info=$this->input->post();
        $hotel_id=$booking_info['hotel_id'];
        $category_id=$booking_info['category_id'];
        $sub_category_id=$booking_info['sub_category_id'];
        $rooms=$booking_info['rooms'];
        $adults=$booking_info['adults'];
        $checkin=$booking_info['checkin'];
        $checkout=$booking_info['checkout'];
        $apiKey=$booking_info['apiKey'];
        // $no_of_days=$booking_info['no_of_days'];
        // $accesstoken=$booking_info['accesstoken'];

        // $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //         $charactersLength = strlen($characters);
        //         $randomString = '';
        //         for ($i = 0; $i < 6; $i++) {
        //             $randomString .= $characters[rand(0, $charactersLength - 1)];
        //         }
                if($hotel_id=='')
                {
                     $result = array("status" => 0, "error" => array('ERROR_106',ERROR_106));
            return $this->status_respond($result);
                }
                if($category_id=='')
                {
                      $result = array("status" => 0, "error" => array('ERROR_164',ERROR_164));
            return $this->status_respond($result);
                }
                  if($sub_category_id=='')
                {
                      $result = array("status" => 0, "error" => array('ERROR_165',ERROR_165));
            return $this->status_respond($result);
                }
               if($rooms=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_112',ERROR_112));
            return $this->status_respond($result);
    }
    if($adults=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_113',ERROR_113));
            return $this->status_respond($result);
    }
    if($checkin=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_114',ERROR_114));
            return $this->status_respond($result);
    }
    if($checkout=='')
    {
        $result = array("status" => 0, "error" => array('ERROR_115',ERROR_115));
            return $this->status_respond($result);
    }
    // if($accesstoken=='')
    //     {
    //          $result = array("status" => 0, "error" => array('ERROR_103',ERROR_103));
    //         return $this->status_respond($result); 
    //     }
    if($apiKey == '') {
            $result = array("status" => 0, "error" => array('ERROR_104',ERROR_104));
            return $this->status_respond($result);
        }
        $apiKey="sciens";
        if($apiKey==$booking_info['apiKey'])
        {
            // $access=$this->Login_user_model->checkusertokenexist($accesstoken);
            // if($access=='')
            // {
            //     $result = array("status" => 0, "error" => array('ERROR_105',ERROR_105));
            // return $this->status_respond($result); 
            // }
            // else
            // {
            $hotel=$this->Hotel_model->get_hotel($hotel_id);
            if($hotel=='')
            {
                $result = array("status" => 0, "error" => array('ERROR_107',ERROR_107));
            return $this->status_respond($result);
            }
            else
            {
                 $price = $this->Hotel_model->getSubcost($sub_category_id);
                   $no_of_days=(strtotime($checkout)-strtotime($checkin))/(24*60*60);
                 $capacity=2;
if($adults == (($capacity + 1 ) * $rooms))
{
    $amount=($price['price'] + $price['extra_bed_price']+ $price['double_price']) *$no_of_days *$rooms;
}
elseif($adults < (($capacity + 1) * $rooms) && $adults > ($capacity * $rooms) )
{
    $extra=($adults-($capacity * $rooms));
     $amount=(($price['price'] *$rooms )+ (($price['extra_bed_price']+ $price['double_price']) * $extra)) *$no_of_days ;


}
else
{


 $amount=($rooms * $price['price'])*$no_of_days;
}
     $get_tax=$this->Room_category_model->get_tax($hotel_id);
     $total_tax=0;
     
     // $tax=($get_tax['tax']*$amount)/100;
     foreach($get_tax as $tax)
 {
    if($tax['tax']=="Percentage")
    {
        $tax1=($amount*$tax['max'])/100;
     //    var_dump($tax1);
     // var_dump ($total_tax);
        $total_tax= (int)$total_tax+ (int)$tax1;
    }
    else
    {
        $total_tax=(int)$total_tax+ (int)$tax['max'];
    }

 }
 $booking_type="Personal";
 $margin=$this->Margin_model->get_margin_by_hotel($hotel_id);
// print_r($price);
// die;
$hotel_margin=($amount * $margin['percentage'] )/100;

     $total_amount=($amount+$total_tax);
       $room = $this->Room_category_model->get_room_category($category_id);
      $params = array(
                // 'reservation_id' => $randomString,
                'hotel_id' => $hotel_id,
                'category_id' => $category_id,
                'sub_category_id'=>$sub_category_id,
                'no_of_rooms' => $rooms,
                'no_of_persons' => $adults,
                'no_of_days' => $no_of_days,
                'check_in' => $checkin,
                'check_out' => $checkout,
                'price' => $amount,
                'tax' => $total_tax,
                'total_price' => $total_amount,
                // 'hotel_margin'=>$hotel_margin,
                // 'payment_type' => "online",
                // 'user_id' => $access['id'],
                // 'guest_name' => $access['username'],  
                // 'guest_email'=>$access['email'],
                // 'guest_numbers'=>$access['phone_no'],              
                // 'booking_status' => "booked",
                // 'booking_type'=>$booking_type
               
            );
//        $reservation_id = $this->Reservation_model->add_reservation($params);

// $begin = new DateTime($checkin);
// $end = new DateTime($checkout);

// $interval = DateInterval::createFromDateString('1 day');
// $period = new DatePeriod($begin, $interval, $end);

// foreach ($period as $dt) {
//     $date=$dt->format("Y-m-d");
// print_r($dt->format("Y-m-d"));
                    // $booked_rooms=$this->Inventory_model->get_inventory_hotel_category($hotel_id,$category_id,$sub_category_id,$date);
                    // print_r($booked_rooms);
                    // $booked=$booked_rooms['booked']+ $rooms;
                    // echo $booked;
                    // $params1=array('booked'=>$booked);
                    // $res=$this->Inventory_model->update_booked($hotel_id,$category_id,$sub_category_id,$booked,$date);
                    // print_r($res);
                // }
                // $data=$this->Hotel_services_model->get_reservation($reservation_id);
                 $result = array("status" => 1, "data" => $params,"hotel_details" =>$hotel,"room_details" => $price);
            return $this->status_respond($result); 

        }
    }
// }
        else
        {
             $result = array("status" => 0, "error" => array('ERROR_101',ERROR_101));
            return $this->status_respond($result); 
        }

    }

	
	

	}