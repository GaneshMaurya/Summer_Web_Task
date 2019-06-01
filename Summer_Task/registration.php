<?php
	$connect=new mysqli('localhost','root','','siam_users');
	if($connect->connect_error){
		echo("connection failed");
	}else
	{
		$name= $_POST['InputName'];
		$username= $_POST['InputUsername'];
		$password= $_POST['InputPassword'];
		$email= $_POST['InputEmail'];
		$mobile= $_POST['InputMobile'];
		$team= $_POST['Team'];
		$field= $_POST['SelectField'];
		$photo= $_POST['InputPhoto'];
		$sql="insert into users values('$name','$username','$password','$email','$mobile','$team','$field','$photo')";
		$result=$connect->query($sql);
		if(!$result){
			echo "cannot enter";
		}
		else{
			header('Location:Login_page.html');
		}
	}
?>