<?php
session_start();
include('junk.php');
if(empty($_SESSION["user"]))
  {
	header('location:index.html');
  }
  else
  {
	if(isset($_POST['submit']))
    {
		
		$userid=$_SESSION["user"];
		$firstname=$_POST['ffirst'];
        $email=$_POST['femail'];
        $city=$_POST['city'];
        $bphoneno=$_POST['bookphone'];
        $destination=$_POST['fdesti'];

		$sql="INSERT INTO `booking`(`id`,`ffirst`,`femail`,`city`,`nophone`,`fdesti`) VALUES (0,'$firstname','$email','$city','$bphoneno','$destination')";
		$result = mysqli_query($db,$sql);
         if($result)
		 {
			$useri=$_SESSION["desti"];
			$userc=$_SESSION["pack"];

                    date_default_timezone_set('Asia/Kolkata');
	                $bdate= date("d-m-Y H:i:s");
				    $subject = 'Booking Status';
                    $message = "Your Booking has been confirmed

Booking Date and Time: $bdate 

Place: $useri

Cost: $userc.00 Rs.

For more details: 
                manjunathapbmanju7259@gmail.com
                shekarpabbathi15@gmail.com


";
                    $sender = 'From: 23mcad13@kristujayanti.com';

                    if (mail($email, $subject, $message, $sender)) 
                    {
						 ?> 
				        <script>
					        alert("Booking successfully.Check Your Gmail For More Details");
				 	         window.location='mainpage.html';
				         </script>
			    <?php
                    } else 
                    {
						?> 
				        <script>
					        alert("Failed while sendin email");
				 	         window.location='bookingindex.php';
				         </script>
			    <?php
					}
                    
			
          }
		 else 
		 {
			?> 
			<script>
				alert("Booking unsuccessfully.");
				  window.location='bookingindex.php';
			 </script>
	       <?php
		 }
	}
		 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="css/booking.css">
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
            <li class="active-menu"><a id="long" href="destination.html">Destination</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="feednew.php">Feedback</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="index.html">Logout</a></li>
			</ul>
		</ul>
	</div>
	
	<h1>Tour Booking</h1>
	<div class="container">
	    <?php
		   $userid=$_SESSION["user"];
		   $useri=$_SESSION["desti"];
		   $try=mysqli_query($db,"select * from customer where id='$userid'");
           $cnt=1;
		   while ($row=mysqli_fetch_array($try))
		   	{ 
		   ?> 
			<form role="form" method="post" action="bookingindex.php">
			<div class="textbox">
				<input type="text" placeholder="Name" name="ffirst" value="<?php echo $row['fname'];?>"  required="true" readonly>  
			</div>
			<div class="textbox">
				<input type="text" placeholder="Email" name="femail" value="<?php echo $row['email'];?>" required readonly>
		    </div>

			<div class="textbox">
				<input type="text" placeholder="City" name="city" value="<?php echo $row['city'];?>" required readonly>
			</div>

			<div class="textbox">
				<input type="text" placeholder="+91 Phone Number" name="bookphone" value="<?php echo $row['phone'];?>" maxlength="10" pattern="[6-9]{1}[0-9]{9}" title="Only Digits with start number 6 to 9" readonly>
			</div>

			<div class="textbox">
				<input type="text" placeholder="Destination" name="fdesti"  value="<?php echo $useri?>"required readonly>
			</div>
			<div class="btn">
				<input name="submit" value="Submit" type="submit">
			</div>
		</form>
		<?php } ?> 

	</div>

</body>
</html>
 <?php } ?> 
