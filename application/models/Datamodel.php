<?php
	/**
	*
	*/
	class Datamodel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function add()
		{
			$data['email'] = $this->input->post('email');
			/**
			email di bawah nama table di database 
			*/
			return $this->db->insert('email',$data);
		}
	}
?>
