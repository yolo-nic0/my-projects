<?php 
require_once 'controllers/authController.php';

if(!isset($_SESSION['id'])){
    header('location: forms.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="results.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />


	<title>Student Hub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="index.php" class="brand">
			<img src="img/download.jpeg" alt="">
			<span class="text">Student Hub</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="profile.php">
					<i class='bx bx-user' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="schedule.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Schedule</span>
				</a>
			</li>
			<li>
				<a href="resources.php">
					<i class='bx bx-book-reader' ></i>
					<span class="text">E-library</span>
				</a>
			</li>
			<li>
				<a href="blogs.php">
					<i class='bx bx-chat' ></i>
					<span class="text">Blogs</span>
				</a>
			</li>
            <li class="active">
				<a href="Results.php">
					<i class='bx bxs-report'></i>
					<span class="text">Results</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="setting.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Upcoming</span>
				</a>
			</li>
		</ul>
		<div class="ads">
			<div class="wrapper">
			<div class="profile-details">
           <div class="name_job">
             <div class="name"><h4>Kidane Meheret School</h4></div>
             <div class="job">"A place to sharpen your future"<i class='bx bxs-school' id="log_out"></i></div>
           </div>
           
         </div>
			</div>
		</div>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
	<nav>
			<i class='bx bx-menu' >&nbsp&nbsp<a href="#">Categories</a></i>
			<div class="prologo">
				<div class="wrap">
					<!--<input type="checkbox" name="checkbox"id="switch-mode">
					<label for="switch-mode" class="switch-mode"></label>-->
					<div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          	<div class="profile-img">
            	<i class="fa-solid fa-circle"></i>
          	</div>
          	<span>		
				<?php echo $_SESSION['username'] ?>
            	<i class="fa-solid fa-angle-down"></i>
          	</span>
        </div>

        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">
            <a href="profile.php">
              <i class="fa-regular fa-user"></i>
              Personal info
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="blogs.php">
              <i class="fa-regular fa-envelope"></i>
              Contact
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="Setting.php">
              <i class="fa-regular fa-circle-question"></i>
              Help & Support
            </a>
          </li>
          <hr />
          <li class="profile-dropdown-list-item">
		  <a href="index.php?logout=1" class="logout">
		  <i class='bx bx-exit bx-tada' ></i>
              Logout
            </a>
          </li>
        </ul>
      </div>
	  </div>
	</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<section>
				<div>
					<h1>Personal info</h1>
					<p>Info about you and your preferences across Google services</p>
				</div>
				<div class="basic-info"></div>
				<div class="contact-info"></div>
				<div class="more-info"></div>
			</section>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>