<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Professional_development extends CI_Controller 
{
	public $data;
	
	public function __construct(){
		parent::__construct();
                
                $this->load->library('form_validation');
                $this->data['module'] = 'pim';
	}
	
	public function index(){
            
            $this->data['form'] = array(
                'title'=>'Employee Professional Development Information',
                'template'=>'professional_development'
            );
            
            $this->load->view('header',$this->data);
            $this->load->view('aside',$this->data);
            $this->load->view('pim/view',$this->data);
            $this->load->view('footer',$this->data);
	}
        
        private function _validate(){
            
        }

        public function save(){
            
        }
}