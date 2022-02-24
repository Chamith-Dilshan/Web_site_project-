<?php
	date_default_timezone_set('Asia/Colombo');
	include 'Dtbs.php';
	include 'Functions.php';
?>
<!DOCTYPE html>
<html>
	<Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="http://fonts.cdnfonts.com/css/brixton" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Community_style.css">
    
		
	</Head>
	<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="home.html">Home</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="dropbtn">Languages</button>
          <div class="dropdown-content">
            <a href="#">HTML</a>
            <a href="#">CSS</a>
            <a href="#">Java Script</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Community.php">Community</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Teams.php">Teams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs.html">About Us</a>
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

      <!--Heading and introduction-->
      <br>
      <div class="heading">
          <h2>Ask the Community</h2>		
      </div>
	  <br>
	<h5 class="intro">If you are stuck don't hesitate.<br>Present your problem to the Don't Get Stuck Community</h5>
	<br><br><br>
	<?php
	echo"
		<div class='comm1'>
			<form method='POST' action='".setComment($conn)."'>
				<input type='hidden' name='UID' value='2'>
				<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
				<textarea class='comm' name='message'>Precent your problem here</textarea>
				<button class='comm' type='submit' name='submitComment'>Comment</button>
			</form>
		</div>";
	//Controll pannel
	echo
	"<br><br>
	<div class='stick'>
	<h4>Controll pannel</h4>
	<form method='POST' action='".ctrlComment($conn)."'>
		<label for='CommNo'>Enter the comment Number you wish to intaract with</label>
		<input type=text name='CommNo'><br><hr>
		<input type='hidden' name='UID' value='1'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea class='comm' name='reply'>Comment youre ideas about the problem you mentioned above</textarea>
		".
		//set a reply
		"
		<br>
		<button class='comm' type='submit' name='submitReply'>Reply</button>
		".
		//get the replies
		"
		<button class='comm' type='submit' name='getReply'>See Replies</button>
		".
		//add a like
		"
		<br><hr>
		<button class='comm' type='submit' name='Like'>UpVote</button>
		".
		// add a dislike
		"
		<button class='comm' type='submit' name='Disike'>DownVote</button>
	</form>
	</div>
	<hr><hr><hr>";

	getComment($conn)
	//add a like to comment
	/*echo
	"
	<form method='POST' action='".addLike($conn)."'>
		<label for='CommNo'>Enter the comment Number you wish to add a vote</label>
		<input type=text name='CommNo'>
		<button class='comm' type='submit' name='Like'>UpVote</button>
	</form>";
	//add a dislke to comment
	echo
	"
	<form method='POST' action='".addLike($conn)."'>
		<label for='CommNo'>Enter the comment Number you wish to add a vote</label>
		<input type=text name='CommNo'>
		<button class='comm' type='submit' name='Disike'>DownVote</button>
	</form>";
	getComment($conn)*/
	?>
	</body>
</html>