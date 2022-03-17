<?php namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\admin\ModelForm2;

class Form2 extends BaseController
{
	public function __construct()
	{
		$this->ModelForm2 = new ModelForm2;
	}

	public function sma()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'form2',
			'menu' => 'FFSMA',
			'title' => 'Formulir 2 - SMA',
			'data'	=> $this->ModelForm2->getSMA(),
			'isi' => 'admin/ff_sma',
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
			'submenu' => 'form2',
			'menu' => 'FFSMK',
			'title' => 'Formulir 2 - SMK',
			'data'	=> $this->ModelForm2->getSMK(),
			'isi' => 'admin/ff_smk',
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
			'submenu' => 'form2',
			'menu' => 'FFMA',
			'title' => 'Formulir 2 - MA',
			'data'	=> $this->ModelForm2->getMA(),
			'isi' => 'admin/ff_ma',
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
			'submenu' => 'form2',
			'menu' => 'FFSLB',
			'title' => 'Formulir 2 - SLB',
			'data'	=> $this->ModelForm2->getSLB(),
			'isi' => 'admin/ff_slb',
		];
		echo view('admin/layout/v_wrap', $data);
	}

	public function validasi($id)
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data['valid']=2;
		$this->ModelForm2->updateData($id, $data);
		redirect()->to('admin/form2/sma');
	}

}