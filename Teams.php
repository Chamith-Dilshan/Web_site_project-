<?php
	date_default_timezone_set('Asia/Colombo');
	include 'Dtbs.php';
	include 'Functions.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="http://fonts.cdnfonts.com/css/brixton" rel="stylesheet">
    <link rel="stylesheet" href="home_style.css">
    <link rel="stylesheet" href="Teams style.css">
	</head>
	<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="dropbtn">Languages</button>
          <div class="dropdown-content">
            <a href="home_html.html">HTML</a>
            <a href="#">CSS</a>
            <a href="#">Java Script</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Community.php">Community</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="log_sign">
        <button type="submit" onclick="document.getElementById('id01').style.display='block'" style="width:auto; text-decoration:none; color:#10ac84;">Log in</button>
      </li>
      <li class="log_sign">
        <button type="submit" onclick="document.getElementById('id02').style.display='block'" style="width:auto; text-decoration:none; color:#10ac84;">Sign in</button>
      </li>
    </ul>
  </div>
</nav>

<!--login form-->
<div class="loginbox" id="id01">
  <h1>Log in</h1>
  <form method="post" action="you_can_enter_php_file_here.php" class="animate" name="frm01" onsubmit="need_to_add_a_script_file_here">
    <p>Username</p>
    <input type="text" placeholder="Enter username" name="uname" required>
    <p>Password</p>
    <input type="password" placeholder="Enter password" name="psw" required><br>
    <input type="submit" value="Login">
    <button class="canbtn" onclick="document.getElementById('id01').style.display='none'">Cancel</button><br>
    <a href="#">forgot your password?</a><br>
    <p class="logp">Don't have an account?<button type="button" class="btn2">Signin here.</button></p>
  </form>
</div>

  <!--signin form-->
<div class="loginbox" id="id02" style="height:670px">
  <h1>Sign in</h1>
  <form method="post" action="you_can_enter_php_file_here.php" class="animate" name="frm02" onsubmit="need_to_add_a_script_file_here">
    <p>Username</p>
    <input type="text" placeholder="Enter username" name="uname" required>
    <p>Email Address</p>
    <input type="text" placeholder="Enter emailaddress" name="eaddress" required>
    <p>Password</p>
    <input type="password" placeholder="Enter password" name="psw" required>
    <p>Confirm Password</p>
    <input type="password" placeholder="ReEnter password" name="pswr" required><br>
    <input type="submit" value="Signin">
    <button class="canbtn" onclick="document.getElementById('id02').style.display='none'">Cancel</button><br>
    <p class="logp">Have an account?<button type="button" class="btn2" onclick="document.getElementById('id01'.style.display='inherit')">Login here.</button></p>
  </form>
</div>

</div>
		
        <?php

        echo'
		<h1>Login form</h1>
		<form method=POST action="'.setTeam($conn).'">
			<input type="text" name="TName">
			<label for="Faculty">Choose your faculty:</label>
			<select name="Faculty" size="4">
				<option value="computing">Computing</option>
				<option value="business">Business</option>
				<option value="science">Science</option>
				<option value="engineering">Engineering</option>
			</select>
			<input type="text" name="Batch">
			<input type="text" name="Subject">
			<textarea name="Purpuse" id="" cols="30" rows="10"></textarea>
			<input type="text" name="Members">
			<input type="text" name="CurrentMembers">
		</form>';
        
        ?>
	</body>
</html>
    

