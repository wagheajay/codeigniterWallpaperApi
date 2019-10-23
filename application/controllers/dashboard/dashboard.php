<?php
/**
 *  Created By Ajay Waghe on 10/22/2019 Oct,2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


	public function index()
	{
		$data['all_images'] = $this->wallpaper_model->get_all_images();
		$this->load->view('dashboard', $data);

	}

	public function category()
	{
		$data['category'] = $this->wallpaper_model->get_category();
		//$data['category_size'] = $this->wallpaper_model->wallpaper_by_category_size();

		$this->load->view('category', $data);

	}

	public function upload()
	{

		$data['category'] = $this->wallpaper_model->get_category();
		$this->load->view('upload', $data);


		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']             = 100;
		//$config['max_width']            = 1024;
		//$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		} else {

			$file_name = $this->upload->data('file_name');
			$file_type = $this->upload->data('file_type');
			$category_id = $this->input->post('category_choosed');
			$image_data = array(

				'file_name' => $file_name,
				'file_type' => $file_type,
				'category_id' => $category_id
			);


			if ($category_id !== "") {

				$this->wallpaper_model->insert_image($image_data);
				// $data = array('upload_data' => $this->upload->data());

				// $this->load->view('upload_success', $data);

				$this->session->set_flashdata('upload_success', 'Image Upload Completed successfully !');
				//$this->session->set_tempdata('success', 'Image Upload Completed successfully !', 5);

				redirect('dashboard', 'refresh');
				die();
			} else {

				$this->session->set_flashdata('choose_category_error', 'Plase select category for image!');
				//$this->session->set_tempdata('success', 'Image Upload Completed successfully !', 5);

				redirect('dashboard/upload', 'refresh');

			}


		}
	}

	public function display_category_wallpaper($wallpaper_id)
	{

		$data['wallpapers'] = $this->wallpaper_model->wallpaper_show_by_category($wallpaper_id);


		$this->load->view('wallpaper_display', $data);


	}


	public function test($id)
	{
		$result = $this->wallpaper_model->category_name($id);
		echo json_encode(array($result),JSON_UNESCAPED_UNICODE);

	}


}
