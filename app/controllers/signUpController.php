<?php

class signUpController extends signUpModel {
    private $username;
    private $password;
    private $passwordRepeat;
    private $email;

    public function __construct($un, $pass, $passR, $email) {
        $this->username = $un;
        $this->password = $pass;
        $this->passwordRepeat = $passR;
        $this->email = $email;
    }

    public function signUpUser() {

        if ($this->emptyInput() == false) {
            echo "<script>alert('Please fill in all the inputs.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }
        if ($this->invalidUsername() == false) {
            echo "<script>alert('The name you entered is invalid. Please use only characters from \'a\' to \'z\' and/or \'0\' to \'9\'.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }
        if ($this->invalidEmail() == false) {
            echo "<script>alert('The E-mail is invalid. Please enter another one.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }
        if ($this->passwordMatchCheck() == false) {
            echo "<script>alert('You didn't repeat your password correctly. Please try again.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }
        if ($this->UserAndEmailTakenCheck() == false) {
            echo "<script>alert('The name and/or E-mail is already taken.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }
        
        $this->setUser($this->username, $this->email, $this->password);
    }

    private function emptyInput() {
        $result;
        if (empty($this->username) || empty($this->password) || empty($this->passwordRepeat) || empty($this->email)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function passwordMatchCheck() {
        $result;
        if ($this->password !== $this->passwordRepeat) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function UserAndEmailTakenCheck() {
        $result;
        if (!$this->checkUserAndEmail($this->username, $this->email)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
}