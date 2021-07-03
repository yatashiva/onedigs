<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Margin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get amenity by id
     */
    function get_margin($id)
    {
        // return $this->db->get_where('payment_margins',array('id'=>$id))->row_array();
        $this->db->select('hotels.*,payment_margins.*');
    $this->db->from('payment_margins');
    $this->db->join('hotels', 'payment_margins.hotel_id = hotels.id'); 
    $query = $this->db->get();
    return $query->row_array();
    }
    function get_margin_by_hotel($id)
    {
        return $this->db->get_where('payment_margins', array('hotel_id' => $id))->row_array();
    }
        
    /*
     * Get all amenities
     */
    function get_all_margins()
    {
        // $this->db->order_by('id', 'desc');
        // return $this->db->get('payment_margins')->result_array();
        $this->db->select('hotels.*,payment_margins.*');
    $this->db->from('payment_margins');
    $this->db->join('hotels', 'payment_margins.hotel_id = hotels.id'); 
    $query = $this->db->get();
    return $query->result_array();
    }
    function get_all_margins_by_id($id)
    {
         $this->db->select('hotels.*,payment_margins.*');
    $this->db->from('payment_margins');
    $this->db->join('hotels', 'payment_margins.hotel_id = hotels.id');
    $this->db->where('hotels.vendor_name', '$id');

    $query = $this->db->get();
    return $query->result_array();
    }
        
    /*
     * function to add new amenity
     */
    function add_margin($params)
    {
        $this->db->insert('payment_margins',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update amenity
     */
    function update_margin($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('payment_margins',$params);
    }
    
    /*
     * function to delete amenity
     */
    function delete_margin($id)
    {
        return $this->db->delete('payment_margins',array('id'=>$id));
    }
}