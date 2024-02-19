<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model  extends CI_model
{
        public function getUsernames()
        {
        $this->load->database();
        $usernames = $this->db->query("SELECT username FROM Customers");
                return $usernames->result();
         }
         public function getPasswords()
         {
                $this->load->database();
                $passwords = $this->db->query("SELECT password FROM Customers");
                return $passwords->result();
         }
}
?>
