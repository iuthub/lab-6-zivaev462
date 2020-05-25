<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>

		<form method="POST" action="test.php">
			
			<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name" required="required">
			</dd>

			<dt>Email</dt>
			<dd>
				<input type="text" name="email" required="required">
			</dd>

			<dt>Username</dt>
			<dd>
				<input type="text" name="username" required="required">
			</dd>

			<dt>Password</dt>
			<dd>
				<input type="text" name="password" required="required">
			</dd>

			<dt>Confirm Password</dt>
			<dd>
				<input type="text" name="confirmpassword" required="required">
			</dd>

			<dt>Date of Birth</dt>
			<dd>
				<input type="text" name="dateofbirth">
			</dd>

			<dt>Gender</dt>
			<dd>
				<input type="text" name="gender">
			</dd>

			<dt>Marital Status</dt>
			<dd>
				<input type="text" name="maritalstatus">
			</dd>

			<dt>Postal Code</dt>
			<dd>
				<input type="text" name="postalcode" required="required">
			</dd>

			<dt>Home Phone</dt>
			<dd>
				<input type="text" name="homephone" required="required">
			</dd>

			<dt>Mobile Phone</dt>
			<dd>
				<input type="text" name="mobilephone" required="required">
			</dd>

			<dt>Credit Card Number</dt>
			<dd>
				<input type="text" name="creditcardnumber" required="required">
			</dd>

			<dt>Credit Card Expiry Date</dt>
			<dd>
				<input type="text" name="creditcardexpirydate" required="required">
			</dd>

			<dt>Monthly Salary</dt>
			<dd>
				<input type="text" name="monthlysalary" required="required">
			</dd>

			<dt>Web Site URL</dt>
			<dd>
				<input type="text" name="websiteurl" required="required">
			</dd>

			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="overallgpa" required="required">
			</dd>
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>
		
		<div>
			<input type="submit" value="register">
		</div>


		</form>
	
	</body>
</html>




