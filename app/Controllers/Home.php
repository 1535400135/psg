<?php namespace App\Controllers;

use App\Models\Home_model;
use \Mpdf\Mpdf;

class Home extends BaseController
{	

	public function __construct()
	{
		$this->homeModel = new Home_model;
		helper('text');
		helper('number');
	}


	public function index()
	{
		
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
			session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
			return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$data=[
			'submenu' => '',
			'menu' => 'Home',
			'title' => 'Dashboard',
			'nilai' => $this->homeModel->cekData($nis),
			'berita' => $this->homeModel->cekBerita(),
			'isi' => 'index',
		];
		echo view('layout/v_wrap', $data);
	}

	public function cetak()
	{
		$mpdf = new Mpdf(['mode' => 'utf-8']);
		$data=[
			'data'	=> $this
		];
		$mpdf->WriteHTML(view('cetak_form2', $data));
		return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
	}

	public function cetakSMAMA()
	{
		$mpdf = new Mpdf(['mode' => 'utf-8']);
		$mpdf->WriteHTML(view('report_form1_sma'));
		return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
	}

	public function cetakSMK()
	{
		$mpdf = new Mpdf(['mode' => 'utf-8']);
		$mpdf->WriteHTML(view('report_form1_smk'));
		return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
	}

}