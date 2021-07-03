<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Payment_detail extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_detail_model');
    } 

    /*
     * Listing of payment_details
     */
    function index()
    {
        $data['payment_details'] = $this->Payment_detail_model->get_all_payment_details();
        
        $data['_view'] = 'payment_detail/index';
        $this->load->view('admin/index',$data);
    }

    /*
     * Adding a new payment_detail
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'reservation_id' => $this->input->post('reservation_id'),
				'reference_id' => $this->input->post('reference_id'),
				'payment_mode' => $this->input->post('payment_mode'),
				'amount_paid' => $this->input->post('amount_paid'),
				'paid_date' => $this->input->post('paid_date'),
				'created_at' => $this->input->post('created_at'),
				'updated_at' => $this->input->post('updated_at'),
            );
            
            $payment_detail_id = $this->Payment_detail_model->add_payment_detail($params);
            redirect('payment_detail/index');
        }
        else
        {            
            $data['_view'] = 'payment_detail/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a payment_detail
     */
    function edit($id)
    {   
        // check if the payment_detail exists before trying to edit it
        $data['payment_detail'] = $this->Payment_detail_model->get_payment_detail($id);
        
        if(isset($data['payment_detail']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'reservation_id' => $this->input->post('reservation_id'),
					'reference_id' => $this->input->post('reference_id'),
					'payment_mode' => $this->input->post('payment_mode'),
					'amount_paid' => $this->input->post('amount_paid'),
					'paid_date' => $this->input->post('paid_date'),
					'created_at' => $this->input->post('created_at'),
					'updated_at' => $this->input->post('updated_at'),
                );

                $this->Payment_detail_model->update_payment_detail($id,$params);            
                redirect('payment_detail/index');
            }
            else
            {
                $data['_view'] = 'payment_detail/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The payment_detail you are trying to edit does not exist.');
    } 

    /*
     * Deleting payment_detail
     */
    function remove($id)
    {
        $payment_detail = $this->Payment_detail_model->get_payment_detail($id);

        // check if the payment_detail exists before trying to delete it
        if(isset($payment_detail['id']))
        {
            $this->Payment_detail_model->delete_payment_detail($id);
            redirect('payment_detail/index');
        }
        else
            show_error('The payment_detail you are trying to delete does not exist.');
    }
    
}