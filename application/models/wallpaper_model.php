<?php
/**
 *  Created By Ajay Waghe on 10/20/2019 Oct,2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Wallpaper_Model extends CI_Model
{

	public function get_flower()
	{

		$query = $this->db->get('flowers');
		return $query->result();
	}

	public function create_flower($data)
	{

		$query = $this->db->insert('flowers', $data);
		return $query;
	}

	public function get_flower_by_id($id)
	{

		$this->db->where('id', $id);
		$query = $this->db->get('flowers');
		return $query->row();


	}

	public function delete_flower_by_id($id)
	{

		$check_id_exist = $this->db->get_where('flowers', array('id' => $id));

		if ($check_id_exist->num_rows() > 0) {

			$this->db->where('id', $id);
			$query = $this->db->delete('flowers');
			return $query;
		} else {

			echo 'Not found';

		}

	}

	public function get_category()
	{
		$query = $this->db->get('category_table');

		return $query->result();


	}

	public function wallpaper_by_category()
	{

		//joining two table
		$this->db->select('flowers.flower_name ,flowers.flower_id,category_table.category_name,category_table.category_id')
			->from('flowers')
			->join('category_table', 'flowers.category_id = category_table.category_id');
		$result = $this->db->get();
		return $result->result();


	}

	public function wallpaper_list_category($category_id)
	{


		$this->db->where('category_id',$category_id);
		$result = $this->db->get('flowers');
		return $result->result();
	}


	public function get_all_images($limit,$offset)
	{

		 $query = $this->db->select()
		                   ->from('uploads_table')
			               ->order_by('id','DESC')
		                   ->limit($limit,$offset)
		                   ->get();

//		         $this->db->order_by('id','DESC');
//		$query = $this->db->get('uploads_table',$limit,$offset);
		return $query->result();
	}

	public function get_wallpapers_rows()
	{
		$query = $this->db->get('uploads_table');
		return $query->num_rows();


	}

	public function insert_image($image_data){

		$query = $this->db->insert('uploads_table',$image_data);
		return $query;
	}

	public function wallpaper_category_badge_count($match_word)
	{

		//joining two table
		$this->db->select('uploads_table.file_name ,category_table.category_name,category_table.category_id')
			->from('uploads_table')
			->join('category_table', 'uploads_table.category_id = category_table.category_id')
		   ->like('category_name', $match_word);
		$result = $this->db->count_all_results();
		return $result;


	}


	public function wallpaper_show_by_category($wallpaper_id)
	{

		$this->db->where('category_id',$wallpaper_id);
		$result = $this->db->get('uploads_table');
		return $result->result();


	}

	public function category_name($id)
	{
		$this->db->where('category_id',$id);
		$result = $this->db->get('category_table');
		return $result->row_array()['category_name'];
		
	}



}
