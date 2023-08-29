<?php 
require_once 'controllers/authController.php';

// if(!isset($_SESSION['id'])){
//     header('location: forms.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="whole">
  <form action="index.php" autocomplete="off" method="post" class="reg">
    <div class="logo">
      <img src="#" alt="KMS logo" />
      <h4>Kidane Mehiret School</h4>
    </div>
  
    <div class="heading">
      <h2>Finalize your registration.</h2>
    </div>
  
                    <?php if(count($errors) > 0): ?>
                      <div class="alert alert-danger">
                          <?php foreach($errors as $error): ?>
                              <li><?php echo $error; ?></li>
                          <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
  
    <div class="wrap">
        <div class="actual-form">
          <!-- <div class="input-wrap">
            <input
              type="email"
              name="email"
              value="<?php echo $email; ?>"
              class="input-field"
              autocomplete="off"
              required
            />
            <label>Email</label>
          </div> -->
          <div class="input-wrap">
            <input
              type="text"
              name="fullname"
              minlength="4"
              class="input-field"
              autocomplete="off"
              placeholder="Full name"
              required
            />
            </div>

          <div class="input-wrap">
            <input
              type="number"
              name="grade"
              minlength="4"
              class="input-field"
              autocomplete="off"
              placeholder="Grade"
              required
            />
          </div>
          <div class="input-wrap">
            <input
              type="tel"
              name="tel"
              minlength="4"
              class="input-field"
              autocomplete="off"
              placeholder="Phone Number"
              required
            />
          </div>
          <div class="input-wrap">
            <input
              type="date"
              name="dob"
              class="input-field"
              autocomplete="off"
              required
            />
            <label>DoB</label>
          </div>
          <div class="input-wrap pic">
            <input
              type="file"
              name="pic"
              class="input-field"
              autocomplete="off"
              required
            />
          </div>
          <div class="gen">
              <label>Gender</label>
              <div>
                <label>Male <input
                type="radio"
                name="male"
                class="input-field"
                autocomplete="off"
                /></label>
              </div>
              <div>
                <label>Female <input
                type="radio"
                name="female"
                class="input-field"
                autocomplete="off"
                /></label>
              </div>
            </div>


      </div>
        <div class="pg">
        </div>
   
  
  
  
      <input type="submit" name="signup-btn" value="Sign Up" class="sign-btn" />
  
      <p class="text">
        By signing up, I agree to the
        <a href="#">Terms of Services</a> and
        <a href="#">Privacy Policy</a>
      </p>
    
              </form>
</div>

</body>
</html>