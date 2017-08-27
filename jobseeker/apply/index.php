<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apply</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="../../css/page.css">
	<script src="../../js/form.js"></script>
</head>
<body>
	<section class="hero">
		<nav class="nav">
			<nav class="nav-left"><a href="../" class="nav-item"><i class="material-icons">arrow_back</i></a></nav>
		</nav>
		<section class="hero-body">
			<div class="container">
				<h1 class="title">Job Application</h1>
				<form action="" class="form" id="form" method="POST">
					<input type="text" class="input" name="name" id="name" placeholder="Name" required>
					<input type="email" class="input" name="email" id="email" placeholder="Email" required>
					<input type="number" class="input" name="phone" id="phone" placeholder="Phone" required>
					<div class="select">
						<select name="educationlevel" id="educationlevel">
							<option value="0">Select Education Level</option>
							<option value="5">PhD</option>
							<option value="4">Masters</option>
							<option value="3">Undergrad</option>
							<option value="2">Diploma</option>
							<option value="1">Certificate</option>
						</select>
					</div>
					<div class="select">
						<select name="yearsofexperience" id="yearsofexperience">
							<option value="0">Select your work experience</option>
							<option value="1">1 year</option>
							<option value="2">2 years</option>
							<option value="3">3 years</option>
							<option value="4">4 years</option>
							<option value="5">5 years</option>
							<option value="6">6 years</option>
							<option value="7">7 years</option>
							<option value="8">8 years</option>
							<option value="9">9 years</option>
							<option value="10">10 years</option>
							<option value="11">Over 10 years</option>
						</select>
					</div>
					<textarea name="coverletter" id="coverletter" cols="30" rows="10" class="textarea" placeholder="Enter your cover letter here"></textarea>
					<br>
					<button class="button is-primary" name="submit" id="submit">Submit</button>
				</form>
			</div>
		</section>
	</section>
<?php
if(isset($_POST['submit']))
{
	include("../../connect.php");
	$job_id=$_REQUEST['j_id'];
	extract($_POST);
	$phone="254".substr($phone, -9);
	$sql="INSERT INTO applications(job_id,name,email,phone,educationlevel,yearsofexperience,coverletter)VALUES
	('$job_id','$name','$email','$phone','$educationlevel','$yearsofexperience','$coverletter')";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		echo"<div class='container'><div class='notification is-primary'>Success</div></div>";
	}
	else
	{
		echo"<div class='container'><div class='notification is-danger'>Whoops!</div></div>";
	}
}