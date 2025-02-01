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
<html>
<head>
	<meta charset="utf-8">
	<title>Feedback Form</title>
	<link rel="stylesheet" type="text/css" href="css/feedback.css">
</head>
<body>
	<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="project.html"><img src="Roundphoto.PNG" alt="Logo" style="width:36px;height:36px"></a></li>
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
	        <li class="active-menu"><a href="feednew.php">Feedback</a></li>
			<li><a href="profile.php">Profile</a></li>
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
       <div class="feedback">
		<h1>Feedback Form</h1>
		<form name='feedbackForm' method="POST" action="feed.php">
			<div class="form-group">
			    <label>Your Name</label>
			    <input type="text" name="name" class="form-control" value="<?php echo $row['fname'];?>" reqired readonly>
			</div>
			<div class="form-group">
			    <label>Your Email</label>
			    <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" required readonly>
			</div>
			<div class="form-group text1">
			    <label>Feedback:</label>
			    <textarea class="inputTextarea" name="feedbk" rows="4" class="form-control" ng-model='feedback' placeholder="Please write your Feedback here" required></textarea>
			</div>
			<div class="wrapper">
				<button type="submit" class="btn btn-primary" ng-click="performValidation()" name='submit'>Submit Feedback</button>
			</div>
		</form>
	   </div>
       <?php
            }
      ?>
</body>
</html>
<?php
  }
  ?>