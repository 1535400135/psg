<?php namespace App\Controllers\su;
use CodeIgniter\Controller;
use App\Models\admin\ModelHome;

class Home extends BaseController
{
	public function __construct()
	{
		$this->ModelHome = new ModelHome;
	}

	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => '',			
			'menu' => 'Dashboard',
			'title' => 'Dashboard',
			'getsekolah' => $this->ModelHome->getSekolah(),
			'getf1' => $this->ModelHome->getForm1(),
			'getf2' => $this->ModelHome->getForm2(),
			'getsk' => $this->ModelHome->getSK(),
			'isi' => 'su/index',
		];
		echo view('su/layout/v_wrap', $data);
	}

	

}