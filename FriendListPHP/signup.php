<?php
session_start();
if(!isset($_SESSION["login"]))
{
	$_SESSION["login"] = "fail";
}
if(!isset($_SESSION["Pname"]))
{
	$_SESSION["Pname"] = "";
}

$login = $_SESSION["login"];
if(!isset($_SESSION["id"]))
{
	$_SESSION["id"] = "0";
}
$id = $_SESSION["id"];
?>
<!doctype html>
<html lang='en'>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="Description" content="Assignment 2: Homepage"/>
		<meta name="Keywords" content="Web,programming,assignment" />
		<link rel="stylesheet" href="style.css"/>
		<title>My Friend System||Sign Up</title>
	</head>

	<body>
		<?php
		$msg_error="";
		$email1 = "";
		$Pname = "";
		$Ipassword = "";
		$Cpassword = "";
		$msg_result=false;
		if(isset($_POST["clear"]))
		{
			$email1="";
			$Pname="";
		}
		if(isset($_POST["register"]))
		{
			$email = $_POST["email"];
			$Pname = $_POST["Pname"];
			$Ipassword = $_POST["Ipassword"];
			$Cpassword = $_POST["Cpassword"];
			$email1=$email;
			include("functions/validate.php");
			
			if(!empty($msg_error))
			{
				$msg_result=false;
			}
			else
			{
				$msg_result=true;
			}
			
			if($msg_result==true)
			{
				
				$email = strtolower($email);
				require_once("functions/settings.php");
				$conn = @mysqli_connect
					("$host",
					 "$user",
					 "$pwd") 
					or die
					('Failed to connect to server');

				
				@mysqli_select_db($conn,"$sql_db");
				
				
				mysqli_escape_string($conn,$email);
				mysqli_escape_string($conn,$Pname);
				mysqli_escape_string($conn,$Ipassword);
				mysqli_escape_string($conn,$Cpassword);
				
				$query="SELECT * FROM friends WHERE friend_email LIKE '$email'";
				$searchemail = mysqli_query($conn,$query);
				$numemail = mysqli_num_rows($searchemail);
				if($numemail > 0) 
				{
					$msg_error.= "<p>Email already exists</p>";
				}
        		else
				{
					
					date_default_timezone_set('Australia/Melbourne');
					mysqli_escape_string($conn,$date);
					$query="INSERT INTO friends
					(friend_email,password,profilename,date_started,num_of_friends)
					VALUE
					('$email','$Ipassword','$Pname','$date','0')";
					$insertresult = mysqli_query($conn,$query);
					if($insertresult)
					{
						$query="SELECT friend_id,friend_email, password, profilename FROM friends WHERE friend_email LIKE '$email'";
						$result = mysqli_query($conn, $query);
						if($result)
						{
							while ($row = mysqli_fetch_assoc($result))
							{
							$id=$row["friend_id"];
							$Pname=$row["profilename"];
							$msg_error.="success";
							$_SESSION["Pname"]=$Pname;
							$_SESSION["id"]=$id;
							$login="success";
							$_SESSION["login"]=$login;
							header("Location:friendadd.php");
							}
							mysqli_free_result($result);
						}
					} 
					else
					{
						$msg_error.="<p>Insert unsuccessful.</p>";
						$login = "fail";
						$_SESSION["login"]=$login;
					}
				}
				mysqli_close($conn);
			}
		}
		?>
		<header>
			<?php include ("functions/header.inc");?>
		</header>

		<main>
			<div id="intro">
				<h1>Registration Page</h1>
				<div id="error">
					
				<?php echo $msg_error;?>
				</div>
				<form action="signup.php" method="POST">
					<p>
						<label for="email">Email:</label>
						<input type="text" name="email" id="email" value='<?php echo "$email1";?>'>
					</p>
					<p>
						<label for="Pname">Profile Name:</label>
						<input type="text" name="Pname" id="Pname" value='<?php echo "$Pname";?>'>
					</p>
					<p>
						<label for="Ipassword">Password:</label>
						<input type="password" name="Ipassword" id="Ipassword">
					</p>
					<p>
						<label for="Cpassword">Confirm Password:</label>
						<input type="password" name="Cpassword" id="Cpassword">
					</p>
					<p>
					<button type="submit" id="register" name="register">Register</button>
						
					<button type="submit" id="clear" name="clear">Clear</button>
					</p>
				</form>
				
				<h6>
					<a href="index.php">To home page</a>
				</h6>
			</div>

		</main>
	</body>
</html>