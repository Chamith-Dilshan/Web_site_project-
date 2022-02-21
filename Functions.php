<?php


function signIn($conn){
	if(isset($_POST['submitUser'])){
		$FName = $_POST['FName'];
		$LName = $_POST['LName'];
		$UName = $_POST['UName'];
		$EMail = $_POST['EMail'];
		$Password=$_POST['Password'];
		$Gender=$_POST['Gender'];
		$Batch = $_POST['Batch'];
		$Faculty = $_POST['Faculty'];
		
		$sql = "INSERT INTO users(F_Name,L_Name,U_Name,E_Mail,Password,Gender,Batch,Faculty) 
		values('$FName','$LName','$UName','$EMail',$Password','$Gender','$Batch','$Faculty')";
		
		$result = $conn->query($sql);
	}
}

function setComment($conn){
	if(isset($_POST['submitComment'])){
		$UID = $_POST['UID'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments(U_ID,Date,Comment) 
		values('$UID', '$date', '$message')";
		
		$result = $conn->query($sql);
	}
}

function ctrlComment($conn){
	if(isset($_POST['submitReply'])){
		$UID = $_POST['UID'];
		$CommNo=$_POST['CommNo'];
		$date = $_POST['date'];
		$message = $_POST['reply'];

		$sql = "INSERT INTO reply(Comm_No,U_ID,Date,Reply) 
		values('$CommNo','$UID','$date','$message')"; 
		
		$result = $conn->query($sql);
		
	}
	if(isset($_POST['Like'])){
		$CommNo=$_POST['CommNo'];

		$sql="UPDATE comments SET Likes = Likes + 1 WHERE Comm_No= '$CommNo'";
		
		$result = $conn->query($sql);
	}
	if(isset($_POST['Dislike'])){
		$CommNo=$_POST['CommNo'];
		
		$sql="UPDATE comments SET Dislikes = Dislikes + 1 WHERE Comm_No= '$CommNo'";

		$result = $conn->query($sql);
	}
	if(isset($_POST['getReply'])){
		$CommNo=$_POST['CommNo'];

		$sql="	SELECT *
				FROM reply
				WHERE Comm_No='$CommNo'";
				/*LEFT JOIN users 
				ON
    			reply.U_ID=users.U_ID*/
	
		$result = $conn->query($sql);

		//display replies

		echo"
		<div class='stick2'>
			<div class='stick1'>
				<h4>Controll pannel Replies</h4>
				<form method='POST' action='".ctrlReply($conn)."'>
					<label for='ReplyNo'>Enter the reply Number you wish to intaract with</label>
					<input type=text name='ReplyNo'>
					<input type='hidden' name='UID' value='1'>
					<input type='hidden' name='CommNo' value='$CommNo'>
					<br><hr>
					<button class='comm' type='submit' name='Like'>UpVote</button>
					<button class='comm' type='submit' name='Disike'>DownVote</button>
				</form>
			</div>

			<h4>Replies</h4><hr class='comm'>
				
		";
		while($raw=$result->fetch_assoc()){
			echo
				$raw['U_ID'].	
				"     replied at ".$raw['Date']."<br>".
				"Reply Number:-"
				.$raw['Reply_No']."<br>".
				"<div class='comm'>".		
					$raw['Reply']."<br><br>".
				"</div><hr class='comm'>
				<div><pre>likes ".$raw['Likes']."     Dislikes <?pre>".$raw['Dislikes']."</div><hr><br>

				";
		}
		echo"

		
		</div>";
	}
}

function ctrlReply($conn){
	if(isset($_POST['Like'])){
		$ReplyNo=$_POST['ReplyNo'];

		$sql="UPDATE reply SET Likes = Likes + 1 WHERE Reply_No='$ReplyNo'";
		
		$result = $conn->query($sql);
	}
	if(isset($_POST['Dislike'])){
		$ReplyNo=$_POST['ReplyNo'];

		$sql="UPDATE reply SET Dislikes = Dislikes + 1 WHERE Reply_No='$ReplyNo'";

		$result = $conn->query($sql);
	}
}

function getComment($conn){
	$sql="	SELECT comments.*, users.U_Name
			FROM comments
			INNER JOIN users 
			ON
    		comments.U_ID=users.U_ID
			ORDER BY Likes DESC";
	
	$result = $conn->query($sql);
	while($raw=$result->fetch_assoc()){
		echo
			"
			<div class='comm1'>".
					$raw['U_Name'].	
					"     Commented at ".
					$raw['Date']."<br>".
					"Comment Number:-".
					$raw['Comm_No']."<br>
				<hr class='comm'>".
				$raw['Comment'].
				"<br><hr class='comm'>".
			"<pre>  likes ".$raw['Likes']."     Dislikes <?pre>".$raw['Dislikes']."
			</div>";
		//identify comment for the reply
		$thisComment=$raw['Comm_No'];	
	}
}
//function currently not in use
/*function getReply($conn){

	$sql="SELECT*FROM reply WHERE Comm_No='$comm_No'";
	
	$result = $conn->query($sql);
	echo"
	<div class=comm2>
	<h4>Replies</h4>
	";
	while($raw=$result->fetch_assoc()){
		echo
			$raw['U_ID'].	
			"     Wrote at ".$raw['Date']."<br>".
			"Comment Numbe:-"
			.$raw['Reply_No']."<br>".
			"<div class='comm'>".		
				$raw['Comment']."<br>".
			"</div><hr><hr>";
	}

	echo"</div>";
}*/

function setTeam($conn){
	if(isset($_POST['submitTeam'])){
		$TName = $_POST['TName'];
		$Leader = $_POST['Leader'];
		$Faculty = $_POST['Faculty'];
		$Batch = $_POST['Batch'];
		$Subject = $_POST['Subject'];
		$Purpuse = $_POST['Purpuse'];
		$Members = $_POST['Members'];
		$MaxMembers=$_POST['MaxMembers'];

		$sql = "INSERT INTO teams(Team_Name,Leader,Faculty,Batch,Subject,Purpuse,Members,Max_Members) 
		values('$TName', '$Leader', '$Faculty','$Batch','$Subject','$Purpuse','$Members','$MaxMembers')";
		
		$result = $conn->query($sql);
	}
}

function setRequest($conn){
	if(isset($_POST['submitRequest'])){
		$TID = $_POST['TID'];
		$Date = $_POST['Date'];
		$Description = $_POST['Description'];

		$sql = "INSERT INTO trequest(Team_ID,Date,Description) 
		values('$TID', '$Date', '$Description')";
		
		$result = $conn->query($sql);
	}
}

function setSearch($conn){
	if(isset($_POST['submitSearch'])){
		$UID = $_POST['UID'];
		$Date = $_POST['Date'];
		$Subject = $_POST['Subject'];
		$Task = $_POST['Task'];
		$Conditions = $_POST['Conditions'];
		$Con1 = $_POST['Con1'];
		$Con2 = $_POST['Con2'];

		$sql = "INSERT INTO tsearch(U_ID,Date,Subject,Task,Conditions,Contact1,Contact2) 
		values('$UID', '$Date', '$Subject','$Task','$Conditions','$Con1','$Con2')";
		
		$result = $conn->query($sql);
	}
}

function getTeams($conn){
	$sql="	SELECT *FROM teams";
	
	$result = $conn->query($sql);
	while($raw=$result->fetch_assoc()){
		echo"
		<table class='team'>
			<tr>
				<td></td>
				<td>".$raw['Team_ID']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Team_Name']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Leader']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Faculty']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Batch']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Subject']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Purpuse']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Members']."</td>
			</tr>
			<tr>
				<td></td>
				<td>".$raw['Max_Members']."</td>
			</tr>
		</table>";
	
	}
}

?>