<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    public $data;

    public function __construct() {
        parent::__construct();
        
        $this->user->Auth('admin');

        $this->data['module'] = 'pim';
        $this->data['module_name'] = 'Personal Information Module';
    }

    public function index(){
        $this->data['page_title'] = 'Employees';
        
        $this->load->view('header',$this->data);
        $this->load->view('aside',$this->data);
        $this->load->view('pim/admin',$this->data);
        $this->load->view('footer',$this->data);
    }
}