<?php $this->load->view('main_views/head'); ?>


<!-- Page Content -->
<div class="container">

	<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 text-primary"><?php echo ucfirst($this->wallpaper_model->category_name($this->uri->segment(3))) ?>
		Category</h1>


	<hr class="mt-2 mb-5">

	<div class="row text-center text-lg-left">
		<?php if (sizeof($wallpapers) == 0): ?>

		     <div class="text-center bg-light">
				 <h4 class="text-danger">No Wallpaper found for this category</h4>
			 </div>


		<?php else: ?>

			<?php foreach ($wallpapers as $wallpaper): ?>
				<div class="col-lg-3 col-md-4 col-6">
					<a href="<?php echo base_url(); ?>uploads/<?php echo $wallpaper->file_name ?> "
					   class="d-block mb-4 h-100">
						<img class="img-fluid img-thumbnail"
							 src="<?php echo base_url(); ?>uploads/<?php echo $wallpaper->file_name ?> "
							 alt="memes images">
					</a>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>


	</div>

</div>


<?php $this->load->view('main_views/footer'); ?>
