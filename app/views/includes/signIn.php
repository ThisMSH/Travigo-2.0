<?php

if(isset($_POST['submit'])) {
    // Assigning the data to the variables
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    // Instantiating Sign In Controller class
    $signIn = new signInController($email, $pwd);

    // Running errors handler and sign In user
    $signIn->signInUser();

    // Redirecting to the home page
    
    echo "<script>location.href = 'http://localhost/Travigo2/home/index';</script>";
}

