<?php namespace App\Controllers\Admin;
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
		$getTahun = $this->ModelHome->getTahun();
		$getTw = $this->ModelHome->getTw();
		$tahun = $getTahun->tahun;
		$tw=$getTw->tw;
		$data=[
			'submenu' => '',			
			'menu' => 'Dashboard',
			'title' => 'Dashboard',
			'getsekolah' => $this->ModelHome->getSekolah(),
			'getf1' => $this->ModelHome->getForm1($tahun,$tw)->id,
			'getf2' => $this->ModelHome->getForm2($tahun,$tw)->id,
			'getdana' => $this->ModelHome->getDanaFull($tahun,$tw),
			'oki' => $this->ModelHome->getDana(1602,$tahun,$tw),
			'me' => $this->ModelHome->getDana(1603,$tahun,$tw),
			'lht' => $this->ModelHome->getDana(1604,$tahun,$tw),
			'mr' => $this->ModelHome->getDana(1605,$tahun,$tw),
			'mb' => $this->ModelHome->getDana(1606,$tahun,$tw),
			'bny' => $this->ModelHome->getDana(1607,$tahun,$tw),
			'okut' => $this->ModelHome->getDana(1608,$tahun,$tw),
			'okus' => $this->ModelHome->getDana(1609,$tahun,$tw),
			'oi' => $this->ModelHome->getDana(1610,$tahun,$tw),
			'el' => $this->ModelHome->getDana(1611,$tahun,$tw),
			'pali' => $this->ModelHome->getDana(1612,$tahun,$tw),
			'mru' => $this->ModelHome->getDana(1613,$tahun,$tw),
			'plg' => $this->ModelHome->getDana(1671,$tahun,$tw),
			'pga' => $this->ModelHome->getDana(1672,$tahun,$tw),
			'll' => $this->ModelHome->getDana(1673,$tahun,$tw),
			'pra' => $this->ModelHome->getDana(1674,$tahun,$tw),
			'isi' => 'admin/index',
		];
		$data['oku'] = $this->ModelHome->getDana(1601,$tahun,$tw);
		echo view('admin/layout/v_wrap', $data);
	}

	

}