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
	<link rel="stylesheet" href="resources.css">

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
			<li class="active">
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
			<li>
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
		<script src="script.js"></script>
		<!-- MAIN -->
		<main>
			<!--	<section class="resources">
			<div class="container-cat">
						   <a href="#home-dashboard"><i class='bx bxs-chevron-left'></i></a>
						  <div class="name-cat">
						  <i class='bx bx-library'></i>
							<h2>Library</h2>
						  </div>
						  <nav class="nav-cat">
							<ul>
							  <li><a href="#text-books" class="active">
									Text book 
								  </a>
							  </li>
							  <li>
							  <a href="#science">
									Science
								  </a>                  
							  </li>
							  <li>
							  <a href="#fiction">
									Fiction
								  </a>                  
							  </li>
							  <li>
							  <a href="#litrature">
									Litraature
								  </a>                  
							  </li>
							  <li>
							  <a href="#history">
									History
								  </a>                  
							  </li>
							  <li>
							  <a href="#educational">
									Educational
								  </a>                  
							  </li>
			
							</ul>
						  </nav>
						 </div>
						 <script type="text/javascript">
						  const allItems = document.querySelectorAll('.nav-cat ul li a');
			
						  allItems.forEach(item => {
							item.addEventListener("click", function(e) {
							  for(var i = 0; i < allItems.length; i++) {
								allItems[i].classList.remove("active");
							  }
							  this.classList.add("active");
							});
						  });
						 </script>
			<section id="display">
			
			<section id="text-books">
				  <nav>
					<div class="overview" id="overview">
					  <div class="ov">
						<div class="cont">
						  <div class="img-slider">
					<div class="slide active">
					  <div class="info">
					  <h2>Reader</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  </div>
					  <div class="pic">
						<img src="img/Reading glasses-bro.svg" alt="">
					  </div>
					</div>
					<div class="slide">
					  <div class="info">
					  <h2>Watcher</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  </div>
					  <div class="pic">
						<img src="img/Writing room-bro.svg" alt="">
					  </div>
					</div>
					<div class="slide">
					
					 <div class="info">
						<h2>Creator</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  </div>
					  <div class="pic"><img src="img/Reading book-bro.svg" alt=""></div>
					</div>
					<div class="slide">
					
					  <div class="info">
						<h2>Founder</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  </div>
					  <div class="pic"><img src="img/Editorial commision-pana.svg" alt=""></div>
					</div>
					<div class="slide">
					
					  <div class="info">
						<h2>Leader</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					  </div>
					  <div class="pic"><img src="img/Editorial commision-amico.svg" alt=""></div>
					</div>
					<div class="navigation">
					  <div class="btn active"></div>
					  <div class="btn"></div>
					  <div class="btn"></div>
					  <div class="btn"></div>
					  <div class="btn"></div>
					</div>
					  </div>
				  </nav>
			
			  <script type="text/javascript">
				var slides = document.querySelectorAll('.slide');
				var btns = document.querySelectorAll('.btn');
				let currentSlide = 1;
			
				// Javascript for image slider manual navigation
				var manualNav = function(manual){
				  slides.forEach((slide) => {
					slide.classList.remove('active');
			
					btns.forEach((btn) => {
					  btn.classList.remove('active');
					});
				  });
			
				  slides[manual].classList.add('active');
				  btns[manual].classList.add('active');
				}
			
				btns.forEach((btn, i) => {
				  btn.addEventListener("click", () => {
					manualNav(i);
					currentSlide = i;
				  });
				});
			
				// Javascript for image slider autoplay navigation
				var repeat = function(activeClass){
				  let active = document.getElementsByClassName('active');
				  let i = 1;
			
				  var repeater = () => {
					setTimeout(function(){
					  [...active].forEach((activeSlide) => {
						activeSlide.classList.remove('active');
					  });
			
					slides[i].classList.add('active');
					btns[i].classList.add('active');
					i++;
			
					if(slides.length == i){
					  i = 0;
					}
					if(i >= slides.length){
					  return;
					}
					repeater();
				  }, 10000);
				  }
				  repeater();
				}
				repeat();
			  </script>
						</div>
					  </div>
				  </div> 
				  <div class="catagory">
					<span>
					  <i class='bx bxs-package'></i>
					  <h4>Catagory:</h4>
					</span>
						<ul>
						  <li><a href="#home-g12books">Grade 12</a></li>
						  <li><a href="#home-g11books">Grade 11</a></li>
						  <li><a href="#home-g10books">Grade 10</a></li>
						  <li><a href="#home-g9books">Grade 9</a></li>
						</ul>
				  </div>
				   
				<section id="home-g12books">
				  <div class="title">
				  <a href="#overview"><i class='bx bxs-left-arrow bx-flashing' ></i></a>
					<h2>Grade 12</h2>
				  </div>
					  <div class="books_cont">
					  <div class="book">
						<h2>Chemistry</h2>
						  <div class="box" id="book1">
						  </div>
						  <span>size: 16mb</span>
						  <div class="detail">
							<button class="down_btn"><a href="assets/files/Chemistry G-11.pdf" download="chemistry_G11">Download</a></button>
							<button class="view_btn"><a href="assets/files/Chemistry G-11.pdf" target="_blank">View</a></button>
						  </div>
						</div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
					  </div>
				</section>
			
					<section id="home-g11books">
					  <div class="title">
					  <a href="#overview"><i class='bx bxs-left-arrow bx-flashing' ></i></a>
						  <h2>Grade 11</h2>
					  </div>
					  <div class="books_cont">
						<div class="book">
						  <h2>Chemistry</h2>
							<div class="box" id="book1">
							</div>
							<span>size: 16mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/Chemistry G-11.pdf" download="chemistry_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/Chemistry G-11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>Biology</h2>
							<div class="box" id="book2">
							</div>
							<span>size: 130mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/Biology Grade 11.pdf" download="Biology_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/Biology Grade 11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>Civics</h2>
							<div class="box" id="book3">
							</div>
							<span>size: 6mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/Civics SBK11.pdf" download="Civics_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/Civics SBK11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>English</h2>
							<div class="box" id="book4">
							</div>
							<span>size: 115mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/English-11.pdf" download="English_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/English-11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>Amharic</h2>
							<div class="box" id="book5">
							</div>
							<span>size: 5mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/Grade11_Amharic_Textbook.pdf" download="Amharic_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files//Grade11_Amharic_Textbook.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>ICT</h2>
							<div class="box" id="book6">
							</div>
							<span>size: 75mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/ICT_G11.pdf" download="ICT_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/ICT_G11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>Mathematics</h2>
							<div class="box" id="book7">
							</div>
							<span>size: 220mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/Mathematics – Student Textbook – Grade 11.pdf" download="Mathematics_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/Mathematics – Student Textbook – Grade 11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>Physics</h2>
							<div class="box" id="book8">
							</div>
							<span>size: 94mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/Physics Grade 11.pdf" download="Physics_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/Physics Grade 11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
						  <div class="book">
						  <h2>Technical Drawing</h2>
							<div class="box" id="book9">
							</div>
							<span>size: 13mb</span>
							<div class="detail">
							  <button class="down_btn"><a href="assets/files/Technical Drawing_Grade-11.pdf" download="Technical Drawing_G11">Download</a></button>
							  <button class="view_btn"><a href="assets/files/Technical Drawing_Grade-11.pdf" target="_blank">View</a></button>
							</div>
						  </div>
					  </div>
					</section>
			
				<section id="home-g10books">
				  <div class="overview" id="overview_g10">
				  <a href="#home-resourses"><i class='bx bx-left-arrow-circle bx-flashing bx-flip-vertical' ></i></a>
					  <div class="ov">
						<div class="cont">
						  
						</div>
					  </div>
				  </div>
				  <div class="title">
				  <a href="#overview"><i class='bx bxs-left-arrow bx-flashing' ></i></a>
					<h2>Grade 10</h2>
				  </div>
					  <div class="books_cont">
					  <div class="book">
						<h2>Chemistry</h2>
						  <div class="box" id="book1">
						  </div>
						  <span>size: 16mb</span>
						  <div class="detail">
							<button class="down_btn"><a href="assets/files/Chemistry G-11.pdf" download="chemistry_G11">Download</a></button>
							<button class="view_btn"><a href="assets/files/Chemistry G-11.pdf" target="_blank">View</a></button>
						  </div>
						</div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
					  </div>
				</section>
			
				<section id="home-g9books">
					<div class="overview" id="overview_g9">
					<a href="#home-resourses"><i class='bx bx-left-arrow-circle bx-flashing bx-flip-vertical' ></i></a>
					  <div class="ov">
						<div class="cont">
						  <h2>Grade 9</h2>
						</div>
					  </div>
					</div>
					<div class="title">
					<a href="#overview"><i class='bx bxs-left-arrow bx-flashing' ></i></a>
					<h2>Grade 9</h2>
					</div>
					  <div class="books_cont">
					  <div class="book">
						<h2>Chemistry</h2>
						  <div class="box" id="book1">
						  </div>
						  <span>size: 16mb</span>
						  <div class="detail">
							<button class="down_btn"><a href="assets/files/Chemistry G-11.pdf" download="chemistry_G11">Download</a></button>
							<button class="view_btn"><a href="assets/files/Chemistry G-11.pdf" target="_blank">View</a></button>
						  </div>
						</div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
						<div class="book"></div>
					  </div>
				  </section>
			
			</section>
			
			<section id="science">
				<div class="tag">
				  <div class="tag1">
					<h1>Science</h1>
				  </div>
				</div>
				<div class="sci-books"></div>
				
			</section>
			
			<section id="fiction">
			  <div class="tag">
				<h1>Fiction</h1>
			  </div>
			  <div class="fic-books"></div>
			  
			</section>
			
			<section id="litrature">
			  <div class="tag">
				<h1>Litrature</h1>
			  </div>
			  <div class="lit-books"></div>
			  
			</section>
			
			<section id="history">
			  <div class="tag">
				<h1>History</h1>
			  </div>
			  <div class="his-books"></div>
			  
			</section>
			
			<section id="educational">
			  <div class="tag">
				<h1>Educational</h1>
			  </div>
			  <div class="edu-books"></div>
			  <script src="js/script1.js"></script>
		</section>-->

			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

</body>
</html>