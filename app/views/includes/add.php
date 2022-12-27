<?php
session_start();
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $image = $_FILES['tourimage'];
    $adminID = $_SESSION['UserID'];

    $addData = array("Destination" => $name, "Price" => $price, "Description" => $desc, "Image" => $image, "Admin" => $adminID);

    $sendData = new toursController();

    $sendData->insertData($addData);

}