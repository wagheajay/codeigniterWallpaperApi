<?php
/**
 *  Created By Ajay Waghe on 10/20/2019 Oct,2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Model extends CI_Model
{

	public function get_api_key()
	{

//		$query = $this->db->query(
//			"
//                Select *
//				FROM api_table
//        		WHERE (api_id = 1) AND (api_status = 1)
//
//        		"
//		);

		$query = $this->db->get('api_table');

		if ($query->num_rows() > 0) {

			$api_key = $query->result()[0]->api_key;

			return $api_key;
		}
	}


}
