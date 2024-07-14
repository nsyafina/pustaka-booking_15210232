<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cek_login();
	}
	public function index()
	{
		$data['judul'] = '<i class="fas fa-fw fa-tachometer-alt"></i> Dashboard';
		$data['user'] = $this->modeluser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['anggota'] = $this->modeluser->getUserLimit()->result_array();
		$data['buku'] = $this->modelbuku->getBuku()->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer');
	}
}	