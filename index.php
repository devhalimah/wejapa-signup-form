
<?php
//TO PREVENT CODE/CHARACTERS IN INPUT BOXES AT DEFAULT
if (!isset($firstname)){
	$firstname = '';
}
if (!isset($lastname)){
	$lastname = '';
}
if (!isset($email)){
	$email = '';
}
if (!isset($birthday)){
	$birthday = '';
}
if (!isset($color)){
	$color = '';
}
if (!isset($gender)){
	$gender = '';
}
if (!isset($department)){
	$department = '';
}
if (!isset($password)){
	$password = '';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
	
	<!-- FAVICON ICON -->
  <link rel="icon" type="image/png" sizes="144x144" href="./images/logo.png">
  
  <title> Wejapa | SIGN UP FORM</title>
  
  <!-- EXTERNAL CSS -->
  <link rel="stylesheet" href="./css/index.css">
  
  </head>
  <body>
    <form action="form_process.php" autocomplete="off" method="POST">
	   <fieldset>
    <legend><h1>sign up now !!!</h1></legend>
	  <p>First Name: </p>
	  <input type="text" name="firstname" value="<?php echo htmlspecialchars($firstname);?>">
	  <?php if (isset($firstnameErr)){ ?>
		    <p class="error"><?php echo $firstnameErr ?></p>
		<?php } ?>
	   
	  <p>Last Name: </p>
	  <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname);?>">
	  <?php if (isset($lastnameErr)){ ?>
		    <p class="error"><?php echo $lastnameErr ?></p>
		<?php } ?>
	  
	  <p>E-mail: </p>
	  <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
	  <?php if (isset($emailErr)){ ?>
		    <p class="error"><?php echo $emailErr ?></p>
		<?php } ?>
	  
	  <p>Date of Birth (2 years and above): </p>
	  <input type="date" name="birthday" max="2018-12-31" value="<?php echo htmlspecialchars($birthday);?>">
	  <?php if (isset($birthdayErr)){ ?>
		    <p class="error"><?php echo $birthdayErr ?></p>
		<?php } ?><hr>
	  
	  <p>Select your favorite color: </p>
	  <input type="color" value="<?php echo htmlspecialchars($color);?>" name="color">
	  <?php if (isset($colorErr)){ ?>
		    <p class="error"><?php echo $colorErr ?></p>
		<?php } ?><hr>
	  
	  <p class="gender">Gender (select a gender): </p>
	  Male<input type="checkbox" name="gender" value="Male"> | 
	  Female<input type="checkbox" name="gender" value="Female">
	  </p>
	  <?php if (isset($genderErr)){ ?>
		    <p class="error"><?php echo $genderErr ?></p>
		<?php } ?><hr>
	  
	  <p class="department">Department: </p>
	  <select name="department">
	    <option value="none" selected> None </option>
		<option value="IT"> IT </option>
		<option value="HR"> HR </option>
		<option value="staff"> STAFF </option>
	  </select>
	  <?php if (isset($departmentErr)){ ?>
		    <p class="error"><?php echo $departmentErr ?></p>
		<?php } ?><hr>
	  
	  <p>Password: </p>
	  <input type="password" value="" name="password">
	    <?php if (isset($passwordErr)){ ?>
		    <p class="error"><?php echo $passwordErr ?></p>
		<?php } ?>
	  
	  <section>
	    <h4> Password must contain: </h4>
		<ul style="list-style-type:none;">
		    <li>🔸 at least<b> 15 characters </b></li>
			<li><b>🔸 Uppercase Letters</b></li>
			<li><b>🔸 Lowercase Letters</b></li>
			<li><b>🔸 Numbers and</b></li>
			<li><b>🔸 Symbols. </b></li>
		</ul>
	  </section>
	  
	  <div>
	  <input type="submit" name="submit" value="CREATE ACCOUNT">
	  </div>
	  </fieldset>
	</form>
  </body>
</html>