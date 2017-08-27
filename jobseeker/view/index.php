<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Job</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Raleway" rel="stylesheet">
</head>
<body>
<section class="hero is-light is-fullheight">
	<nav class="nav">
		<nav class="nav-left"><a href="../" class="nav-item"><i class="material-icons">arrow_back</i></a></nav>
		<nav class="nav-right"><a href="" class='nav-item' id="apply"><span class="button is-dark">APPLY</span></a></nav>
	</nav>
	<section class="hero-body">
		<div class="container">
			<?php
			include("../../connect.php");
			$id=$_REQUEST['j_id'];
			$sql="SELECT * FROM jobs WHERE id=$id";
			$result=mysqli_query($link,$sql);
			
			while($info=mysqli_fetch_array($result))
			{
				$deadline=date('d M, Y',strtotime($info['deadline']));
				$description=nl2br($info['description']);
				$requirements=nl2br($info['requirements']);
				echo"
				<div class='container'>
					<h1 class='title is-1'>$info[title]</h1>
					<h3 class='subtitle is-4'>@Busara</h3>
					<h5 class='subtitle is-6'>Monthly Pay $info[salary]</h5>
					<h5 class='subtitle is-6'>Application Deadline $deadline</h5>
					<h5 class='subtitle is-6'>Job Description</h5>
					<p class='p'>
						$description
					</p>
					<br>
					<h5 class='subtitle is-6'>Job Requirements</h5>
					<p class='p'>
						$requirements
					</p>
				</div>";
			}
			echo "<script>document.getElementById('apply').href='../apply/?j_id=$id';</script>";
			?>
		</div>
	</section>
	</section>	
