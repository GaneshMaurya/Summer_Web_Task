<?php
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'siam_users');
    $query="select * from users";
    $result=mysqli_query($con,$query);
?>

<!doctype HTML>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <head>
        <title>User Profile</title>
    </head>

    <style>
    body{
        background-color: #4c051f;
    }
    .container#first{
            background-color: rgb(53, 54, 56);
            border: 4px solid black;
            border-radius: 25px;
            width: 30%;
        }
    .container#second{
            border: 4px solid black;
            border-radius: 25px;
            background-color: #cdd2d8;
    }
    </style>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-fill">
            <a class="navbar-brand" href="#" style="color:black"><b>SIAM-VIT</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Cards_page.html">Team</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Users<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Change_password.html">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sign_in_page.html">Logout</a>
                </li>
              </ul>
            </div>
    </nav>
    <br>

    <div class="container" id="first">
            <center><h1 style="color:white"><b>View Users</b></h1></center>
    </div>
        <br>
        <br>
        
        <div class="container">
            <table align="center" border="1px" style="width:800px; line-height:60px;" bgcolor="#cdd2d8">
            <t>
                <th><center>Photo</center></th>
                <th><center>Name</center></th>
                <th><center>Team</center></th>
                <th><center>Field</center></th>
                <th><center>Email ID</center></th>
                <th><center>Mobile No.</center></th>
            </t>
                <?php
                    while($rows=mysqli_fetch_assoc($result))
                    {
                ?>

                <tr>
                    <td><center><img src="<?php echo $rows['photo'];?>" style="width:50px;height:50px;border:1px solid black;float:left"></center></td>
                    <td><center><?php echo $rows['name'];?></center></td>
                    <td><center><?php echo $rows['team'];?></center></td>
                    <td><center><?php echo $rows['field'];?></center></td>
                    <td><center><?php echo $rows['email'];?></center></td>
                    <td><center><?php echo $rows['mobile'];?></center></td>
                </tr>

                <?php
                    }
                ?>
                </table>
        </div>

    </body>
</html>