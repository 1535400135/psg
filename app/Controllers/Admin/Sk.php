<?php namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\admin\ModelSK;

class Sk extends BaseController
{
	public function __construct()
	{
		$this->ModelSK= new ModelSK;
	}

	public function sma()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'sk',
			'menu' => 'SKSMA',
			'title' => 'SK - SMA',
			'data'	=> $this->ModelSK->getSMA(),
			'isi' => 'admin/fsk_sma',
		];
		echo view('admin/layout/v_wrap', $data);
	}

	public function smk()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'sk',
			'menu' => 'SKSMK',
			'title' => 'SK - SMK',
			'data'	=> $this->ModelSK->getSMK(),
			'isi' => 'admin/fsk_smk',
		];
		echo view('admin/layout/v_wrap', $data);
	}

	public function ma()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'sk',
			'menu' => 'SKMA',
			'title' => 'SK - MA',
			'data'	=> $this->ModelSK->getMA(),
			'isi' => 'admin/fsk_smk',
		];
		echo view('admin/layout/v_wrap', $data);
	}

	public function slb()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'sk',
			'menu' => 'SKSLB',
			'title' => 'SK - SLB',
			'data'	=> $this->ModelSK->getSLB(),
			'isi' => 'admin/fsk_smk',
		];
		echo view('admin/layout/v_wrap', $data);
	}


}