<?php
	/**
	*
	*/
	class cindex_peminjam extends CI_Controller
	{

		function index()
		{
      $this->load->view('header');
			$this->load->view('index_peminjam');
      $this->load->view('footer');
		}
	}
?>
