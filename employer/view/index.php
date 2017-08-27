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
	<script src="../../js/form.js"></script>
</head>
<body>
	<section class="hero">
		<nav class="nav">
			<nav class="nav-left"><a href="../" class="nav-item"><i class="material-icons">arrow_back</i></a></nav>
		</nav>
		<section class="hero-body">
			<div class="container">
				<h1 class="title">Filter Job Applicants</h1>
				<form action="" class="form" id="form" method="POST">
					<div class="select">
						<select name="educationlevel" id="educationlevel">
							<option value="0">By Education Level</option>
							<option value="5">PhD</option>
							<option value="4">Masters</option>
							<option value="3">Undergrad</option>
							<option value="2">Diploma</option>
							<option value="1">Certificate</option>
						</select>
					</div>
					<div class="select">
						<select name="yearsofexperience" id="yearsofexperience">
							<option value="0">By years of work experience</option>
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
					<br>
					<button class="button is-primary" name="filter">Filter</button>
				</form><br>
				<?php
				if(isset($_POST['filter']))
				{
					$job_id=$_REQUEST['j_id'];
					extract($_POST);
					if($educationlevel==0 AND $yearsofexperience==0)
					{
						echo"<div class='container'><div class='notification is-danger'>Whoops!Please filter by either years of work experience or education level</div></div>";
					}
					if($educationlevel==0 AND $yearsofexperience!=0)
					{
						$sql="SELECT * FROM applications WHERE job_id=$job_id AND yearsofexperience>=$yearsofexperience";
						query($sql);
					}
					if($educationlevel!=0 AND $yearsofexperience==0)
					{
						$sql="SELECT * FROM applications WHERE job_id=$job_id AND educationlevel>=$educationlevel";
						query($sql);
					}
					if($educationlevel!=0 AND $yearsofexperience!=0)
					{
						$sql="SELECT * FROM applications WHERE job_id=$job_id AND yearsofexperience>=$yearsofexperience AND educationlevel>=$educationlevel";
						query($sql);
					}
				}
				function query($sql)
				{
					include("../../connect.php");
					$result=mysqli_query($link,$sql);
					$count=mysqli_num_rows($result);
					if($count==0)
					{
						echo"<div class='container'><div class='notification'>No applications have been made for this post</div></div>";
					}
					while($info=mysqli_fetch_assoc($result))
					{
						$coverletter=nl2br($info['coverletter']);
						switch($info['educationlevel'])
						{
							case 1:
							$educationlevel="Certificate";
							break;
							case 2:
							$educationlevel="Diploma";
							break;
							case 3:
							$educationlevel="Undergrad";
							break;
							case 4:
							$educationlevel="Masters";
							break;
							case 5:
							$educationlevel="PhD";
							break;
							default:
							break;
						}
						echo "
						<div class='card'>
							<div class='card-content'>
								<div class='media'>
									<div class='media-content'>
										<p class='title is-4'>$info[name]</p>
										<p class='title is-6'><b>Education Level</b>&emsp;$educationlevel</p>
										<p class='title is-6'><b>Work Experience</b>&emsp;$info[yearsofexperience] years</p>
									</div>
								</div>
								<section class='content'><b>About Me</b>&emsp;$coverletter</section>
							</div>
							<div class='card-footer'>
								<a href='mailto:$info[email]' class='card-footer-item'>Invite for interview</a>
							</div>
						</div><br>";
					}
				}
				?>
			</div>
		</section>
	</section>
