<?php

//ASSIGN VARIABLES (USE FILTER_INPUT TO PREVENT MALICIOUS CODE/INPUTS)
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$birthday = filter_input(INPUT_POST, 'birthday');
$color = filter_input(INPUT_POST, 'color');
$gender = filter_input(INPUT_POST, 'gender');
$department = filter_input(INPUT_POST, 'department');
$password = filter_input(INPUT_POST, 'password');

//VALIDATIONS
if(empty($firstname)){
	$firstnameErr = '*Please insert your first name';
}

if(empty($lastname)){
	$lastnameErr = '*Please insert your last name';
}

if(empty($email)){
	$emailErr = '*Please insert your email';
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$emailErr = '*Your email must have the "@" symbol and a valid extension after.';
}

if(empty($birthday)){
	$birthdayErr = '*Please select your birth date';
}

if(($color) == '#000000'){
	$colorErr = '*Please select your favorite color';
}

if(empty($gender)){
	$genderErr = '*Please select your gender';
}

if(($department) == 'none'){
	$departmentErr = '*Please select your department';
}

if(empty($password)){
	$passwordErr = '*Create a strong password';
}
elseif(strlen($password) < 15){
	$passwordErr = '*Your Password should contain a minimum of 15 letters';
}
elseif(ctype_upper($password) && ctype_lower($password)){
	$passwordErr = '*Your Password should contain uppercase and lowercase letters';
}
elseif(preg_match("/^[0-9]*$/", $password)){
	$passwordErr = '*Your password should contain numbers and symbols';
}

//FOR PAGE CONFIRMATION
if(empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($birthdayErr) && empty($colorErr) && empty($genderErr) && empty($departmentErr) && empty($passwordErr)){
	include ('success.php');
}
else{
include ('index.php');
}
?>