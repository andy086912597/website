<?php 
if(isset($_POST["Token"])){
	$Token = $_POST["Token"];
	$con = mysql_connect("localhost","root","123456");
	if (!$con)
 		 {
 			 die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("FCM", $con);
	
 
	$insertsql = "INSERT INTO users(Token) VALUES ('$Token') ON DUPLICATE KEY UPDATE Token = '$Token';";
	
	}
	if (!mysql_query($insertsql,$con))
		 {
			 die('Error: ' . mysql_error());
			}
	?>