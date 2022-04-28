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


if(!isset($_SESSION["nofriends"]))
{
	$_SESSION["nofriends"] = "0";
}
if(!isset($_SESSION["id"]))
{
	$_SESSION["id"] = "0";
}
$login = $_SESSION["login"];
$Pname = $_SESSION["Pname"];
$nofriend = $_SESSION["nofriends"];
$id = $_SESSION["id"];

if($login!="success")
{
		header("Location:index.php");
}

require_once("functions/settings.php");
$conn = @mysqli_connect
	("$host",
	 "$user",
	 "$pwd") 
	or die
	('Failed to connect to server');

@mysqli_select_db($conn,"$sql_db");


if(isset($_POST["unfriend"]))
{
	$friendid=$_POST["friendid"];
	$query="DELETE FROM myfriends WHERE (friend_id1=$id AND friend_id2=$friendid) OR (friend_id1=$friendid AND friend_id2=$id)";
	$result=mysqli_query($conn,$query); 
	if($result)
	{
		$query="UPDATE friends SET num_of_friends = num_of_friends - 1 WHERE num_of_friends>0 AND friend_id in($id,$friendid)";
		$result=mysqli_query($conn,$query);
		if(!$result)
		{
			echo "<p>Fail to update table</p>";	
		}
	}
}










$countquery="SELECT * FROM myfriends WHERE friend_id1 LIKE '$id' OR friend_id2 LIKE '$id'";
$countresult=mysqli_query($conn,$countquery); 
$nofriend=0;
if($countresult)
{
	$numcount = mysqli_num_rows($countresult);

	if($numcount > 0) 
	{
		$nofriend += $numcount;
		mysqli_free_result($countresult);
		
	}
}

$_SESSION["nofriends"]=$nofriend;

?>
<!doctype html>
<html lang='en'>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="Description" content="Assignment 2: Friend List"/>
		<meta name="Keywords" content="Web,programming,assignment" />
		<link rel="stylesheet" href="style.css"/>
		<title>My Friend System||Friend List</title>
		
	</head>

	<body>
		<header>
			<?php include ("functions/headerlogin.inc");?>
		</header>

		<main>
			<div id="intro">
				<h1><?php echo $Pname;?>'s Friends List Page</h1>
				<h2>Total number of friends: <?php echo $nofriend;?></h2>
				<div class="table">
				<?php
				$query= "SELECT friend_id,profilename 
				FROM friends WHERE friend_id IN (SELECT friend_id2 FROM myfriends WHERE friend_id1='$id') OR friend_id IN (SELECT friend_id1 FROM myfriends WHERE friend_id2='$id') ORDER BY friend_id";

				
				$result = mysqli_query($conn, $query);

				if(!$result)
				{
				echo "<p>Something is wrong with ", $query, "</p>";
				}
				else
				{			
					while ($row = mysqli_fetch_assoc($result))
					{
						echo "<form action='friendlist.php' method='post'>";
						echo "<table>\n";
						echo "<tr>";
						echo"<td>{$row["profilename"]}<input type='hidden' name='friendid' value='{$row["friend_id"]}'></td>\n";
						echo"<td><button type='submit' name='unfriend'>Unfriend</button></td>\n";
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