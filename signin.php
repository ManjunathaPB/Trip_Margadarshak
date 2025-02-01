<?php
session_start();
$db = mysqli_connect('localhost','root','','travel');
if(isset($_POST['submit']))
{
	$semail=$_POST["semail"];
    $passwords=$_POST["pass"];
	$sql="SELECT * FROM customer WHERE email='$semail'";
    $result2 = mysqli_query($db, $sql);
	$user=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($user)
	 {
		if($passwords==$user["password"])
		{
            $_SESSION["user"]=$user["id"];
			?>
             <script>
              alert("Login Successfully");
              window.location='mainpage.html';
             </script>
          <?php 
		  die();	
 	    }
       else
		{
			?>
			<script>
				//alert("Invalid username or password");
				alert("Password does not match");
				window.location='index.html';  
			</script>
			<?php
		}
	 }
	 else{
		?>
			<script>
				//alert("Invalid username or password");
				alert("Email does not match");
				window.location='index.html';
			</script>
			<?php
	     }
     }

?>
