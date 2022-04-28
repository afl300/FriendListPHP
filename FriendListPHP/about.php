<!doctype html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="Description" content="Assignment 2: About page"/>
		<meta name="Keywords" content="Web,programming,assignment" />
		<link rel="stylesheet" href="style.css"/>
		<title>My Friend System||About Page</title>
	</head>

	<body>
		<header>
			<?php include ("functions/header.inc");?>
		</header>
		
		<main>
			<div id="about">
			<h1>About Page</h1>
			<p>Name: CC<br/>
			Student ID: 103076376
			<br/>Email: 
				<a href="mailto:103076376@student.vic.edu.au">103076376@student.swin.edu.au</a>
			</p>
			<h2>
				<?php echo "Q&A";?>
			</h2>
			<ul class = "inside">
				<li>
					<h4>What tasks have you completed?</h4>
				</li>
				<li>
				<ul>
					<li>Task 1: Home Page : Completed</li>
					<li>Task 2: Sign Up Page : Completed</li>
					<li>Task 3: Log in : Completed</li>
					<li>Task 4: List Friends : Completed</li>
					<li>Task 5: Add friend page : Completed</li>
					<li>Task 6: Log Out Page : Complete</li>
					<li>Task 7: About page : Complete</li>
					<li>Task 8: Enable pagination in Add Friend Page : Not completed</li>
					<li>Task 9: Enable mutural friend count in Add Friend Page : Not Completed</li>
					
				</ul>
				</li>
				<li>
					<h4>What special features have you done, or attempted, inc reating the site that we should know about?</h4>
				</li>
				<li>
				<ul>
					<li>N/A</li>
				</ul>
				</li>
				<li>
					<h4>What sites have you used to assist in this assignment?</h4>
				</li>
				<li>
				<ul>
					<!--This is used as a template bellow for now-->
					<li>To help me to connect two different tables together easier when it was looking who was already friends or not friends.</li>
					<li>
					<ul>
					<li><a href="https://www.mysqltutorial.org/mysql-subquery/">https://www.mysqltutorial.org/mysql-subquery/</a></li>
					</ul>
					</li>
					<li>Had some issue validating the tables to make it clean and nice and make it work in the validator but here is some ideas i borrowed to use</li>
					<li>
					<ul>
					<li><a href="https://stackoverflow.com/questions/5967564/form-inside-a-table">https://stackoverflow.com/questions/5967564/form-inside-a-table</a></li>
					<li><a href="http://jkorpela.fi/forms/tables.html">http://jkorpela.fi/forms/tables.html</a></li>
					</ul>
					</li>
					<li>To assist me on to see if the email or item exist.</li>
					<li>
					<ul>
					<li><a href="https://stackoverflow.com/questions/28985107/checking-if-user-email-exists-on-mysql-with-php">https://stackoverflow.com/questions/28985107/checking-if-user-email-exists-on-mysql-with-php</a></li>
					</ul>
					</li>
					<li>It is used to set time zones so it wouldnt be using other countires date or time.</li>
					<li>
					<ul>
					<li><a href="https://stackoverflow.com/questions/470617/how-do-i-get-the-current-date-and-time-in-php">https://stackoverflow.com/questions/470617/how-do-i-get-the-current-date-and-time-in-php</a></li>
					</ul>
					</li>
				</ul>
				</li>
				<li><h4>List of links to the following pages</h4></li>
				<li>
				<ul>
					<li><p><a href="friendlist.php">Friend List</a></p></li>
					<li><p><a href="friendadd.php">Add Friends</a></p></li>
					<li><p><a href="index.php">Home</a></p></li>
				</ul>
					</li>
			</ul>
			
			<h4>What discussion point did you participated on the unit's discussion board for Assignmenet 2?</h4>
			<img src="images/discuss.png" alt="A Discussion on CSS" width= "800">
			<p>
				<a href='index.php'>Return to Home Page</a>
			</p>
		</div>

		</main>
	</body>
</html>