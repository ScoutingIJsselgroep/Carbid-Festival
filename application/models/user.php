<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class User extends CI_Model {
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    private function hash($password){
        
        return $hashedpassword;
    }
    
    public function changePassword($old, $new1, $new2){
        // Get function variables
        $old = $this->security->xss_clean($old);
        $new1 = $this->security->xss_clean($new1);
        $new2 = $this->security->xss_clean($new2);
        $username = $this->session->userdata('logged_in')['username'];
        
        // Check if two passwords are equal to eachother
        if($new1 != $new2){
            return 'De twee nieuwe wachtwoorden komen niet overeen';
        }
        
        if(strlen($new1) < 8){
            return 'Het nieuwe wachtwoord moet ten minste acht tekens lang zijn.';
        }
        
        // Assert database
        $this->db->where('username', $username);
        $this->db->where('password', $old);
        
        
        
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then change the password
            $this->db->where('username',$username);
            $this->db->update('users',array('password' => $new1));
            return true;
        }else{
            // Passwords are not equal, return "false"
            return 'Wachtwoord is niet juist';
        }
    }
    /**
     * Checks if a row with given username and password exist.
     * @original-package flowtihunt
     * @return boolean password and username exist
     */
    public function login(){
             
        // grab user input and clean
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
            
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'id' => $row->id,
                'name' => $row->name,
                'username' => $row->username,
                'validated' => true
                );
            $this->session->set_userdata('logged_in', $data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}