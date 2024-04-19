<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Predictor</title>
    <link rel="stylesheet" href="home1.css">
</head>
<body>
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="home.php">
    	<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Predictor-Predicating Future Campus.
  		</a>
  <!-- Links -->
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item active">
      			<a class="nav-link" href="home.php">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="practice.php">About Us</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="login.php">Not <?php
      			if(isset($_SESSION['username']))
      				{
      					echo $_SESSION['username'];
      				}
      			?>? Logout</a>
    		</li>
  		</ul>
	</nav>
<div class="container">
<form action="">
    <div class="text">
       <h2 style="color:crimson; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 14px;"> Choose Your requirment of Your College</h2>
    
 
    <input type="radio" id="current" name="Student" value="current">

    <label for="current"> <a href="mah.php">COllege Within Maharashtra Only </a> </label>
    <br>
    <input type="radio" id="type" name="Student" value="type">
    <label for="type"> <a href="all_india.php"> ALL India Colleges </a></label>

</div>
</form>
</div>
</body>
</html>