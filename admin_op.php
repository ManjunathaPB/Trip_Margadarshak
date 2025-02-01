<?php

$con=mysqli_connect('localhost','root','','travel');



if(isset($_POST['de-submit-c']))
{
	$id=$_POST['id'];
	$firstname=$_POST['fname'];

	$sql="DELETE FROM `customer` WHERE id=$id and fname='$firstname'";
	mysqli_query($con,$sql);
	$affrow = mysqli_affected_rows($con);
	if($affrow>0)
	{
		?>
			<script>
				alert("deleted ");
				window.location='admin.php';
			</script>
			<?php

	}
	else{
		?>
			<script>
				alert("not deleted successfully");
				window.location='admin.php';
			</script>
			<?php
	}
}

if(isset($_POST['in-submit-a']))
{
	// $aid=$_POST['aid'];
	$afname=$_POST['afname'];
	$aemail=$_POST['aemail'];
	$aphone=$_POST['aphone'];
	$acity=$_POST['acity'];

	$sql1="INSERT INTO `travel_agent`(`afname`,`aemail`,`aphone`,`acity`) VALUES ('$afname','$aemail','$aphone','$acity')";
	mysqli_query($con,$sql1);
	$affrow = mysqli_affected_rows($con);
	if($affrow>0)
	{
		?>
			<script>
				alert("Inserted successfully");
				window.location='admin.php';
			</script>
			<?php

	}
	else{
		?>
			<script>
				alert("not inserted successfully");
				window.location='admin.php';
			</script>
			<?php
	}
}

if(isset($_POST['de-submit-a']))
{
	$aid=$_POST['aid'];
	$afname=$_POST['afname'];

	$sql2="DELETE FROM `travel_agent` WHERE aid=$aid and afname='$afname'";
	mysqli_query($con,$sql2);
	$affrow = mysqli_affected_rows($con);
	if($affrow>0)
	{
		?>
			<script>
				alert("deleted ");
				window.location='admin.php';
			</script>
			<?php

	}
	else{
		?>
			<script>
				alert("not deleted successfully");
				window.location='admin.php';
			</script>
			<?php
	}
}

if(isset($_POST['ins-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pcity=$_POST['pcity'];

	$sql3="INSERT INTO `places`(`pid`,`pname`,`pcity`) VALUES ($pid,'$pname','$pcity')";
	$result = mysqli_query($con,$sql3);
	header('location:admin.php');
}

if(isset($_POST['de-submit-p']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];

	$sql4="DELETE FROM `places` WHERE pid=$pid and pname='$pname'";
	$result = mysqli_query($con,$sql4);
	header('location:admin.php');
}

if(isset($_POST['ins-submit-h']))
{
	// $hid=$_POST['hid'];
	$hname=$_POST['hname'];
	$hphone=$_POST['hphone'];
	$hcity=$_POST['hcity'];

	$sql5="INSERT INTO `hotels`(`hname`,`hphone`,`hcity`) VALUES ('$hname','$hphone','$hcity')";
	mysqli_query($con,$sql5);
	$affrow = mysqli_affected_rows($con);
	if($affrow>0)
	{
		?>
			<script>
				alert("Inserted successfully ");
				window.location='admin.php';
			</script>
			<?php

	}
	else{
		?>
			<script>
				alert("not inserted successfully");
				window.location='admin.php';
			</script>
			<?php
	}
}

if(isset($_POST['de-submit-h']))
{
	$hid=$_POST['hid'];
	$hname=$_POST['hname'];

	$sql6="DELETE FROM `hotels` WHERE hid=$hid and hname='$hname'";
	mysqli_query($con,$sql6);
	$affrow = mysqli_affected_rows($con);
	if($affrow>0)
	{
		?>
			<script>
				alert("deleted ");
				window.location='admin.php';
			</script>
			<?php

	}
	else{
		?>
			<script>
				alert("not deleted successfully");
				window.location='admin.php';
			</script>
			<?php
	}

}
if(isset($_POST['add_pd']))
{
	$pname=$_POST['pname'];
	$pdescription=$_POST['pdescription'];
	$pi_main=$_POST['pi_main'];
    $package=$_POST['package'];
	$sql6="INSERT INTO `information`(`pname`,`pdescription`,`pi_main`,`package`) VALUES ('$pname','$pdescription','$pi_main','$package')";
	mysqli_query($con,$sql6);
	$affrow = mysqli_affected_rows($con);
	if($affrow>0)
	{
		?>
			<script>
				alert("Inserted successfully");
				window.location='admin.php';
			</script>
			<?php

	}
	else{
		?>
			<script>
				alert("not deleted successfully");
				window.location='admin.php';
			</script>
			<?php
	}
}

if(isset($_POST['de-submit-x']))
{
	$boid=$_POST['bookid'];
	$boname=$_POST['bname'];

	$sql9="DELETE FROM `booking` WHERE id=$boid and ffirst='$boname'";
	mysqli_query($con,$sql9);
	$affrow = mysqli_affected_rows($con);
	if($affrow>0)
	{
		?>
			<script>
				alert("deleted ");
				window.location='admin.php';
			</script>
			<?php

	}
	else{
		?>
			<script>
				alert("not deleted successfully");
				window.location='admin.php';
			</script>
			<?php
	}}
?>