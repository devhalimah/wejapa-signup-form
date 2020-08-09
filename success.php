<html>
   <head>
      <title>SIGN UP FORM | Submitted Successfully !!!</title>
	  
	  <!-- FAVICON ICON -->
  <link rel="icon" type="image/png" sizes="144x144" href="./images/logo.png">
   </head>
   <body style="background-color: <?php echo $_POST['color']; ?>; text-align: center; color: grey; margin: 4% auto;">
   </body>
</html>

<?php

    echo "<h1>Thanks for creating an account with us".' '.$_POST['firstname'].' '."</h1>";
	
	echo "<h2>Please Confirm the following details and proceed to login.</h2><h3>(In case there are any issues you can always reach out to us at <a href='#' style='color:inherit;'>defaultmail@wejapa.com)</a></h3>";
	
	echo "<h2><p><b>Full Name:".' '."<i>".$_POST['firstname'].' '.$_POST['lastname']."</i></b></p>";
	echo "<p><b>E-mail:".' '."<i>".$_POST['email']."</i></b></p>";
	echo "<p><b>Date of Birth:".' '."<i>".$_POST['birthday']."</i></b></p>";
	echo "<p><b>Favorite Color:".' '."<i>".$_POST['color']."</i></b></p>";
	echo "<p><b>Gender:".' '."<i>".$_POST['gender']."</i></b></p>";
echo "<p><b>Department:".' '."<i>".$_POST['department']."</i></b></p></h2>";

?>

<div style="margin:0 auto; background-color:grey; border-radius:5px; color:<?php echo $_POST['color']; ?>; cursor:pointer; width:10%; padding:10px;">LOGIN</div>

