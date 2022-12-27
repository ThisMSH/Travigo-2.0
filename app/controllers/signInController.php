<?php

class signInController extends signInModel {
    private $email;
    private $password;

    public function __construct($email, $pass) {
        $this->email = $email;
        $this->password = $pass;
    }

    
    public function signInUser() {
        if ($this->emptyInput() == false) {
            echo "<script>alert('Please fill in all the inputs.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }
        $this->getUser($this->email, $this->password);
    }

    private function emptyInput() {
        $result;
        if (empty($this->email) || empty($this->password)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
}