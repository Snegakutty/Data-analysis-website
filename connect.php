<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$country=$_POST['country'];
	$subject=$_POST['subject'];

	$conn=new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection failed : '.$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into registration(firstname,lastname,country,subject)
		values(?,?,?,?)");
		$stmt->bind_param("ssss",$firstname,$lastname,$country,$subject);
		$stmt->execute();
		echo "Message sent successfully....";
		$stmt->close();
		$conn->close();
	}
?>