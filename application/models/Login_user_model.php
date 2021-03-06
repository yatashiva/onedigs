<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Login_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get login_user by id
     */
    function get_login_user($id)
    {
        return $this->db->get_where('login_users',array('id'=>$id))->row_array();
    }
     function checkUser($mobile)
    {

        return $this->db->get_where('login_users',array('phone_no'=>$mobile))->row_array();
    }
    function checkUser_email($email)
    {
        return $this->db->get_where('login_users',array('email'=>$email))->row_array();
    }
function checkusertokenexist($accesstoken)
{
    return $this->db->get_where('login_users',array('access_token' =>$accesstoken))->row_array();
}
        
        
    /*
     * Get all login_users
     */
    function get_all_login_users()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('login_users')->result_array();
    }
        
    /*
     * function to add new login_user
     */
    function add_login_user($params)
    {
        $this->db->insert('login_users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update login_user
     */
    function update_login_user($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('login_users',$params);
    }
    
    /*
     * function to delete login_user
     */
    function delete_login_user($id)
    {
        return $this->db->delete('login_users',array('id'=>$id));
    }


    function login($params){

        $this->db->where($params);
        return $this->db->get('login_users')->row_array();

    }
    function mybookings($id)
    {
        $sql=$this->db->query("SELECT r.id AS booking_id, r.guest_email as guest_email, r.guest_numbers as guest_numbers, r.reservation_id as reservation_id, r.created_at AS date, r.booking_status as status,h.hotel_name as name ,r.check_in as check_in ,r.check_out as check_out, r.no_of_persons as persons, r.total_price as price, r.payment_type, r.guest_name as uname FROM reservations r, hotels h WHERE h.id=r.hotel_id AND user_id='$id'" );
        return $sql->result_array();
    }
    function getbooking($id)
    {
        $sql=$this->db->query("SELECT r.id AS booking_id, r.hotel_id as hotel_id, r.guest_numbers as guest_numbers, r.guest_email as guest_email, r.reservation_id as reservation_id, r.created_at AS date, r.booking_status as status,h.hotel_name as name ,r.check_in as check_in ,r.check_out as check_out, r.no_of_persons as persons,r.guest_name,r.total_price as price  FROM reservations r, hotels h WHERE h.id=r.hotel_id AND r.id='$id'" );
        return $sql->row_array();
    }
    function  cancel($id,$params)
    {
        $this->db->where('id',$id);

        return $this->db->update('reservations', $params);
    }
      function changepassword($id,$password)
    {
        // $this->db->where('id',$id);
        // return $this->db->update('login_users',$params);
        $sql=$this->db->query("UPDATE `login_users` SET `password`= '$password' WHERE id='$id' " );
        // return $sql->result_array();
    }
    function getPassword($email)
    {
       
        return $this->db->get_where('login_users',array('email'=>$email))->row_array();
    }
    function resetPassword($email,$params)
    {
        $this->db->where('email',$email);
        return $this->db->update('login_users',$params);
    }
    
}
