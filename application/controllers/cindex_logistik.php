<?php
	/**
	*
	*/
	class cindex_logistik extends CI_Controller
	{

		function index()
		{
      $this->load->view('header3');
			$this->load->view('index_peminjam');
      $this->load->view('footer');
		}
	}
?>
