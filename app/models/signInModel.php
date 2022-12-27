<?php

class signInModel extends DB {

    protected function getUser($email, $password) {
        $stmt = $this->conn()->prepare("SELECT Password FROM users WHERE UserName = ? OR Email = ?;");

        if (!$stmt->execute(array($email, $email))) {
            $stmt = null;
            echo "<script>alert('Statement failed.');</script>";
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            echo "<script>alert('User not found.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }

        $hashedPassword = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkingPassword = password_verify($password, $hashedPassword[0]["Password"]);

        if ($checkingPassword == FALSE) {
            $stmt = null;
            echo "<script>alert('The password is wrong.');</script>"; 
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }elseif ($checkingPassword == TRUE) {
            $stmt = $this->conn()->prepare("SELECT * FROM users WHERE UserName = ? OR Email = ?;");

            if (!$stmt->execute(array($email, $email))) {
                $stmt = null;
                echo "<script>alert('Statement failed.');</script>";
                echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                echo "<script>alert('User not found.');</script>"; 
                echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['UserID'] = $user[0]["UserID"];
            $_SESSION['UserName'] = $user[0]["UserName"];
            
        }

        $stmt = null;
    }
}