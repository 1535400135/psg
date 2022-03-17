<?php namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\admin\ModelLap;

class Lap extends BaseController
{
	function __construct()
	{
		$this->ModelLap = new ModelLap;
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
			'menu' => 'Laporan',
			'title' => 'Laporan',
			'data'	=> $this->ModelLap->getKab(),
			'isi' => 'admin/lap1',
		];
		echo view('admin/layout/v_wrap', $data);
	}

	//--------------------------------------------------------------------

}