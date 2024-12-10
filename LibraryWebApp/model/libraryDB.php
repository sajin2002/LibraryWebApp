<?php

function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function authenticateUser($uname, $pass) {
    $conn = connectDB();

    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $stmt->close();
        $conn->close();
        return true;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
function changePassword($username, $oldPassword, $newPassword) {
    $conn = connectDB();

    
    $sql = "SELECT password FROM login WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        
        if ($storedPassword === $oldPassword) {
            
            $updateSql = "UPDATE login SET password = ? WHERE username = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("ss", $newPassword, $username);

            if ($updateStmt->execute()) {
                $updateStmt->close();
                $stmt->close();
                $conn->close();
                return true;
            } else {
                $stmt->close();
                $conn->close();
                return false;
            }
        } else {
            $stmt->close();
            $conn->close();
            return false; 
        }
    } else {
        $stmt->close();
        $conn->close();
        return false; 
    }
}
function forgotPassword($username, $securityKey, $newPassword) {
    $conn = connectDB();

   
    $sql = "SELECT password, `key` FROM login WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];
        $storedSecurityKey = $row['key']; 

        
        if ($storedSecurityKey === $securityKey) {
            
           
             $updateSql = "UPDATE login SET password = ? WHERE username = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("ss", $newPassword, $username);

            if ($updateStmt->execute()) {
                $updateStmt->close();
                $stmt->close();
                $conn->close();
                return true;
            } else {
                $stmt->close();
                $conn->close();
                return false;
            }
        } else {
            $stmt->close();
            $conn->close();
            return false; 
        }
    } else {
        $stmt->close();
        $conn->close();
        return false; 
    }
}

?>
