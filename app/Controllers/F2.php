<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\F2_model;
use \Mpdf\Mpdf;

class F2 extends BaseController
{
	public function __construct() {
		$this->f2_model = new F2_model();
		helper('number');
	}

	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$cekdata = $this->f2_model->cekData($nis);
		$f2= $this->f2_model->cekDataValidF2($nis);
		if (empty($cekdata)) {
			session()->setFlashdata('gagal', 'Anda Harus Memasukan Data Sekolah');
			return redirect()->to('home');
		} elseif (empty($cekf1->valid)) {
		} elseif ($valid==1) {
			session()->setFlashdata('valid', 'Formulir 2 Anda Belum Diproses Administrator!!!<br>Harap Menunggu Proses Validasi Dari Administrator');
			return redirect()->to('home');
		} elseif ($valid==2) {
			session()->setFlashdata('success', 'Formulir 1 dan 2 Anda Sudah Diproses Administrator!!!<br>Silakan CETAK SK');
			return redirect()->to('home');
		}
		$data=[
			'submenu' => '',
			'menu' => 'F2',
			'title' => 'Formulir 2',
			
		];
		$cek = $this->f2_model->cekF1Valid($nis);
		$valid = $cek->valid;
		if ($valid==1) {
			session()->setFlashdata('valid', 'Maaf Data Anda Belum Divalidasi Oleh Pihak Dinas Pendidikan Provinsi Sumatera Selatan. Harap Sabar Menunggu Proses Validasi !!');
			return redirect()->to('home'); }
		elseif ($valid==2) {
			$data['info'] = $this->f2_model->getInfo($nis);
			$data['isi']	= 'ff';
			if (!empty($this->f2_model->cekDataF2($nis))) {
				$data['isi']	= 'ff_up';
				$data['info']	= $this->f2_model->getF2($nis);
				$x = $this->f2_model->getDataF2($nis);
				$dana = 0;
				for ($i=1; $i <26 ; $i++) { 
					$dana= $x['dana'.$i] + $dana;
				}				
				$data['dana'] =  $dana;
			}
		}
		
		echo view('layout/v_wrap', $data);
	}


	public function save()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$dana_diterima=$this->request->getPost('dana_diterima');
		$dana_diterimastr=preg_replace("/[^0-9]/", "", $dana_diterima);
		$dana_diterimaint= (int) $dana_diterimastr;
		$data=[
			'nis'				=> $nis,
			'dana_diterima'		=> $dana_diterimaint,
			'tgl_in'			=> $this->request->getPost('tgl_in'),
			'tahun'				=> $this->request->getPost('tahun'),
			'tw'				=> $this->request->getPost('tw'),
		];
		for ($i=1; $i <=25 ; $i++) { 
			$dana[$i]=$this->request->getPost('dana'.$i);
			$danastr[$i]= preg_replace("/[^0-9]/", "", $dana[$i]);
			$dana_int[$i]=(int) $danastr[$i];
			$data['use'.$i] 	= $this->request->getPost('form'.$i);
			$data['dana'.$i] 	= $dana_int[$i];
		}

		$this->f2_model->insertData($data);
		session()->setFlashdata('success', 'Data Formulir 2 Berhasil Disimpan !!! <br>Segera Ubah Jika Ada Data Salah!!!<br>Karena Data Tidak Bisa Diubah Jika Sudah Di Proses');
		return redirect()->to(base_url('f2'));
	}

	public function save_up()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}

		$nis=session()->get('nis');
		$date=date('Y-m-d');
		$dana_diterima=$this->request->getPost('dana_diterima');
		$dana_diterimastr=preg_replace("/[^0-9]/", "", $dana_diterima);
		$dana_diterimaint= (int) $dana_diterimastr;
		$danapsg = $this->request->getPost('dana_diterima');
		$danapsgstr = preg_replace("/[^0-9]/", "", $danapsg);
		$danapsgint = (int) $danapsgstr;
		$danadigunakan = $this->request->getPost('total');
		$danadigunakanstr = preg_replace("/[^0-9]/", "", $danadigunakan);
		$danadigunakanint = (int) $danadigunakanstr;
		$saldopsg = $danapsgint - $danadigunakanint;

		if ($datafile = $this->request->getFile('file_upload')) {
			if ($datafile->isValid() && !$datafile->hasMoved()) {
				$newName = $datafile->getRandomName();
				$datafile->move(ROOTPATH.'public/form2', $newName);
				$data=[
					'nis'		=> $nis,
					'tgl_in'	=> $date,
					'file'		=> $newName,
					'digunakan'	=> $danadigunakanint,
					'saldo'		=> $saldopsg,
					'tahun'		=> $this->request->getPost('tahun'),
					'tw'		=> $this->request->getPost('tw'),
					'valid'		=> 1,
				];
				$this->f2_model->insertF2($data);
				session()->setFlashdata('valid', 'Data Formulir 2 Berhasil Disimpan !!! <br> Harap Menunggu Proses Verifikasi dari Administrator');
				return redirect()->to(base_url('home'));
			} elseif (!$datafile->isValid()) {
				throw new RuntimeException($datafile->getErrorString().'('.$datafile->getError().')');
				return redirect()->to(base_url('f2'));
			}
		}
	}

	public function Formulir2()
	{
		$nis=session()->get('nis');
		$data['nis']=session()->get('nis');
		$m = 
		$mpdf = new Mpdf([
			'mode' => 'utf-8',
			'margin_top' => 25,
		]);
		$x = $this->f2_model->getDataF2($nis);
				$dana = 0;
				for ($i=1; $i <26 ; $i++) { 
					$dana= $x['dana'.$i] + $dana;
				}				
				$data['dana'] =  $dana;
		$data['data']=$this->f2_model->cetakReport($nis);
		$mpdf->WriteHTML(view('cetak_form2', $data));
		return redirect()->to($mpdf->Output('Formulir2.pdf', 'I'));
	}

}