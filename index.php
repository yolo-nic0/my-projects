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

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

<link rel="stylesheet" href="index.css">
	<title>Student Hub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="index.php" class="brand">
			<img src="img/download.jpeg" alt="">
			<span class="text">Student Hub</span>
		</a>
		<div class="row">
            <div class="col-md-4 offset-md-4 form-div login">

            <?php if(isset($_SESSION['message'])): ?>
                <?php echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                    unset($_SESSION['alert-class']);
                ?>
                </div>
				
            <?php endif; ?>
        </div>

		<ul class="side-menu top">
			<li class="active">
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
				<i class='bx bx-package bx-tada' ></i>
					<span class="text">Up coming</span>
				</a>
			</li>
			<!--<li>
				<a href="#" class="logout">
					<a href="forms.php?logout=1" class="logout"><i class='bx bxs-log-out-circle' ></i>logout</a>
				</a>
			</li>-->
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
			<i class='bx bx-menu' >&nbsp&nbsp<a href="#"><span>Categories</span></a></i>
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
		<div class="info">
			<div class="top">
                <div class="head-title">
                    <div class="left">
                        <img src="img/user2.jpg" alt="">
                        <h2><span>Welcome, <?php echo $_SESSION['username'] ?></span></h2>
                        <p>Manage your info, privacy, and security to make Your journey better for you.</p>
                    </div>
                </div>
                
            </div>
		
		<div class="bottom">
            <div class="notics">
                <div class="tex">
                            <h3>Notice board</h3>
                        </div>
                <hr>
                <div class="not">
                            <ul>
                                <li>
                                    <div>
                                        <h4 class="topic">Topic 1</h4>
                                        <i class="date">12-05-2023</i>
                                    </div>
                                    <p class="par">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis consequuntur odit dicta minima est magni voluptatem eaque veritatis, impedit earum provident fugit saepe accusantium nulla officiis modi, eligendi quibusdam tempora?</p>
                                </li>
								                                <li>
                                    <div>
                                        <h4 class="topic">Topic 1</h4>
                                        <i class="date">12-05-2023</i>
                                    </div>
                                    <p class="par">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis consequuntur odit dicta minima est magni voluptatem eaque veritatis, impedit earum provident fugit saepe accusantium nulla officiis modi, eligendi quibusdam tempora?</p>
                                </li>

                            </ul>
                        </div>
            </div>
            <div id="cal" class="light">
    <div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
        <div class="calendar-footer">
            <div class="toggle">
                <span>Dark Mode</span>
                <div class="dark-mode-switch">
                    <div class="dark-mode-switch-ident"></div>
                </div>
            </div>
        </div>
        <div class="month-list"></div>
    </div>
            </div>
			 <div class="todo">
				<h2>To-Do List <img src="img/icon.png"></img></h2>
				<div class="row">
					<input type="text" id="input-box" placeholder="Add your text here">
					<button onclick="addTask()">Add</button>
				</div>
				<ul id="list-container">
					<!-- <li class="checked">Task 1</li>
					<li>Task 2</li>
					<li>Task 3</li> -->
				</ul>
				<script>
					
const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");

function addTask(){
	if(inputBox.value === ''){
		alert("You must write something!");
	}
	else{
		let li = document.createElement("li");
		li.innerHTML = inputBox.value;
		listContainer.appendChild(li);
		let span =  document.createElement("span");
		span.innerHTML = "\u00d7";
		li.appendChild(span);
	}
	inputBox.value = "";
	saveData();
}

listContainer.addEventListener("click", function(e){
	if(e.target.tagName === "LI"){
		e.target.classList.toggle("checked");
		saveData();
	}else if(e.target.tagName === "SPAN"){
		e.target.parentElement.remove();
		saveData();
	}
}, false);

	function saveData(){
		localStorage.setItem("data", listContainer.innerHTML);
	}
	function showTask(){
		listContainer.innerHTML = localStorage.getItem("data");
	}
	showTask();
				</script>
			</div>
            <script src="cal.js"></script>
        </div>
    </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>