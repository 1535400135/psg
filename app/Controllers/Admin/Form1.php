<?php namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\admin\ModelForm1;

class Form1 extends BaseController
{
	public function __construct()
	{
		$this->ModelForm1 = new ModelForm1;
	}
	public function sma()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'form1',
			'menu' => 'Data SMA',
			'title' => 'Formulir 1 - SMA',
			'data' 	=> $this->ModelForm1->getSMA(),
			'isi' => 'admin/fa_sma',
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
			'submenu' => 'form1',
			'menu' => 'Data SMK',
			'title' => 'Formulir 1 - SMK',
			'data' 	=> $this->ModelForm1->getSMK(),
			'isi' => 'admin/fa_smk',
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
			'submenu' => 'form1',
			'menu' => 'Data MA',
			'title' => 'Formulir 1 - MA',
			'data' 	=> $this->ModelForm1->getMA(),
			'isi' => 'admin/fa_ma',
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
			'submenu' => 'form1',
			'menu' => 'Data SLB',
			'title' => 'Formulir 1 - SLB',
			'data' 	=> $this->ModelForm1->getSLB(),
			'isi' => 'admin/fa_slb',
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
		$this->ModelForm1->updateData($id, $data);
		return redirect()->to(base_url('admin/form1/sma'));
	}

}