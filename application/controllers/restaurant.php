<?php defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Restaurant extends CI_Controller {

    public function index()
    {
        $data = array();
        $data['title'] = 'Bufalloburgers';
        $data['special_menu'] = $this->restaurant_model->select_special_menu();
        $data['home'] = $this->load->view('frontend/home', $data, true);       
        $this->load->view('frontend/master', $data);
    }
    
    public function login()
    {
        $data = array();
        $data['title'] = 'Login';
        $data['home'] = $this->load->view('frontend/customer_login', $data, true);
        $this->load->view('frontend/master', $data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('restaurant');
    }
    
    public function customer_login_check()
    { 
        $data = array();
        $data['customer_email'] = $this->input->post('customer_email', true);
        $data['customer_password'] = $this->input->post('customer_password', true);
        $result = $this->restaurant_model->user_login_check($data);
        $sdata = array();
        if ($result != NULL)
        {
            $sdata['customer_id'] = $result->customer_id;
            $sdata['customer_name'] = $result->customer_name;
            $this->session->set_userdata($sdata);
            redirect('customer');
        } 
        if ($result == NULL)
        {
            $sdata['exception'] = 'Your Email addresses or password do not match';
            $this->session->set_userdata($sdata);
            redirect('login');
        }
    }
    
    public function register()
    {
        $data = array();
        $data['title'] = 'Register';
        $data['home'] = $this->load->view('frontend/register', $data, true);
        $this->load->view('frontend/master', $data);
    }
    
    public function save_customer()
    {
        $this->restaurant_model->save_customer_info();
        $sdata = array();
        $sdata['save_customer'] = 'Customer Saved';
        $this->session->set_userdata($sdata);
        redirect('restaurant/register');
    }
}