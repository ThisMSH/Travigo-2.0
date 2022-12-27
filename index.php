<?php
    if (empty($_SERVER['QUERY_STRING'])) {
        header("location: http://localhost/Travigo2/home/index");
        include "autoload.php";
    }else {
        include "autoload.php";
    }
    

