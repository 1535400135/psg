<?php namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\admin\ModelLap;
use \Mpdf\Mpdf;

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
		$getTahun = $this->ModelLap->getTahun();
		$getTw = $this->ModelLap->getTw();
		$tahun = $getTahun->tahun;
		$tw=$getTw->tw;	
		$data=[
			'submenu' => '',			
			'menu' => 'Laporan',
			'title' => 'Laporan',
			'data'	=> $this->ModelLap->getKab(),
			'oki' => $this->ModelLap->getDana(1602,$tahun,$tw),
			'me' => $this->ModelLap->getDana(1603,$tahun,$tw),
			'lht' => $this->ModelLap->getDana(1604,$tahun,$tw),
			'mr' => $this->ModelLap->getDana(1605,$tahun,$tw),
			'mb' => $this->ModelLap->getDana(1606,$tahun,$tw),
			'bny' => $this->ModelLap->getDana(1607,$tahun,$tw),
			'okut' => $this->ModelLap->getDana(1608,$tahun,$tw),
			'okus' => $this->ModelLap->getDana(1609,$tahun,$tw),
			'oi' => $this->ModelLap->getDana(1610,$tahun,$tw),
			'el' => $this->ModelLap->getDana(1611,$tahun,$tw),
			'pali' => $this->ModelLap->getDana(1612,$tahun,$tw),
			'mru' => $this->ModelLap->getDana(1613,$tahun,$tw),
			'plg' => $this->ModelLap->getDana(1671,$tahun,$tw),
			'pga' => $this->ModelLap->getDana(1672,$tahun,$tw),
			'll' => $this->ModelLap->getDana(1673,$tahun,$tw),
			'pra' => $this->ModelLap->getDana(1674,$tahun,$tw),
			'isi' => 'admin/lap1',
		];
		$data['oku'] = $this->ModelLap->getDana(1601,$tahun,$tw);
		echo view('admin/layout/v_wrap', $data);
	}

	public function search()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$tahun = $this->request->getPost('tahun');
		$tw = $this->request->getPost('tw');
		if (empty($tahun) && empty($tw)) {
			$getTahun = $this->ModelLap->getTahun();
			$getTw = $this->ModelLap->getTw();
			$tahun = $getTahun->tahun;
			$tw=$getTw->tw;	
		} elseif (empty($tahun)) {
			$getTahun = $this->ModelLap->getTahun();
			$getTw = $this->ModelLap->getTw();
			$tahun = $getTahun->tahun;
		} elseif (empty($tw)) {
			$getTahun = $this->ModelLap->getTahun();
			$getTw = $this->ModelLap->getTw();
			$tw=$getTw->tw;
		}
		$data=[
			'submenu' => '',			
			'menu' => 'Laporan',
			'title' => 'Laporan',
			'data'	=> $this->ModelLap->getKab(),
			'oki' => $this->ModelLap->getDana(1602,$tahun,$tw),
			'me' => $this->ModelLap->getDana(1603,$tahun,$tw),
			'lht' => $this->ModelLap->getDana(1604,$tahun,$tw),
			'mr' => $this->ModelLap->getDana(1605,$tahun,$tw),
			'mb' => $this->ModelLap->getDana(1606,$tahun,$tw),
			'bny' => $this->ModelLap->getDana(1607,$tahun,$tw),
			'okut' => $this->ModelLap->getDana(1608,$tahun,$tw),
			'okus' => $this->ModelLap->getDana(1609,$tahun,$tw),
			'oi' => $this->ModelLap->getDana(1610,$tahun,$tw),
			'el' => $this->ModelLap->getDana(1611,$tahun,$tw),
			'pali' => $this->ModelLap->getDana(1612,$tahun,$tw),
			'mru' => $this->ModelLap->getDana(1613,$tahun,$tw),
			'plg' => $this->ModelLap->getDana(1671,$tahun,$tw),
			'pga' => $this->ModelLap->getDana(1672,$tahun,$tw),
			'll' => $this->ModelLap->getDana(1673,$tahun,$tw),
			'pra' => $this->ModelLap->getDana(1674,$tahun,$tw),
			'isi' => 'admin/lap1',
		];
		$data['oku'] = $this->ModelLap->getDana(1601,$tahun,$tw);
		echo view('admin/layout/v_wrap', $data);
	}

	public function cetak()
	{
		$tahun = $this->request->getPost('tahun');
		$tw = $this->request->getPost('tw');
		$kab = $this->request->getPost('kab');
		$mpdf = new Mpdf([
			'mode' => 'utf-8',
			'margin_top' => 25,
			'margin_left' => 25,
			'margin_right' => 25,
			'margin_bottom' => 25,
			'format'	=> 'A4',
			'orientation' => 'L',
		]);
		$data=[
			'data' => $this->ModelLap->cetakDana($kab,$tahun,$tw),
		];
		$mpdf->WriteHTML(view('admin/reportlap', $data));
		return redirect()->to($mpdf->Output('cetak.pdf', 'I'));
	}

	//--------------------------------------------------------------------

}