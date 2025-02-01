<?php

$con = mysqli_connect('localhost', 'root', '', 'travel');

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedbk'];

if (isset($_POST['submit']))
 {
	        
				$que="INSERT INTO `feedback` (`id`,`name`,`email`,`feedbk`) VALUES (0,'$name','$email','$feedback')";
                $result = mysqli_query($con, $que);
	           ?>
			<script>
				alert("Feedback submited successfully");
				window.location='mainpage.html';
			</script>
			<?php	
 }
else
{
		 ?>
			<script>
				alert("Not submited successfully");
				window.location='feednew.php';
			</script>
			<?php

}
?>