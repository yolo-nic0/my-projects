<?php 
require_once 'controllers/authController.php';

//if(isset($_GET['token'])){
//    $token = $_GET['token'];
//    verifyUser($token);
//}

if(!isset($_SESSION['id'])){
    header('location: sign-in.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">

            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert <?php echo $_SESSION['alert-class'] ?>">
                <?php echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                    unset($_SESSION['alert-class']);
                ?>
                </div>
            <?php endif; ?>


                <h3>Welcome, <?php echo $_SESSION['username'] ?></h3>

                <a href="home.php?logout=1" class="logout">logout</a>

                <?php if(!$_SESSION['verified']): ?>
                <div class="alert alert-warning">
                    you need to verify your account. 
                    sign in to your email account and click on the 
                    verification like we just emailed you at 
                    <strong><?php echo $_SESSION['email'] ?></strong>
                    <a href="index.php" class="btn btn-block btn-lg btn-primary">Verify later.</a>
                </div>
                <?php endif; ?>

                <?php if($_SESSION['verified']): ?>
                <button class="btn btn-block btn-lg btn-primary">I'm verified.</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>