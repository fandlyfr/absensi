<!DOCTYPE html>
<html lang="en">	
<?php 
session_start();
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Absensi Pengurus OKIF FT-UH</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/Users.css">
	<link rel="stylesheet" type="text/css" href="css/userslog.css">
	<link rel="stylesheet" type="text/css" href="css/manageusers.css">
	<script>
    $(document).ready(function() {
      $.ajax({
        url: "user_log_up.php",
        type: 'POST',
        data: {
          'select_date': 1,
        }
      });
      setInterval(function() {
        $.ajax({
          url: "user_log_up.php",
          type: 'POST',
          data: {
            'select_date': 0,
          }
        }).done(function(data) {
          $('#userslog').html(data);
        });
      }, 5000);
    });
  </script>
  <script>
		$(document).ready(function() {
			$.ajax({
				url: "manage_users_up.php"
			}).done(function(data) {
				$('#manage_users').html(data);
			});
			setInterval(function() {
				$.ajax({
					url: "manage_users_up.php"
				}).done(function(data) {
					$('#manage_users').html(data);
				});
			}, 5000);
		});
	</script>
</head>
<body>
<header>
	<div class="header d-none d-md-block">
		<div class="logo">
			<img src= "icons/logo_OKIF.png" alt="logo OKIF"/>
			<a class="" href="index.php">Absensi Pengurus HMIF FT-UH</a>
			<img src= "icons/logo_CI.png" alt="logo CI"/>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<a class="navbar-brand d-md-none" href="#">Absensi Pengurus HMIF FT-UH</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav mr-auto pl-3 pl-md-0">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Users <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="UsersLog.php">Users Log</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ManageUsers.php">Manage Users</a>
					</li>
			
				</ul>
			</div>
		</div>
	</nav>

	<!-- <div class="topnav" id="myTopnav">
		<a href="index.php">Users</a>
		<a href="UsersLog.php">Users Log</a>
		<a href="ManageUsers.php">Manage Users</a>
		<a href="javascript:void(0);" class="icon" onclick="navFunction()">
		<i class="fa fa-bars"></i></a>
	</div> -->
</header>
<script>
	// function navFunction() {
	//   var x = document.getElementById("myTopnav");
	//   if (x.className === "topnav") {
	//     x.className += " responsive";
	//   } else {
	//     x.className = "topnav";
	//   }
	// }
</script>


	

	
