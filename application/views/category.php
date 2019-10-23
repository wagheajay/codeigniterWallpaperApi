<?php $this->load->view('main_views/head'); ?>

<div class="row justify-content-md-center ">

	<div class="col-md-5 mt-3">


		<?php foreach ($category as $category_list): ?>

			<ul class="list-group">
				<li class="list-group-item d-flex justify-content-between align-items-center">

					<a href="<?php echo base_url();?>dashboard/wallpaper_display/<?php echo $category_list->category_id ?>"><?php echo $category_list->category_name ?></a>
					<span
						class="badge badge-primary badge-pill"><?php echo $this->wallpaper_model->wallpaper_category_badge_count($category_list->category_name) ?></span>
				</li>
			</ul>


		<?php endforeach; ?>

	</div>


</div>


<?php $this->load->view('main_views/footer'); ?>
