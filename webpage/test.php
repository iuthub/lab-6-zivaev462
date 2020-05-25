
<?php 



if (preg_match('/\b[a-zA-Z\D]{2,}\b/', $_POST['name'])){
	echo 'Name is correct <br>';
}
if (preg_match('/\b[a-zA-z.,_-]{2,}\@[a-zA-z,_-]{2,}\.[a-zA-z,_-]{2,}\b/', $_POST['email'])){
	echo 'Email is correct <br>';
}
if (preg_match('/\b.{5,}\b/', $_POST['username'])){
	echo 'Username is correct <br>';
}
if (preg_match('/\b[.\S]{8,}\b/', $_POST['password'])){
	echo 'Password is correct <br>';
}

if ($_POST['password'] == $_POST['confirmpassword']){
	echo 'Passwords MAtch!';
}else{
	echo 'Password does not match!';
}

if (preg_match('/\b[0-9]{2}\.[0-9]{2}\.[0-9]{4}\b/', $_POST['dateofbirth'])){
	echo 'Date of birth is correct <br>';
}
if (preg_match('/\b(\bMale\b|\bFemale\b)\b/', $_POST['gender'])){
	echo 'Gender is correct <br>';
}
if (preg_match('/\b(\bSingle\b|\bMarried\b|\bDivorced\b|\bWidowed\b)\b/', $_POST['maritalstatus'])){
	echo 'Marital status is correct <br>';
}
if (preg_match('/\b\d{6}\b/', $_POST['postalcode'])){
	echo 'Postal code is correct <br>';
}
if (preg_match('/\b\d{2}\s\d{7}\b/', $_POST['homephone'])){
	echo 'Home phone is correct <br>';
}
if (preg_match('/\b\d{2}\s\d{7}\b/', $_POST['mobilephone'])){
	echo 'Mobile phone is correct <br>';
}
if (preg_match('/\b\d{4}\s\d{4}\s\d{4}\s\d{4}\b/', $_POST['creditcardnumber'])){
	echo 'Credit card number is correct <br>';
}
if (preg_match('/\b[0-9]{2}\.[0-9]{2}\.[0-9]{4}\b /', $_POST['creditcardexpirydate'])){
	echo 'Expire date is correct <br>';
}
if (preg_match('/\bUZS\s\d{3},\d{3}\.\d{2}\b/', $_POST['monthlysalary'])){
	echo 'Salary is correct <br>';
}
if (preg_match('/\bhttp:\/\/\w{2,}\.\w{1,}\b/', $_POST['websiteurl'])){
	echo 'Url is correct <br>';
}
if (preg_match('/\b[0-4]\.[0-5]\b/', $_POST['overallgpa'])){
	echo 'Overallgpa is correct <br>';
}

 ?>