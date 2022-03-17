<?php namespace App\Controllers\su;
use CodeIgniter\Controller;
use App\Models\admin\ModelUser;

class User extends BaseController
{
	public function __construct()
	{
		$this->ModelUser = new ModelUser;
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
			'menu' => 'sekolah',
			'title' => 'Pengguna Sekolah',
			'data'	=> $this->ModelUser->getUser(),
			'kab'	=> $this->ModelUser->getKab(),
			'isi' => 'su/users',
		];
		echo view('su/layout/v_wrap', $data);
	}

	public function save()
	{
		$data=[
			'nis'		=> $this->request->getPost('nis'),
			'pass'	=> $this->request->getPost('password'),
			'hak_akses'	=> 'Sekolah',
		];
		$this->ModelUser->simpan($data);
		session()->setFlashdata('success', 'Data Sekolah Berhasil Disimpan');
		return redirect()->to(base_url('su/user'));
	}


}