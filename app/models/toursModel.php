<?php

class toursModel extends DB {

    protected function getAllTours() {
        $stmt = $this->conn()->prepare("SELECT * FROM tours;");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    protected function insertTour($data) {
        if($data['Image']['size'] > 0) {
            $imageName = $data['Image']['name'];
            $imagePath = $data['Image']['tmp_name'];
            $uploadPath = "C:/xampp/htdocs/Travigo2/public/uploads/".$imageName;
            move_uploaded_file($imagePath, $uploadPath);
        }else {
            $imageName = "default.jpg";
        }

        $stmt = $this->conn()->prepare("INSERT INTO tours (Destination, Price, Description, Image, Admin) VALUES (?, ?, ?, ?, ?);");

        if(!$stmt->execute(array($data["Destination"], $data["Price"], $data["Description"], $imageName, $data["Admin"]))) {
            $stmt = null;
            echo "<script>alert('Statement failed.');</script>";
            echo "<script>location.href = 'http://localhost/Travigo2/home/dashboard';</script>";
            exit();
        }

        $stmt = null;
        echo "<script>alert('A new tour destination has been added successfully.');</script>";
        echo "<script>location.href = 'http://localhost/Travigo2/home/dashboard';</script>";
    }

    protected function getData($id) {
        $getData = $this->conn()->prepare("SELECT * FROM tours WHERE TourID = ?;");
        if($getData->execute(array($id))) {
            return $getData->fetchAll();
        }else {
            echo "<script>alert('Data not found about this tour.');</script>";
        }
        
        $getData = null;
    }

    protected function updateData($data) {
        if($data['Image']['size'] > 0) {
            $imageName = $data['Image']['name'];
            $imagePath = $data['Image']['tmp_name'];
            $uploadPath = "C:/xampp/htdocs/Travigo2/public/uploads/".$imageName;
            move_uploaded_file($imagePath, $uploadPath);
            echo "it's not empty:".$imageName;
        }else {
            $imageName = "default.jpg";
            echo "it's empty";
        }

        $stmt = $this->conn()->prepare("UPDATE tours SET Destination = ?, Price = ?, Description = ?, Image = ? WHERE TourID = ?;");

        if(!$stmt->execute(array($data["Destination"], $data["Price"], $data["Description"], $imageName, $data["TourID"]))) {
            $stmt = null;
            echo "<script>alert('Statement failed.');</script>";
            echo "<script>location.href = 'http://localhost/Travigo2/home/dashboard';</script>";
            exit();
        }

        $stmt = null;
        echo "<script>alert('A new tour destination has been updated successfully.');</script>";
        echo "<script>location.href = 'http://localhost/Travigo2/home/dashboard';</script>";
    }

    protected function deleteTour($id) {
        $deleteData = $this->conn()->prepare("DELETE FROM tours WHERE TourID = ?;");
        if(!$deleteData->execute(array($id))) {
            $deleteData = null;
            echo "<script>alert('Statement failed.');</script>";
            echo "<script>location.href = 'http://localhost/Travigo2/home/dashboard';</script>";
            exit();
        }

        $deleteData = null;
        echo "<script>alert('The tour destination has been deleted successfully.');</script>";
        echo "<script>location.href = 'http://localhost/Travigo2/home/dashboard';</script>";
    }
}
