<?php

class signUpModel extends DB {
    protected function setUser($username, $email, $password) {
        $stmt = $this->conn()->prepare("INSERT INTO users (UserName, Email, Password) VALUES (?, ?, ?);");

        $hashingPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($username, $email, $hashingPassword))) {
            $stmt = null;
            echo "<script>alert('Statement failed.');</script>";
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }

        $stmt = null;
    }

    protected function checkUserAndEmail($username, $email) {
        $stmt = $this->conn()->prepare("SELECT UserID FROM users WHERE UserName = ? OR Email = ?;");

        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            echo "<script>alert('Statement failed.');</script>";
            echo "<script>location.href = 'http://localhost/Travigo2/home/login';</script>";
            exit();
        }

        $resultCheck;

        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}