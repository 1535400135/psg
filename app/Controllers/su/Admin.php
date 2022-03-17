<?php namespace App\Controllers\su;
use CodeIgniter\Controller;
use App\Models\su\Admin_model;

class Admin extends BaseController
{
	public function __construct()
	{
		$this->Admin_model = new Admin_model;
		helper('form');
		helper('url');
	}
	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'Pengguna',
			'menu' => 'admin',
			'title' => 'Pengguna Administrator',
			'data'	=> $this->Admin_model->getAdmin(),
			'isi' => 'su/admins',
		];
		echo view('su/layout/v_wrap', $data);
	}

	public function save()
	{
		$data=[
			'nis'		=> $this->request->getPost('nis'),
			'pass'	=> $this->request->getPost('password'),
			'hak_akses'	=> 'Administrator',
		];
		$this->Admin_model->simpan($data);
		session()->setFlashdata('success', 'Data Administrator Berhasil Disimpan');
		return redirect()->to(base_url('su/admin'));
	}


}