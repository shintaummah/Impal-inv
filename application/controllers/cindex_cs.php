<?php
	/**
	*
	*/
	class cindex_cs extends CI_Controller
	{

		function index()
		{
      $this->load->view('header');
			$this->load->view('index_cs');
      $this->load->view('footer');
		}
	}
?>
