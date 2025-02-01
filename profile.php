<?php
session_start();
include('junk.php');
if(empty($_SESSION["user"]))
  {
	header('location:index.html');
  }
  else
  {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="" type="" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js">
    <link rel="" type="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>Profile</title>
</head>
<body>
<div class="main">
        <ul>
          <ul class="list">
            <li class="logo"><a href="project.html"><img src="Roundphoto.PNG" alt="Logo" style="width:36px;height:36px"></a></li>
            <div class="search">
            <div class="search">
	            <form method="POST" action="info.php">
	              <input type="text" name="search_p" placeholder="Search.." size="50">
	          
	              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
	            </form>
          	</div>
          </ul>
          <ul class="list2">
            <li><a href="mainPage.html">Home</a></li>
            <li><a id="long" href="destination.html">Destination</a></li>
            <li><a href="gallery.html">Gallery</a></li>
			      <li><a href="feednew.php">Feedback</a></li>
            <li class="active-menu"><a href="profile.php">Profile</a></li>
			     <li><a href="index.html">Logout</a></li>
          </ul>
        </ul>
    </div>
    <?php
		   $userid=$_SESSION["user"];
		   $try=mysqli_query($db,"select * from customer where id='$userid'");
           $cnt=1;
		   while ($row=mysqli_fetch_array($try))
		   	{ 
		   ?>         
    <div class="container">
        <div class="imgcontainer">
        <img src="user.png" alt="">
        </div>
        <div class="paracontainer">
            <p><?php echo $row['fname'];?></p>
            <p><?php echo $row['email'];?></p>
            <p><?php echo $row['city'];?></p>
            <p><?php echo $row['phone'];?></p>
        </div>
        <div class="btncontainer">
            <a href="mainpage.html"><button>BACK</button></a>
        </div>
    </div>
    <?php
            }
      ?>
</body>
</html>
<?php
  }
  ?>