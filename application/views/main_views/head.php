<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--	offline bootstrap 4.3.1-->
<!--	<link rel="stylesheet" href="--><?php //base_url(); ?><!--assets/wall_css/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--assets/wall_css/animate.min.css">-->

	<style>

		.navbar-custom {
			color: #ff358a;
			/*background-color: #CC3333;*/
		}
	</style>
</head>
<body>

<!--setting links active logic-->
<?php  $last_segment = $this->uri->segment(2);
$active_menu = "active"; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" style="color: #58ff0d" href="<?php echo base_url();?>dashboard/">Wallpaper App </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav ">
			<li class="nav-item <?php if ($last_segment == '') echo $active_menu?> ">
				<a class="nav-link" href="<?php echo base_url();?>dashboard/">Dashboard <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item <?php if ($last_segment == 'category') echo $active_menu?> ">
				<a class="nav-link" href="<?php echo base_url();?>dashboard/category/">Category</a>
			</li>
			<li class="nav-item <?php if ($last_segment == 'upload') echo $active_menu ?> ">
				<a class="nav-link" href="<?php echo base_url();?>dashboard/upload/">Upload</a>
			</li>
		</ul>
	</div>
</nav>


