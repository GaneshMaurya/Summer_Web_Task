<?php   
    $connect=new mysqli('localhost','root','','siam_users');
    $url="Main_page.html";
	if($connect->connect_error){
		echo("connection failed");
	}else
	{
		$username= $_POST['InputUsername'];
		$password= $_POST['InputPassword'];
		$sql="select * from users where username='$username' and password='$password'";
		$result=$connect->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
				header("Location:$url");
			}	
        }
        else
            header("Location:Login_unsuccessful.html");
	}
?>