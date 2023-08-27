<?php
session_start();
require 'config/db.php';
//require_once 'emailController.php';

$errors = array();
$username = "";
$email = "";

// if user clicks on the sign up button
if(isset($_POST['next'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    //validation
    if(empty($username)){
        $errors['username'] = "Username required.";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email address is invalid.";
    }
    if(empty($email)){
        $errors['email'] = "Email required.";
    }
    if(empty($password)){
        $errors['password'] = "Password required.";
    }
    if($password !== $passwordConf){
        $errors['password'] = "The two passwords do not match.";
    }

    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if($userCount > 0){
        $errors['email'] = "Email already exists.";
    }

    if(count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO users (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);
        
        if ($stmt->execute()) {
            //login user
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;

            //sendVerificationEmail($email, $token);

            // set flach message
            $_SESSION['message'] = "you are now loged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: Registration.php');
            exit();
        }else{
            $errors['db_error'] = "Database error: failed to register.";
        }
    }


}

// if user clicks on the login button

if(isset($_POST['login-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    //validation
    if(empty($username)){
        $errors['username'] = "Username required.";
    }
    if(empty($password)){
        $errors['password'] = "Password required.";
    }

    if(count($errors) === 0){
        $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if(password_verify($password, $user['password'])){
            //login success
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = $user['verified'];
            // set flach message
            $_SESSION['message'] = "you are now loged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: index.php');
            exit();
        }else{
            $errors['login_fail'] = "wrong creditentials";
        }
    }

}

//logout user
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location: forms.php');
    exit();

}

//verfify User by token
//function verifyUser($token){
  //  global $conn;
  //  $sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
   // $result = mysqli_query($conn, $sql);

    //if(mysqli_num_rows($result) > 0){
      //  $user = mysqli_fetch_assoc($result);
        //$update_query = "UPDATE users SET verified=1 WHERE token='$token'";

   //     if(mysqli_query($conn, $update_query)){
     //       //login in
    //        $_SESSION['id'] = $user['id'];
      //      $_SESSION['username'] = $user['username'];
        //    $_SESSION['email'] = $user['email'];
          //  $_SESSION['verified'] = 1;
            // set flach message
            //$_SESSION['message'] = "your email address is successfully verified!";
          //  $_SESSION['alert-class'] = "alert-success";
           // header('location: ');
           // exit();
 //       }
   // }else{
     //   echo 'user not found';
   // }
//}

// if user clicks on the sign up button
if(isset($_POST['next'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    //validation
    if(empty($username)){
        $errors['username'] = "Username required.";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email address is invalid.";
    }
    if(empty($email)){
        $errors['email'] = "Email required.";
    }
    if(empty($password)){
        $errors['password'] = "Password required.";
    }
    if($password !== $passwordConf){
        $errors['password'] = "The two passwords do not match.";
    }

    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if($userCount > 0){
        $errors['email'] = "Email already exists.";
    }

    if(count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO users (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);
        
        if ($stmt->execute()) {
            //login user
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;

            //sendVerificationEmail($email, $token);

            // set flach message
            $_SESSION['message'] = "you are now loged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: Registration.php');
            exit();
        }else{
            $errors['db_error'] = "Database error: failed to register.";
        }
    }


}
