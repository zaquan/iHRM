<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User {
    public $id;
    public $last_login;
    public $role;

    public function __construct() {
        $ci =& get_instance();
        
        $user = $ci->session->userdata('user');
        
        $this->id = $user->user_id;
        $this->last_login = $user->last_login;
        $this->role = $user->role;
    }

    public function Auth($role = NULL){
        if($role){
            if($role != $this->role || !$this->id ){
                redirect ('login');
            }
        }
        
    }
    
    public function login($user){
        $ci =& get_instance();
        
        //Update login log
        $ci->login_model->update_log($user->user_id);
        //set user session
        $ci->session->set_userdata('user',$user);
        
        redirect('dashboard');
    }
    
    public function logout(){
        $ci =& get_instance();
        
        $ci->session->unset_userdata('user');
        redirect('login');
    }
}

/* End of file User.php */