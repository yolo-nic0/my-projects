<?php 
require_once 'controllers/authController.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `users` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "deleted successfull";
        header('location:database.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>