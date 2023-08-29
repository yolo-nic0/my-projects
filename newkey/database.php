<?php 
require_once 'controllers/authController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display my database</title>
    <link rel="stylesheet" href="database.css">
</head>
<body>
    <div class="container">
        <button class="btn"><a href="forms.php">Add User</a></button>
        <div class="the-box">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Verified</th>
                    <th>Password</th>
                    <th>Operations</th>
                </thead>
                <tbody>
                <?php
                    $sql="select * from `users`";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $username=$row['username'];
                            $email=$row['email'];
                            $verified=$row['verified'];
                            $password=$row['password'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$username.'</td>
                            <td>'.$email.'</td>
                            <td>'.$verified.'</td>
                            <td>'.$password.'</td>
                            <td>
                            <button class="btn_new1"><a href="update.php?updateid='.$id.'">Update</a></button>
                            <button class="btn_new2"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                           </td>
                            </tr>';
                        }
                    }
                ?>
                </tbody>
                </table>
        </div>
    </div>
</body>
</html>