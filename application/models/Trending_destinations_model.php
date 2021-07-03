<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Trending_destinations_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get trending destinations
     */
    function get_all_trending_destinations()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('trending_destinations')->result_array();
    }


    /*
     * Get destination by id
     */
    function get_trending_destinations($id)
    {
        return $this->db->get_where('trending_destinations',array('id'=>$id))->row_array();
    }
    
        
        
    /*
     * function to add new destination
     */
    function add_trending_destinations($params)
    {
        $this->db->insert('trending_destinations',$params);
    }
    
    /*
     * function to update Trending destinations
     */
    function update_trending_destinations($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('trending_destinations',$params);
    }
    
    /*
     * function to delete destinations
     */
    function delete_trending_destinations($id)
    {
        return $this->db->delete('trending_destinations',array('id'=>$id));
    }
}