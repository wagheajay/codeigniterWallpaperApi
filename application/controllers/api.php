<?php
/**
 *  Created By Ajay Waghe on 10/20/2019 Oct,2019
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller
{

	private function api_key()
	{
		$key = $this->api_model->get_api_key();
		return $key;
	}

	//get all flowers data
	public function get_flowers()
	{

		if (isset($_GET['api_key'])) {

			$access_key_received = $_GET['api_key'];

			if ($access_key_received == $this->api_key()) {

				$result = $this->wallpaper_model->get_flower();

				if (empty($result)) {
					echo " No Data Found";
					$this->output->set_status_header(404);
					return;
				}
				//traditional syntax for show json array =   array('flowers' => $result)
				echo json_encode(array('flowers' => $result), JSON_UNESCAPED_UNICODE);
				$this->output->set_status_header(200);
			} elseif ($access_key_received != $this->api_key()) {

				echo json_encode(array('error' => "The API Key is Invalid!"), JSON_UNESCAPED_UNICODE);
				$this->output->set_status_header(401);

			}
		} else {
			echo json_encode(array('error' => "The API Key is Required!"), JSON_UNESCAPED_UNICODE);
			$this->output->set_status_header(401);
		}
	}

	//get flower by id
	//      api/get_flower_by_id/
	public function get_flower_by_id()
	{
		if (isset($_GET['id'])) {
			$id = ($_GET['id']);

			if (empty($id)) {
				echo json_encode('id is null, please provide id parameter');
				return;
			}
		}

		if (isset($_GET['api_key'])) {

			$access_key_received = $_GET['api_key'];

			if ($access_key_received == $this->api_key()) {

				$result = $this->wallpaper_model->get_flower_by_id($id);

				if (empty($result)) {
					echo " No Record Found,Try Other id";
					$this->output->set_status_header(404);
					return;
				}

				echo json_encode(array('flowers' => $result), JSON_UNESCAPED_UNICODE);
				$this->output->set_status_header(200);
			} elseif ($access_key_received != $this->api_key()) {

				echo json_encode(array('error' => "The API Key is Invalid!"), JSON_UNESCAPED_UNICODE);
				$this->output->set_status_header(401);

			}
		} else {
			echo json_encode(array('error' => "The API Key is Required!"), JSON_UNESCAPED_UNICODE);
			$this->output->set_status_header(401);
		}
	}

	public function get_all_category()
	{
		$result = $this->wallpaper_model->get_category();


		if ($result) {
			echo json_encode(array('category' => $result), JSON_UNESCAPED_UNICODE);
		}


	}

	public function get_wallpaper_by_category()
	{
		$result = $this->wallpaper_model->wallpaper_by_category();

		if ($result) {

			echo json_encode(array('wallpaper with catgeory' => $result), JSON_UNESCAPED_UNICODE);
		}


	}

	public function get_wallpaper_list_category($category_id)
	{
		$result = $this->wallpaper_model->wallpaper_list_category($category_id);

		if ($result) {

			echo json_encode(array('wallpapers_category_list' => $result), JSON_UNESCAPED_UNICODE);
		}
	}

}
