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
		<meta name="Description" content="Assignment 2: Log In"/>
		<meta name="Keywords" content="Web,programming,assignment" />
		<link rel="stylesheet" href="style.css"/>
		<title>My Friend System||Log In</title>
	</head>

	<body>
		<?php
		$msg_error="";
		$email1 = "";
		$password = "";
		$msg_result=false;
		$Pname="";
		if(isset($_POST["clear"]))//if someone click clear and reset the page
		{
			$email1="";
		}
		if(isset($_POST["login"]))
		{
			$email = $_POST["email"];
			$password = $_POST["password"];
			$email1=$email;
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
				mysqli_escape_string($conn,$password);
				
				$query="SELECT * FROM friends WHERE friend_email LIKE '$email'";
				$searchemail = mysqli_query($conn,$query);
				
				$numemail = mysqli_num_rows($searchemail);
				if($numemail == 1)
				{
					$query="SELECT friend_id,friend_email, password, profilename FROM friends WHERE friend_email LIKE '$email'";
					$result = mysqli_query($conn, $query);
					if(!$result)
					{
					    $msg_error.= "<p>Something is wrong with the login table, please try again later</p>";
					}
					else
					{
						
						while ($row = mysqli_fetch_assoc($result))
						{
							$id=$row["friend_id"];
							$Pname=$row["profilename"];
							if($row["password"]==$password)
							{
								$msg_error.="success";
								$_SESSION["Pname"]=$Pname;
								$_SESSION["id"]=$id;
								$login="success";
								$_SESSION["login"]=$login;
								header("Location:friendlist.php");
							}
							else
							{
								$msg_error.="<p>Your password you entered is incorrect</p>";
								$login="fail";
								$_SESSION["login"]=$login;
							}
						}
						mysqli_free_result($result);
					}
				}
        		else
				{
					$msg_error.="<p>Email is not found</p>";
					$login="fail";
					$_SESSION["login"]=$login;
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
				<h1>Log in Page</h1>
				<div id="error">
					
				<?php echo $msg_error;?>
				</div>
				<form action="login.php" method="POST">
					<p>
						<label for="email">Email:</label>
						<input type="text" name="email" id="email" value='<?php echo "$email1";?>'>
					</p>
					
					<p>
						<label for="password">Password:</label>
						<input type="password" name="password" id="password">
					</p>
					<p>
					<button type="submit" id="login" name="login">Log In</button>
						
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