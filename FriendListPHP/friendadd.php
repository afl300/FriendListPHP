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
$Pname = $_SESSION["Pname"];

if($login!="success")
{
		header("Location:index.php");
}

if(!isset($_SESSION["nofriends"]))
{
	$_SESSION["nofriends"] = "0";
}

$nofriend = $_SESSION["nofriends"];

if(!isset($_SESSION["id"]))
{
	$_SESSION["id"] = "0";
}
$id = $_SESSION["id"];

require_once("functions/settings.php");
$conn = @mysqli_connect
	("$host",
	 "$user",
	 "$pwd") 
	or die
	('Failed to connect to server');


@mysqli_select_db($conn,"$sql_db");
				
				
				
if(isset($_POST["addfriend"]))
{
	$friendid=$_POST["friendid"];
	$query="INSERT INTO myfriends(friend_id1,friend_id2)
	VALUE
	('$id','$friendid')";
	$result=mysqli_query($conn,$query); 
	if($result)
	{
		$query="UPDATE friends SET num_of_friends = num_of_friends + 1 WHERE friend_id in($id,$friendid)";
		$result=mysqli_query($conn,$query);
		if(!$result)
		{
			echo "<p>Fail to update table</p>";	
		}
	}
	else
	{
		echo"<p>FAIL</p>";
	}
}


$query="SELECT num_of_friends FROM friends WHERE friend_id='$id'";
$result = mysqli_query($conn,$query);
if($result)
{
	while ($row = mysqli_fetch_assoc($result))
	{
			$nofriend= $row["num_of_friends"];
			$_SESSION["nofriends"]=$nofriend;
    }
}





?>
<!doctype html>
<html lang='en'>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="Description" content="Assignment 2: Friend List"/>
		<meta name="Keywords" content="Web,programming,assignment" />
		<link rel="stylesheet" href="style.css"/>
		<title>My Friend System||Add Friend List</title>
		
	</head>

	<body>
		<header>
			<?php include ("functions/headerlogin.inc");?>
		</header>

		<main>
			<div id="intro">
				<h1><?php echo $Pname;?>'s Add Friends List Page</h1>
				<h2>Total number of friends: <?php echo $nofriend;?></h2>
				
				<div class="table">
				<?php
				$query= "SELECT friend_id,profilename 
				FROM friends WHERE friend_id NOT IN (SELECT friend_id1 FROM myfriends WHERE friend_id2='$id') AND friend_id NOT IN (SELECT friend_id2 FROM myfriends WHERE friend_id1='$id') AND friend_id NOT LIKE '$id';";

				
				$result = mysqli_query($conn, $query);

				if(!$result)
				{
				echo "<p>Something is wrong with ", $query, "</p>";
				}
				else
				{			
					while ($row = mysqli_fetch_assoc($result))
					{
						echo "<form action='friendadd.php' method='post'>";
						echo "<table>\n";
						echo "<tr>";
						echo"<td>{$row["profilename"]}<input type='hidden' name='friendid' value='{$row["friend_id"]}'></td>\n";
						echo"<td><button type='submit' name='addfriend'>Add as Friend</button></td>\n";
						echo"</tr>";
						echo"</table>\n";
						echo"</form>";
					}
					

					mysqli_free_result($result);
				}
				
				
				
				
				mysqli_close($conn);
				?>
				</div>
				
				
				
				
				<h6>
					<a href="friendadd.php">Add Friend</a>
				</h6>
				<h6>
					<a href="logout.php">Log Out</a>
				</h6>
			</div>

		</main>
	</body>
</html>