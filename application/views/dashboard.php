
<?php  $this->load->view('main_views/head'); ?>

    <script>
    setTimeout(function() {
        $('.hide-it').hide('fast');
    },3000);
</script>


<!-- Page Content -->
<div class="container">

	<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Wallpaper Gallery</h1>
	<div class="bg-success">

		<?php if ($this->session->flashdata('upload_success')): ?>
			<h6 class='hide-it'><?php echo $this->session->flashdata('upload_success') ?></h6>
		<?php endif;?>
	</div>

	<hr class="mt-2 mb-5">

	<div class="row text-center text-lg-left">

		<?php foreach ($all_images as $images): ?>
			<div class="col-lg-3 col-md-4 col-6">
				<a href="<?php echo base_url();?>uploads/<?php echo $images->file_name ?> " class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="<?php echo base_url();?>uploads/<?php echo $images->file_name ?> " alt="memes images">
				</a>
			</div>

		<?php  endforeach; ?>

	</div>

</div>


<?php $this->load->view('main_views/footer'); ?>
