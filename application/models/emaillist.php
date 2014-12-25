<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
  
class EmailList extends CI_Model {
 
    function __construct() {
        parent::__construct();
        
    }
    
    function addEmail($data){
         $this->db->insert('emaillist',array('email' => $data['email'], 'naam' => $data['naam']));
         return true;
    }
}