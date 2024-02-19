<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fintech extends CI_Controller
{

    public function login ()
    {
        $this->load->helper('url');
        $Username = $this->input->post("Username");
        $Password = $this->input->post("Password");

        $this->load->view("LoginView");
        $this->load->model("Login_Model");

        $usernamesDB = $this->Login_Model->getUsernames();
        $passwordsDB = $this->Login_Model->getPasswords();

        $usernames = [];
        $Passwords = [];

        foreach ($usernamesDB as $username){
                $usernames[] = $username->username;
        }


        foreach ($passwordsDB as $password){
                $passwords[] = $password->password;
        }

        $hashedPassword = sha1($Password,FALSE);

        for($i =0; $i < count($usernames);$i++){
               if($Username == $usernames[$i] && $hashedPassword == $passwords[$i]){
                        redirect('login');
               }
               }
                $this->load->view("LoginErrorView");
        }
        public function Home_Page (){

