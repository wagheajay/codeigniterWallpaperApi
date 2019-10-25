<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<?php if ($this->uri->segment(2) == ""):?>
	<title>Dashboard</title>
	<?php elseif ($this->uri->segment(2) == "category"):?>
	<title>Category</title>
	<?php elseif ($this->uri->segment(2) == "upload"):?>
	<title>Upload</title>
	<?php else:?>
	<title>Dashboard</title>
	<?php endif;?>

</head>
<body>
	<style>

		.navbar-custom {
			color: #ff358a;
			/*background-color: #CC3333;*/
		}
	</style>

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
