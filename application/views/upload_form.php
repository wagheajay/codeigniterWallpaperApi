<html>
<head>
	<title>Upload Form</title>
</head>
<body>

<script>
    setTimeout(function() {
        $('.hide-error').hide('fast');
    },5000);
</script>


<div class="container mt-5 ">

	<div class="row justify-content-md-center ">
		<div class="form-group col-md-4 bg-light border border-success">

			<div class="hide-error center text-center bg-danger text-white">
				<?php if ($this->session->flashdata('choose_category_error')) ?>
				<?php echo $this->session->flashdata('choose_category_error') ?>
			</div>

			<h5 class="text-danger mt-3"><?php echo $error; ?></h5>
			<?php echo form_open_multipart('dashboard/upload'); ?>

			<input type="file" name="userfile"/>
			<br/><br/>


			<label class="text-primary">Select Categoy For Image</label>

			<select class="form-control" name="category_choosed">
				<option value ="" selected>choose category...</option>

				<?php foreach ($category as $category_list): ?>

					<option value="<?php echo $category_list->category_id ?>" ><?php echo $category_list->category_name ?></option>

				<?php endforeach; ?>
			</select>

			<input type="submit" value="upload" class="btn btn-outline-primary mx-auto d-block mt-3 mb-3"/>

			</form>
		</div>
	</div>


</div>


</body>
</html>
