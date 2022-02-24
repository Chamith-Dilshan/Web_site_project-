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
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Teams_style.css">
	</head>
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

</div>


<!--Heading and introduction-->
<br>
  <div class="heading">
          <h2>Team Up</h2>		
      </div>
	  <br>
	<h5 class="intro">If you are stuck without a team, dont bother.<br>Team up with the Don't Get Stuck Community</h5>

<!--tabs-->
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Teams')" id="defaultOpen">Teams</button>
  <button class="tablinks" onclick="openTab(event, 'Vacancies')">Vacancies</button>
  <button class="tablinks" onclick="openTab(event, 'Searches')">Searches</button>
</div>

<div id="Teams" class="tabcontent">
  <?php
         echo'
         <div class="form1">
         <form method=POST action="'.getTeams($conn).'">

          <label for="Faculty">Choose your faculty:</label>
          <select name="Faculty" size="4">
            <option value="computing">Computing</option>
            <option value="business">Business</option>
            <option value="science">Science</option>
            <option value="engineering">Engineering</option>
          </select><br>

          <button class="comm" type="submit" name="getTeam">Display</button>
        </form>
        </div>
        <br>

        <div class="form2">
        <h4> Create a Team</h4>
         <form method=POST action="'.setTeam($conn).'">
           <label for="TName">Team Name:</label>
           <input type="text" name="TName"><br>

           <label for="Leader">Team Leader ID No:</label>
           <input type="text" name="Leader"><br>

           <label for="Faculty">Choose your faculty:</label>
           <select name="Faculty" size="4">
             <option value="computing">Computing</option>
             <option value="business">Business</option>
             <option value="science">Science</option>
             <option value="engineering">Engineering</option>
           </select><br>

           <label for="Batch">Enter Batch:</label>
           <input type="text" name="Batch"><br>

           <label for="Subject">the Subject<label>
           <input type="text" name="Subject"><br>

           <label for="Purpuse">Enter the purpuse of this team:</label>
           <textarea name="Purpuse" id="" cols="50" rows="4"></textarea><br>

           <label for="Members">Members Now:</label>
           <input type="text" name="Members"><br>

           <label for="MaxMembers">Total Members:</label>
           <input type="text" name="MaxMembers">

           <button class="comm" type="submit" name="submitTeam">Create</button>
         </form>
         </div>
         
         ';
          
         
  ?>
</div>

<div id="Vacancies" class="tabcontent">
<?php
         echo'

         <div class="form1">
         <form method=POST action="'.getVac($conn).'">

          <label for="Faculty">Choose your faculty:</label>
          <select name="Faculty" size="4">
            <option value="computing">Computing</option>
            <option value="business">Business</option>
            <option value="science">Science</option>
            <option value="engineering">Engineering</option>
          </select><br>

          <button class="comm" type="submit" name="getVac">Display</button>
        </form>
        </div>
        <br>

        <div class="form2">
        <h4>Publich a Vacancy</h4>
         <form method=POST action="'.setRequest($conn).'">
           <label for="TID">Enter Team ID:</label>
           <input type="text" name="TID"><br>
           
           <input type="hidden" name="Date" value="'.date('Y-m-d H:i:s').'">

           <label for="Description">Description:</label>
           <textarea name="Description" id="" cols="40" rows="4"></textarea><br>

           <button class="comm" type="submit" name="submitRequest">Send</button>
         </form>
        </div>
         ';
         //getRequest($conn)
?>
</div>

<div id="Searches" class="tabcontent">
<?php
         echo'

         <div class="form1">
         <form method=POST action="'.getSearch($conn).'">

          <label for="Faculty">Choose your faculty:</label>
          <select name="Faculty" size="4">
            <option value="computing">Computing</option>
            <option value="business">Business</option>
            <option value="science">Science</option>
            <option value="engineering">Engineering</option>
          </select><br>

          <button class="comm" type="submit" name="getSearch">Display</button>
        </form>
        </div>
        <br>

        <div class="form2">
        <h4>Advertice Yourself to Join a Team</h4>
         <form method=POST action="'.setSearch($conn).'">

           <input type="hidden" name="UID" value="2">
           <input type="hidden" name="Date" value="'.date('Y-m-d H:i:s').'">
           <label for="Subject">Enter the Subject:</label>
           <input type="text" name="Subject"><br>

           <label for="Task">The given task <label>
           <input type="text" name="Task"><br>

           <label for="Purpuse">Enter your Conditions:</label>
           <textarea name="Conditions" id="" cols="40" rows="4"></textarea><br>

           <label for="Con1">Contact Info</label>
           <input type="text" name="Con1"><br>

           <label for="Con2">Contact Info</label>
           <input type="text" name="Con2"><br>

           <button class="comm" type="submit" name="submitSearch">Send</button>
         </form>
         </div>
         ';
         //getSearch($conn)
       ?>
</div>

<script>
function openTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

	</body>
</html>
    

