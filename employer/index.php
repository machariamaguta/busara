<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Jobs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<section class="hero is-light is-fullheight">
		<nav class="nav">
			<nav class="nav-left"><a href="../" class="nav-item"><i class="material-icons">arrow_back</i></a></nav>
			<nav class="nav-right"><a href="add/" class="nav-item"><span class="button is-dark">Add Job</span></a></nav>
		</nav>
		<section class="hero-body">
			<div class="container">
				<h1 class="title">All Job Vacancies</h1>
			</div>
		</section>
		<section class="hero-body">
			<div class="container">
				<div class="columns is-multiline is-centered">
					<?php
					include("../connect.php");
					$sql="SELECT * FROM jobs";
					$results=mysqli_query($link,$sql);
					while($info=mysqli_fetch_assoc($results))
					{
						$deadline=date('d M, Y', strtotime($info['deadline']));
						echo"
						<a href='view/?j_id=$info[id]'>
							<div class='column'>
								<div class='card'>
									<div class='card-content'>
										<div class='media'>
											<div class='media-content'>
												<p class='title is-4'>$info[title]</p>
												<p class='subtitle is-6'>@Busara</p>
											</div>
										</div>
										<section class='content'>
											Pay KES $info[salary]<br/><br/>
											Application Deadline $deadline
										</section>
									</div>
								</div>
							</div>
						</a>";
					}
					?>
				</div>
			</div>
		</section>
	</section>

</body>
</html>