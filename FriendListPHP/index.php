<!doctype html>
<html lang='en'>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="Description" content="Assignment 2: Homepage"/>
		<meta name="Keywords" content="Web,programming,assignment" />
		<link rel="stylesheet" href="style.css"/>
		<title>My Friend System||Home Page</title>
		<?php
		$report="";
		require_once("functions/settings.php");
	
		$conn = @mysqli_connect
			("$host",
			 "$user",
			 "$pwd") 
			or die
			('Failed to connect to server');
		
		@mysqli_select_db($conn,"$sql_db");
		
		$query = "select * FROM friends";
		
		$result = mysqli_query($conn, $query);
		
		if(!$result)
		{
			$friendsquery = "CREATE TABLE IF NOT EXISTS friends
			(
			friend_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			friend_email VARCHAR(50) NOT NULL,
			password VARCHAR(20) NOT NULL,
			profilename VARCHAR(30) NOT NULL,
			date_started DATE NOT NULL,
			num_of_friends INT UNSIGNED
			);";
	
			$myfriendsquery = "CREATE TABLE IF NOT EXISTS myfriends
			(
			friend_id1 INT NOT NULL,
			friend_id2 INT NOT NULL
			);";
		
			$friendsresult = mysqli_query($conn,$friendsquery);
			
			$myfriendsresult = mysqli_query($conn,$myfriendsquery);
			
			include("functions/insert.php");
			
			if ($friendsresult&&$myfriendsresult)
			{
				if
					(
					$insertfriendsresult1
					&&$myfriendinsertresult1

					&&$insertfriendsresult2
					&&$myfriendinsertresult2

					&&$insertfriendsresult3
					&&$myfriendinsertresult3
					&&$myfriendinsertresult4

					&&$insertfriendsresult4
					&&$myfriendinsertresult5
					&&$myfriendinsertresult6
					&&$myfriendinsertresult7

					&&$insertfriendsresult5
					&&$myfriendinsertresult8
					&&$myfriendinsertresult9
					&&$myfriendinsertresult10
					&&$myfriendinsertresult11

					&&$insertfriendsresult6
					&&$myfriendinsertresult12
					&&$myfriendinsertresult13
					&&$myfriendinsertresult14
					&&$myfriendinsertresult15
					&&$myfriendinsertresult16

					&&$insertfriendsresult7
					&&$myfriendinsertresult17
					&&$myfriendinsertresult18

					&&$insertfriendsresult8
					&&$myfriendinsertresult19
					&&$myfriendinsertresult20

					&&$insertfriendsresult9
					&&$myfriendinsertresult21
					&&$myfriendinsertresult22
					&&$myfriendinsertresult23

					&&$insertfriendsresult10
					&&$myfriendinsertresult24
					&&$myfriendinsertresult25
				)
				{
					$report= "<p>Tables successfully created and populated</p>";
				}
				else
				{
					$report= "<p>Data insert into table unsuccessful</p>";
				}
			}
			else
			{
				$report= "<p>Create table operation unsuccessful</p>";
			}
		}
		else//when table already exist
		{
			$report = "<p>Table already exists</p>";
		}
		?>
	</head>

	<body>
		<header>
			<?php include ("functions/header.inc");?>
		</header>

		<main>
			<div id="intro">
				<h1>Assignment Home Page</h1>
				<p>Name: CC<br/>
				Student ID: 103076376
				<br/>Email:
					<a href="mailto:103076376@student.vic.edu.au">103076376@student.swin.edu.au</a>
				</p>

				<p>I declare that this assignment is my individual work. I have not worked collaporatively nor have I copied from any other student's work or from any other source</p>
				<?php echo $report;?>
				<a href="about.php">About this assignment</a>
				<h3>Link to other pages of the site:</h3>
				<p>
					<a href="signup.php">Sign Up</a>

					<a href="login.php">Log In</a>
				</p>
			</div>

		</main>
	</body>
</html>