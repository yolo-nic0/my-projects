<?php

require_once 'controllers/authController.php';
$id=$_GET['updateid'];
$sql="select * from `users` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="update `users` set id=$id, username='$username', email='$email', Password='$password'where id=$id";
  $result=mysqli_query($conn,$sql);
  if($result){
    //echo "updated perfectly";
    header('location:database.php');
  }else{
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="forms.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=EB+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Lobster&family=Lobster+Two&display=swap" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">


<!--i can use the tag action in the form to tell the submition worklike action="submit"-->



            <form method="post" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./assets/2205_w048_n004_122b_p1_122.jpg" alt="easyclass" />
                <h4>K M S</h4>
              </div>

              <div class="heading">
                <h2>Update</h2>
                <h6>processing.......</h6>
               <!-- <a href="#" class="toggle">Sign in</a>-->
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="username"
                    minlength="12"
                    class="input-field"
                    autocomplete="off"
                    value=<?php echo $username;?>
                    required
                  />
                  <!--<label>Full name</label>-->
                </div>

  
                <div class="input-wrap">
                  <input
                    type="email"
                    name="email"
                    class="input-field"
                    autocomplete="off"
                    value=<?php echo $email;?>
                    required
                  />
                  <!--<label>Email</label>-->
                </div>


                <div class="input-wrap">
                  <input
                    type="password"
                    name="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    value=<?php echo $password;?>
                    required
                  />
                 <!-- <label>Password</label>-->
                </div>

                <input type="submit" name="submit" value="Update" class="sign-btn" />
                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>








          <div class="carousel">
            <div class="images-wrapper">
              <img src="./assets/seminar-bro.svg" class="image img-1 show" alt="" />
              <img src="./assets/Kids reading-cuate.svg" class="image img-2" alt="" />
              <img src="./assets/image3.svg" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Hi!</h2>
                  <h2>We are </h2>
                  <h2>People's of KMS</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>