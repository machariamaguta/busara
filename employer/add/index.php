<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Job</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="../../css/page.css">
	<script src="../../js/page.js"></script>
	<link rel="stylesheet" href="../../pickadate/lib/themes/default.css" id="theme_base">
	<link rel="stylesheet" href="../../pickadate/lib/themes/default.date.css" id="theme_date">
	<link rel="stylesheet" href="../../pickadate/lib/themes/default.time.css" id="theme_time">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="../../pickadate/lib/picker.js"></script>
	<script src="../../pickadate/lib/picker.date.js"></script>
	<script src="../../pickadate/lib/picker.time.js"></script>
</head>
<body>
	<section class="hero">
		<nav class="nav">
			<nav class="nav-left"><a href="../" class="nav-item"><i class="material-icons">arrow_back</i></a></nav>
		</nav>
		<section class="hero-body">
			<div class="container">
				<h1 class="title">Advertise Job Opening</h1>
				<form action="" class="form" method="POST">
					<input type="text" name="title" id="title" class="input" placeholder="Job Title" required>
					<input type="number" name="salary" id="salary"  class="input" placeholder="Salary" required>
					<input type="text"  name="deadline" id="deadline" class="input datepicker" placeholder="Application Deadline" onclick="tarehe();" required>
					<textarea class="textarea" name="description" id="description"  placeholder="Job Description" required></textarea>
					<textarea class="textarea" name="requirements" id="requirements"  placeholder="Job Requirements" required></textarea>
					<button class="button is-primary" name="add">Add</button>
				</form>
			</div>
		</section>
	</section>

<?php

if(isset($_POST['add']))
{
	include("../../connect.php");
	extract($_POST);
	$deadline=date('Y-m-d',strtotime($deadline));
	$sql="INSERT INTO jobs(title,salary,deadline,description,requirements)VALUES('$title','$salary','$deadline','$description','$requirements')";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		echo "<div class='container'><div class='notification is-primary'>Success</div></div>";
	}
	else
	{
		echo"<div class='container'><div class='notification is-danger'>Whoops!</div></div>";
	}

}
