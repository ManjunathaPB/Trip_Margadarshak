<!DOCTYPE html>
<html>
<head>
  <title> Sign Up Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/register1.css">
</head>

<body>

<?php 
        //  session_start(); 
         include("junk.php");
         if(isset($_POST['submit']))
         {
            $firstname=$_POST['fname'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $city=$_POST['city'];
            $phone=$_POST['phone'];
            $confirmpassword = $_POST['confirmpassword'];
            $pattern = '/^[a-zA-Z0-9._%+-]+@gmail\.com$/';
            if(preg_match($pattern,$email))
            {
                if(!preg_match('/^[0-9]*$/',$password))
                {
                // echo "<div class='message'>
                // <p>Enter Password with only digit</p>
                // </div> <br>";
                // echo "<a href='save1.php'><button class='btnr'>register again</button>"; 
                ?>
			             <script>
			            	alert("Enter Password with only digit");
				            window.location='save1.php';
			          </script>
		          	<?php 
                }
                else
                {
                    //password length only 6
                     if(strlen($password)<7)
                     {
                        //confirm password
                        if($password !==$confirmpassword)
                        {
                          // echo "<div class='message'>
                          // <p>Password do not match</p>
                          // </div> <br>";
                          // echo "<a href='save1.php'><button class='btnr'>register again</button>";
                          ?>
                          <script>
                           alert("Password Do Not Match");
                           window.location='save1.php';
                       </script>
                       <?php 

                        }
                        else
                        {
                         //verifying the unique email

                       $verify_query = mysqli_query($db,"SELECT `email` FROM `customer` WHERE email='$email'");

                            if(mysqli_num_rows($verify_query) !=0 )
                            {
                            // echo "<div class='message'>
                            // <p>This email is used, Try another One Please!</p>
                            // </div> <br>";
                            // echo "<a href='javascript:self.history.back()'><button class='btnr'>Go Back</button>";
                            ?>
                            <script>
                             alert("This email is used,try another one please");
                             window.location='save1.php';
                         </script>
                         <?php 
                            }
                            else
                            {

                                    $sql=mysqli_query($db,"INSERT INTO `customer`(`id`,`fname`,`password`,`email`,`city`,`phone`) VALUES (0,'$firstname','$password','$email','$city','$phone')")or die("Erroe Occured") ;
                                  //   echo "<div class='message'>
                                  //   <p>Registration Successfully!</p>
                                  //   </div> <br>";
                                  //  echo "<a href='index.html'><button class='btnr'>Login Now</button>";
                                  ?>
                                  <script>
                                   alert("Registration Successfully");
                                   window.location='index.html';
                               </script>
                               <?php 
                             }
                        }//end of confirn else
                    }//end of password length if
                    else
                    {  
                  //    echo "<div class='message'>
                  //  <p>Enter Password With Only 6 Digit</p>
                  //   </div> <br>";
                  //   echo "<a href='save1.php'><button class='btnr'>register again</button>";  
                  ?>
                  <script>
                   alert("Enter Password with only 6 digit");
                   window.location='save1.php';
               </script>
               <?php 
                    }
                }
            }
            else
            {
                // echo "<div class='message'>
                // <p>Incorrect Gmail</p>
                //  </div> <br>";
                //  echo "<a href='save1.php'><button class='btnr'>register again</button>";  
                ?>
                <script>
                 alert("Incorrect Gmail Formate");
                 window.location='save1.php';
             </script>
             <?php 
            } 
            
        }
        else
        {
			?>
			<form  action ="" method="POST">

			<div class="login-box">
		
			  <h1> Sign Up </h1>
		
			  <div class="textbox">
				<input type="text" placeholder="Username" id="fname" name="fname" value="" required>  
			  </div>
		
			  <div class="textbox">
				<input type="password" placeholder="Password" id="password" name="password" value="" maxlength="6" title="only digits " required>
			  </div>

			  <div class="textbox">
				<input type="password" placeholder="confirmpassword" id="confirmpassword" name="confirmpassword" value="" title="same as password" maxlength="6" required>
			  </div>
		
			  <div class="textbox">
				<input type="text" placeholder="Email" id="email" name="email" value="" title="provide correct gmail formate" required >
			  </div>
		
			  <div class="textbox">
				<input type="text" placeholder="City" id="city" name="city" value="" required>
			  </div>
		
			  <div class="textbox">
				<input type="text" placeholder="Phone" id="phone" name="phone" value="" required maxlength="10" pattern="[6-9]{1}[0-9]{9}" title=" start only from 6 to 9" >
			  </div>
		
			  <input class="btn" type="submit" name="submit" value="Sign Up"> <br> <br>
		
			   <a href="index.html"> Already have an account ? <span class="tern"    >Login</span> </a> 
			   <?php } ?>

			</div>

		  </form>
       </body>
		</html>
		
         
        
