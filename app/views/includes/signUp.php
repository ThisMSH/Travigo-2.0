<?php

if(isset($_POST['submit'])) {
    // Assigning the data to the variables
    $un = $_POST['username'];
    $pwd = $_POST['password'];
    $pwdR = $_POST['passwordRepeat'];
    $email = $_POST['email'];

    // Instantiating Sign Up Controller class
    $signUp = new signUpController($un, $pwd, $pwdR, $email);

    // Running errors handler and sign up user
    $signUp->signUpUser();

    // Redirecting to the home page
    
    echo "<script>alert('You have successfully created your account.');</script>";
    echo "<script>location.href = 'http://localhost/Travigo2/home/index';</script>";
}

