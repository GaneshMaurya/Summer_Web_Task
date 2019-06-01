<?php
    $connect=new mysqli('localhost','root','','siam_users');
	if($connect->connect_error){
		echo("connection failed");
	}else
	{
		$username= $_POST['Username'];
		$oldpassword= $_POST['OldPassword'];
		$newpassword= $_POST['NewPassword'];
		$reenternewpassword= $_POST['ReenterNewPassword'];
        if($newpassword==$reenternewpassword){
        $sql="update users set password='$newpassword' where password='$oldpassword' and username='$username'";
        }
        else{
            echo "Check your password once again";
        }
		$result=$connect->query($sql);
		if(!$result){
			echo "Cannot Enter";
		}
		else{
			header('Location:Login_page.html');
		}
    }
    
?>