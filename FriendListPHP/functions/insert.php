<?php		

//these is the data that it would input
$friendinsert1="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('user@gmail.com','007','NicePerson','2012-9-22','6')";
	
$myfriendinsert1="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('1','2')";
	
$insertfriendsresult1=mysqli_query($conn,$friendinsert1);
	
$myfriendinsertresult1=mysqli_query($conn,$myfriendinsert1);
	
	
//next data insert
$friendinsert2="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('poke@gmail.com','pocket96','pokemon','2012-9-29','6')";
	
$myfriendinsert2="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('2','3')";
	
$insertfriendsresult2=mysqli_query($conn,$friendinsert2);	
$myfriendinsertresult2=mysqli_query($conn,$myfriendinsert2);
	
//next data insert
$friendinsert3="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('delta@gmail.com','seawiz01','delsierwiz','2014-9-21','6')";
	
$myfriendinsert3="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('3','4')";
		
$myfriendinsert4="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('1','3')";
		
$insertfriendsresult3=mysqli_query($conn,$friendinsert3);
$myfriendinsertresult3=mysqli_query($conn,$myfriendinsert3);
$myfriendinsertresult4=mysqli_query($conn,$myfriendinsert4);
		
//next data insert
$friendinsert4="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('mario@gmail.com','mario64','supermario','2015-9-16','6')";
	
$myfriendinsert5="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('4','5')";
		
$myfriendinsert6="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('1','4')";
		
$myfriendinsert7="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('2','4')";
		
$insertfriendsresult4=mysqli_query($conn,$friendinsert4);
$myfriendinsertresult5=mysqli_query($conn,$myfriendinsert5);
$myfriendinsertresult6=mysqli_query($conn,$myfriendinsert6);
$myfriendinsertresult7=mysqli_query($conn,$myfriendinsert7);

//next data insert
$friendinsert5="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('sonic@gmail.com','sonic92','sonicthehedgehog','2017-10-16','7')";
	
$myfriendinsert8="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('5','6')";
		
$myfriendinsert9="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('1','5')";
		
$myfriendinsert10="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('2','5')";

$myfriendinsert11="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('3','5')";
		
$insertfriendsresult5=mysqli_query($conn,$friendinsert5);
$myfriendinsertresult8=mysqli_query($conn,$myfriendinsert8);
$myfriendinsertresult9=mysqli_query($conn,$myfriendinsert9);
$myfriendinsertresult10=mysqli_query($conn,$myfriendinsert10);
$myfriendinsertresult11=mysqli_query($conn,$myfriendinsert11);

//next data insert
$friendinsert6="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('pika@gmail.com','pokemon96','Pikachu','2016-7-15','7')";
	
$myfriendinsert12="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('6','7')";
		
$myfriendinsert13="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('1','6')";
		
$myfriendinsert14="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('2','6')";

$myfriendinsert15="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('3','6')";

$myfriendinsert16="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('4','6')";
		
$insertfriendsresult6=mysqli_query($conn,$friendinsert6);
$myfriendinsertresult12=mysqli_query($conn,$myfriendinsert12);
$myfriendinsertresult13=mysqli_query($conn,$myfriendinsert13);
$myfriendinsertresult14=mysqli_query($conn,$myfriendinsert14);
$myfriendinsertresult15=mysqli_query($conn,$myfriendinsert15);
$myfriendinsertresult16=mysqli_query($conn,$myfriendinsert16);

//next data insert
$friendinsert7="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('link@gmail.com','link86','adultlink','2016-9-21','4')";
	
$myfriendinsert17="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('1','7')";
		
$myfriendinsert18="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('4','7')";
		
$insertfriendsresult7=mysqli_query($conn,$friendinsert7);
$myfriendinsertresult17=mysqli_query($conn,$myfriendinsert17);
$myfriendinsertresult18=mysqli_query($conn,$myfriendinsert18);

//next data insert
$friendinsert8="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('charizard@gmail.com','char96','charzard','2016-2-01','2')";
	
$myfriendinsert19="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('7','8')";
		
$myfriendinsert20="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('5','8')";
		
$insertfriendsresult8=mysqli_query($conn,$friendinsert8);
$myfriendinsertresult19=mysqli_query($conn,$myfriendinsert19);
$myfriendinsertresult20=mysqli_query($conn,$myfriendinsert20);

//next data insert
$friendinsert9="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('zealda@gmail.com','zealda86','zealda','2016-5-29','3')";
	
$myfriendinsert21="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('6','9')";
		
$myfriendinsert22="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('3','9')";

$myfriendinsert23="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('9','10')";
		
$insertfriendsresult9=mysqli_query($conn,$friendinsert9);
$myfriendinsertresult21=mysqli_query($conn,$myfriendinsert21);
$myfriendinsertresult22=mysqli_query($conn,$myfriendinsert22);
$myfriendinsertresult23=mysqli_query($conn,$myfriendinsert23);

//next data insert
$friendinsert10="INSERT INTO friends
(friend_email,password,profilename,date_started,num_of_friends)
VALUE
('greninja@gmail.com','gren13','greninja','2016-9-21','3')";
	
$myfriendinsert24="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('5','10')";
		
$myfriendinsert25="INSERT INTO myfriends
(friend_id1,friend_id2)
VALUE
('2','10')";
		
$insertfriendsresult10=mysqli_query($conn,$friendinsert10);
$myfriendinsertresult24=mysqli_query($conn,$myfriendinsert24);
$myfriendinsertresult25=mysqli_query($conn,$myfriendinsert25);
?>
	