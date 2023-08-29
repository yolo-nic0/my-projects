<?php 
require_once 'controllers/authController.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="forms.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:wght@400;700&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form  action="index.php" method="post" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="img/download.jpeg" alt="KMS logo" />
                <h4>Kidane Mehiret School</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

                <?php if(count($errors) > 0): ?>
                  <div class="alert alert-danger">
                      <?php foreach($errors as $error): ?>
                          <li><?php echo $error; ?></li>
                      <?php endforeach; ?>
                  </div>
                <?php endif; ?>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="username" 
                    value="<?php echo $username; ?>"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username or Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" name="login-btn" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="Registration.php" autocomplete="off" method="post" class="sign-up-form">
              <div class="logo">
                <img src="img/download.jpeg" alt="KMS logo" />
                <h4>Kidane Mehiret School</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Log-in</a>
              </div>

                  <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
    
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="username" 
                    value="<?php echo $username; ?>"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="email" 
                    value="<?php echo $email; ?>"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <div class="input-wrap">
                <input
                  type="password"
                  name="passwordConf"
                  minlength="4"
                  class="input-field"
                  autocomplete="off"
                  required
                />
                <label>Confirm password</label>
              </div>
                <input type="submit" name="next" value="Next" class="sign-btn" />

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
            <img src="img/kids-wearing-masks-at-school-animate.svg" class="image img-1 show" alt="" />
              <img src="img/notebook-animate.svg" class="image img-2" alt="" />
              <img src="img/hidden-person-animate.svg" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Future of the Education</h2>
                  <h2>Create your own journey</h2>
                  <h2>Customize as you like</h2>
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
    <!--<a href="https://storyset.com/education">Education illustrations by Storyset</a>
    <a href="https://storyset.com/work">Work illustrations by Storyset</a>
    <a href="https://storyset.com/people">People illustrations by Storyset</a>-->

    <script src="app.js"></script>
  </body>
</html>
