<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $image = $_FILES['tourimage'];
    $id = $view_data['ID'];

    $addData = array("Destination" => $name, "Price" => $price, "Description" => $desc, "Image" => $image, "TourID" => $id);

    $sendData = new toursController();

    $sendData->updateSendData($addData);
}
