<?php

$db = mysqli_connect('localhost','root','','travel');

$username = $_POST["auser"];
$password = $_POST["apass"];
// $d = date("Y-m-d h:i:sa");
$i=0;
$usern = "";
$passd = "";

// $que="INSERT INTO `login` (`auser`,`apass`,`adate_time`) VALUES ('$username','$password','$d')";
if(isset($_POST['submit']))
{
	$sql="SELECT auser, apass FROM `adminlog` WHERE auser='$username' and apass='$password'";
    $result2 = mysqli_query($db, $sql);
	if($result2)
	 {
		while($rows = mysqli_fetch_assoc($result2) and $i==0)
		{

			$usern = $rows['auser'];
			$passd = $rows['apass'];
			$i= $i+1;
		}
		if ($usern==$username and $passd==$password) 
		{
			?>
			<script>
				alert("Login successfully");
				window.location='admin.php';
			</script>
			<?php

			// $result = mysqli_query($db, $que);
			// header("location:mainPage.html");
		}
		else{
			?>
			<script>
				alert("Invalid username or password");
				window.location='adminindex.html';
			</script>
			<?php
		}
	}
}

?>
