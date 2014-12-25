<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    /**
     * Login
     * Loads dashboard if user is logged in. Else if $post('submit_login') isset, try to log in. If that doesn't work show a login page.
     * 
     * Maps to the following url
     *      http://example.com/index.php/login
     *          and
     *      http://example.com/index.php/login/index
     * @author Tristan de Boer
     * @original-package flowtihunt
     */
    function index() {
        
        if($this->session->userdata('logged_in')){
            $this->load->view('dashboard');
        }else
        
        if(isset($_POST['submit_login'])){
            // Do login action
            $this->load->model('User','', TRUE);
            $loggedin = $this->User->login();

            // Check if $loggedin is true. If $loggedin is not true, view login
            if($loggedin){
                $this->load->view('dashboard');
            }else{
                $data['message'] = "Je login was onjuist...";
                $this->load->view('view_login', $data);
            }
            
        }else{
            $this->load->model('User','', TRUE);
            $this->load->view('view_login');
        }
    }
    
    function changePassword(){
        
    }
 

}