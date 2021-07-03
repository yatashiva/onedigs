<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_rating_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user_rating by id
     */
    function get_user_rating($id)
    {
        return $this->db->get_where('user_ratings',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all user_ratings
     */
    function get_all_user_ratings()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('user_ratings')->result_array();
    }
        
    /*
     * function to add new user_rating
     */
    function add_user_rating($params)
    {
        $this->db->insert('user_ratings',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user_rating
     */
    function update_user_rating($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('user_ratings',$params);
    }
    
    /*
     * function to delete user_rating
     */
    function delete_user_rating($id)
    {
        return $this->db->delete('user_ratings',array('id'=>$id));
    }
}
