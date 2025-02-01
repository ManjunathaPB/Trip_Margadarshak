<?php
session_start();
include_once('infop.php');
if(isset($_POST['ckm'])) {
	$que="SELECT * FROM `information` WHERE pname='chikmagalur'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `information` WHERE pname='Kerala'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['mysore'])) {
	$que="SELECT * FROM `information` WHERE pname='Mysore'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['NorthCanera'])) {
	$que="SELECT * FROM `information` WHERE pname='Dakshina kannada'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['peak'])) {
	$que="SELECT * FROM `information` WHERE pname='kolukkumalai'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['hampi'])) {
	$que="SELECT * FROM `information` WHERE pname='Hampi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['UK'])) {
	$que="SELECT * FROM `information` WHERE pname='Uttara kannada'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['westernghats'])) {
	$que="SELECT * FROM `information` WHERE pname='Maharastra'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['WOF'])) {
	$que="SELECT * FROM `information` WHERE pname='Jogfalls'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['jogfalls'])) {
	$que="SELECT * FROM `information` WHERE pname='Jogfalls'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/infoma.css">
	<title>Information</title>
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
	<div class="hedder">
		<h1>Place Information</h1>
	</div>
	<div class="container">
			<div class="box1">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
				<img src="<?php echo $rows['pi_main']; ?>" alt="Main Image" style="width: auto;height: 302px;">
			</div>
			<div class="description">
			  <?php $_SESSION["desti"]=$rows["pname"]; ?> 
				<h1 class="name"><?php echo $rows['pname']; ?><h1>
					<!-- set the pname to the session variable-->
					<?php
					$desc = explode(';', $rows['pdescription']);
					//echo $desc;
						?>
				<p style="text-align: justify;"><?php echo $rows['pdescription']; ?></p>
				<p style="color:red; top: -10px;" >Package: Rs <?php echo $rows['package']; ?> </p>
				<?php $_SESSION["pack"]=$rows["package"]; ?> 
			<a href="bookingindex.php" style="float: right; margin-right: 43%;">Book Tour</a>
			<a class="back" href="destination.html" style="float: right; margin-right: 47%;">Back</a>
			</div>
		    	<?php
					}
				?>
	</div>
</body>
</html>