<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends CI_Controller {
	public $data;
	
	public function __construct(){
		parent::__construct();
                
                $this->data['module'] = 'pim';
	}
	
	public function index(){
            
            $this->data['form'] = array(
                'title'=>'Employee Personal Information',
                'template'=>'personal'
            );
            $this->save();
            
            $this->load->view('header',$this->data);
            $this->load->view('aside',$this->data);
            $this->load->view('pim/view',$this->data);
            $this->load->view('footer',$this->data);
	}
        
        private function _validate(){
            
        }

        public function save(){
            $data = array();
            
            $inputs = (is_array($this->input->post()))? $this->input->post(): array();
            foreach ($inputs as $field => $value ){
                $data[$field] = $this->input->post($field);
            }
            //$this->pim_model->save_personal($data);
        }
}