<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\F1_model;
use \Mpdf\Mpdf;

class F1 extends BaseController
{
	
	public function __construct() {
		$this->f1_model = new F1_model();
	}

	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$cekdata = $this->f1_model->cekData($nis);
		$cekf1= $this->f1_model->cekDataF1($nis);
		if (empty($cekdata)) {
			session()->setFlashdata('gagal', 'Anda Harus Memasukan Data Sekolah');
			return redirect()->to('home');
		} elseif (empty($cekf1->valid)) {
			
		} elseif ($cekf1->valid==2) {
			session()->setFlashdata('success', 'Formulir 1 Anda Sudah Diproses Administrator!!!<br>Silakan Melanjutkan ke Formulir 2');
			return redirect()->to('home');
		} elseif ($cekf1->valid==1) {
			session()->setFlashdata('valid', 'Formulir 1 Anda Belum Diproses Administrator!!!<br>Harap Menunggu Proses Validasi Dari Administrator');
			return redirect()->to('home');
		}
		$data=[
			'submenu' => '',
			'menu' => 'F1',
			'title' => 'Formulir 1',
		];
		$cek = $this->f1_model->cekSesi($nis);
		$cek_jenis = $cek->jenis;
		if (($cek_jenis=='SMA') || ($cek_jenis=='MA')) {
			$data['title'] = 'Formulir 1';
			$data['isi'] = 'f_sma';
			$data['sekolah'] = $this->f1_model->cekData($nis);
			if (!empty($this->f1_model->cekDataF1SMAMA($nis))) {
				$data['title'] = 'Proses Formulir 1';
				$data['isi'] = 'fsma_up';
				$data['proses'] = $this->f1_model->getDataF1SMAMA($nis);
				$m = $this->f1_model->getRowF1SMAMA($nis);
				$data['siswa']=$m->xl + $m->xp + $m->xil + $m->xip + $m->xiil + $m->xiip;
				$data['rombel']=$m->xr + $m->xir + $m->xiir;
				$data['guru']=$m->gl + $m->gp;
			}
		} elseif ($cek_jenis=='SMK') {
			$data['title'] = 'Formulir 1';
			$data['isi'] = 'f_smk';
			$data['sekolah'] = $this->f1_model->cekData($nis);
			if (!empty($this->f1_model->cekDataF1SMK($nis))) {
				$data['title'] = 'Proses Formulir 1';
				$data['isi'] = 'fsmk_up';
				$data['proses'] = $this->f1_model->getDataF1SMK($nis);
				$m = $this->f1_model->getRowF1SMK($nis);
				$data['teknik']=$m->a + $m->b + $m->c + $m->d + $m->e + $m->f;
				$data['non_teknik']=$m->g + $m->h + $m->i + $m->j + $m->k + $m->l;
				$data['guru']=$m->m + $m->n;
				$data['rt']=$m->r1 + $m->r2 + $m->r3;
				$data['rnt']=$m->r4 + $m->r5 + $m->r6;
			}
		} elseif ($cek_jenis=='SLB') {
			$data['title'] = 'Formulir 1';
			$data['isi'] = 'f_slb';
			$data['sekolah'] = $this->f1_model->cekData($nis);
			if (!empty($this->f1_model->cekDataF1SLB($nis))) {
				$data['title'] = 'Proses Formulir 1';
				$data['isi'] = 'fslb_up';
				$data['proses'] = $this->f1_model->getDataF1SLB($nis);
				$m = $this->f1_model->getRowF1SLB($nis);
				$data['siswa_sd']=$m->il+$m->ip+$m->iil+$m->iip+$m->iiil+$m->iiip+$m->ivl+$m->ivp+$m->vl+$m->vp+$m->vil+$m->vip;
				$data['rombel_sd']=$m->ir+$m->iir+$m->iiir+$m->ivr+$m->vr+$m->vir;
				$data['siswa_smp']=$m->viil + $m->viip + $m->viiil + $m->viiip + $m->ixl + $m->ixp;
				$data['rombel_smp']=$m->viir+$m->viiir+$m->ixr;
				$data['siswa_sma']=$m->xl + $m->xp + $m->xil + $m->xip + $m->xiil + $m->xiip;
				$data['rombel_sma']=$m->xr+$m->xir+$m->xiir;
				$data['jumlah_siswa']=$data['siswa_sd']+$data['siswa_smp']+$data['siswa_sma'];
				$data['jumlah_rombel']=$data['rombel_sd']+$data['rombel_smp']+$data['rombel_sma'];
				$data['guru']=$m->gl + $m->gp;
			}
		}

		echo view('layout/v_wrap', $data);
	}

	public function cetakform1()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$sesi=$this->f1_model->cekSesi($nis);
		$cek_jenis=$sesi->jenis;
		if ($cek_jenis=='SMA') {

		} elseif ($cek_jenis=='SMK') {
			
		} elseif ($cek_jenis=='SLB') {
			
		}
	}

	public function edit_smk($id)
	{
		$data=[
			'submenu' => '',
			'menu' => 'F1',
			'title' => 'Formulir 1',
		];
		$data['title'] = 'Proses Formulir 1';
		$data['isi'] = 'f_smk_edit';
		$data['proses'] = $this->f1_model->getDataF1EditSMK($id);
		$m = $this->f1_model->getRowF1EditSMK($id);
		$data['teknik']=$m->a + $m->b + $m->c + $m->d + $m->e + $m->f;
		$data['non_teknik']=$m->g + $m->h + $m->i + $m->j + $m->k + $m->l;
		$data['guru']=$m->m + $m->n;
		$data['rt']=$m->r1 + $m->r2 + $m->r3;
		$data['rnt']=$m->r4 + $m->r5 + $m->r6;
		echo view('layout/v_wrap', $data);
	}

	public function save_up()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$sesi=$this->f1_model->cekSesi($nis);
		$cek_jenis=$sesi->jenis;
		$date=date('Y-m-d');
		if ($datafile = $this->request->getFile('file_upload')) {
			if ($datafile->isValid() && !$datafile->hasMoved()) {
				$newName = $datafile->getRandomName();
				$datafile->move(ROOTPATH.'public/form1', $newName);
				if (($cek_jenis=='SMA') || ($cek_jenis=='MA') || ($cek_jenis=='SLB')) {
			$data=[
				'nis'			=> $nis,
				'tgl_in'		=> $date,
				'file'			=> $newName,
				'jumlah'		=> $this->request->getPost('jumlah'),
				'guru'			=> $this->request->getPost('guru'),
				'tahun' 		=> $this->request->getPost('tahun'),
				'tw' 			=> $this->request->getPost('tw'),
				'valid'			=> 1,
			];
			} elseif ($cek_jenis=='SMK') {
			$data=[
				'nis'			=> $nis,
				'tgl_in'		=> $date,
				'file'			=> $newName,
				'teknik'		=> $this->request->getPost('teknik'),
				'non_teknik'	=> $this->request->getPost('non_teknik'),
				'guru'			=> $this->request->getPost('guru'),
				'tahun' 		=> $this->request->getPost('tahun'),
				'tw' 			=> $this->request->getPost('tw'),
				'valid'			=> 1,
			];
		}
		$this->f1_model->insertDataUp($data);
		session()->setFlashdata('success', 'Data Formulir 1 Berhasil Disimpan !!! <br>Silakan Tunggu Hingga Administrator Memvalidasi Data Formulir 1 Anda!');
		return redirect()->to(base_url('home'));
			} elseif (!$datafile->isValid()) {
				throw new RuntimeException($datafile->getErrorString().'('.$datafile->getError().')');
				return redirect()->to(base_url('f1'));
			}
		}
	}

	public function save() 
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$sesi=$this->f1_model->cekSesi($nis);
		$cek_jenis=$sesi->jenis;
		$date=date('Y-m-d');
		if (($cek_jenis=='SMA') || ($cek_jenis=='MA')) {
		$data = [
			'nis' =>$nis,
			'xl' =>$this->request->getPost('xl'),
			'xp' =>$this->request->getPost('xp'),
			'xr' =>$this->request->getPost('xr'),
			'xil' =>$this->request->getPost('xil'),
			'xip' =>$this->request->getPost('xip'),
			'xir' =>$this->request->getPost('xir'),
			'xiil' =>$this->request->getPost('xiil'),
			'xiip' =>$this->request->getPost('xiip'),
			'xiir' =>$this->request->getPost('xiir'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' => $this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db='tb_sma_ma';
		} elseif ($cek_jenis=='SMK') {
		$data = [
			'nis' =>$nis,
			'xtl' =>$this->request->getPost('xtl'),
			'xtp' =>$this->request->getPost('xtp'),
			'xtr' =>$this->request->getPost('xtr'),
			'xnl' =>$this->request->getPost('xnl'),
			'xnp' =>$this->request->getPost('xnp'),
			'xnr' =>$this->request->getPost('xnr'),
			'xitl' =>$this->request->getPost('xitl'),
			'xitp' =>$this->request->getPost('xitp'),
			'xitr' =>$this->request->getPost('xitr'),
			'xinl' =>$this->request->getPost('xinl'),
			'xinp' =>$this->request->getPost('xinp'),
			'xinr' =>$this->request->getPost('xinr'),
			'xiitl' =>$this->request->getPost('xiitl'),
			'xiitp' =>$this->request->getPost('xiitp'),
			'xiitr' =>$this->request->getPost('xiitr'),
			'xiinl' =>$this->request->getPost('xiinl'),
			'xiinp' =>$this->request->getPost('xiinp'),
			'xiinr' =>$this->request->getPost('xiinr'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' => $this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db='tb_smk';
		} elseif ($cek_jenis=='SLB') {
		$data = [
			'nis' =>$nis,
			'il' =>$this->request->getPost('il'),
			'ip' =>$this->request->getPost('ip'),
			'ir' =>$this->request->getPost('ir'),
			'iil' =>$this->request->getPost('iil'),
			'iip' =>$this->request->getPost('iip'),
			'iir' =>$this->request->getPost('iir'),
			'iiil' =>$this->request->getPost('iiil'),
			'iiip' =>$this->request->getPost('iiip'),
			'iiir' =>$this->request->getPost('iiir'),
			'ivl' =>$this->request->getPost('ivl'),
			'ivp' =>$this->request->getPost('ivp'),
			'ivr' =>$this->request->getPost('ivr'),
			'vl' =>$this->request->getPost('vl'),
			'vp' =>$this->request->getPost('vp'),
			'vr' =>$this->request->getPost('vr'),
			'vil' =>$this->request->getPost('vil'),
			'vip' =>$this->request->getPost('vip'),
			'vir' =>$this->request->getPost('vir'),
			'viil' =>$this->request->getPost('viil'),
			'viip' =>$this->request->getPost('viip'),
			'viir' =>$this->request->getPost('viir'),
			'viiil' =>$this->request->getPost('viiil'),
			'viiip' =>$this->request->getPost('viiip'),
			'viiir' =>$this->request->getPost('viiir'),
			'ixl' =>$this->request->getPost('ixl'),
			'ixp' =>$this->request->getPost('ixp'),
			'ixr' =>$this->request->getPost('ixr'),
			'xl' =>$this->request->getPost('xl'),
			'xp' =>$this->request->getPost('xp'),
			'xr' =>$this->request->getPost('xr'),
			'xil' =>$this->request->getPost('xil'),
			'xip' =>$this->request->getPost('xip'),
			'xir' =>$this->request->getPost('xir'),
			'xiil' =>$this->request->getPost('xiil'),
			'xiip' =>$this->request->getPost('xiip'),
			'xiir' =>$this->request->getPost('xiir'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' => $this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db='tb_slb';
		}
		$guru = [
			'nis' =>$nis,
			'gl' =>$this->request->getPost('gl'),
			'gp' =>$this->request->getPost('gp'),
			'sma_d3' =>$this->request->getPost('sma_d3'),
			's1' =>$this->request->getPost('s1'),
			's2' =>$this->request->getPost('s2'),
			'pns' =>$this->request->getPost('pns'),
			'non_pns' =>$this->request->getPost('non_pns'),
			'gpd' =>$this->request->getPost('gpd'),
			'gn' =>$this->request->getPost('gn'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' =>$this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db_guru='tb_guru';
		$this->f1_model->insertSiswa($db, $data, $db_guru, $guru);
		$this->f1_model->insertGuru($db_guru, $guru);
		session()->setFlashdata('success', 'Data Formulir 1 Berhasil Disimpan !!! <br>Segera Ubah Jika Ada Data Salah!!!<br>Karena Data Tidak Bisa Diubah Jika Sudah Di Proses');
		return redirect()->to(base_url('f1'));
	}

	public function update() 
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$tahun=$this->request->getPost('tahun');
		$tw=$this->request->getPost('tw');
		$id=$this->request->getPost('id');
		$sesi=$this->f1_model->cekSesi($nis);
		$cek_jenis=$sesi->jenis;
		$date=date('Y-m-d');
		if (($cek_jenis=='SMA') || ($cek_jenis=='MA')) {
		$data = [
			'nis' =>$nis,
			'xl' =>$this->request->getPost('xl'),
			'xp' =>$this->request->getPost('xp'),
			'xr' =>$this->request->getPost('xr'),
			'xil' =>$this->request->getPost('xil'),
			'xip' =>$this->request->getPost('xip'),
			'xir' =>$this->request->getPost('xir'),
			'xiil' =>$this->request->getPost('xiil'),
			'xiip' =>$this->request->getPost('xiip'),
			'xiir' =>$this->request->getPost('xiir'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' => $this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db='tb_sma_ma';
		} elseif ($cek_jenis=='SMK') {
		$data = [
			'nis' =>$nis,
			'xtl' =>$this->request->getPost('xtl'),
			'xtp' =>$this->request->getPost('xtp'),
			'xtr' =>$this->request->getPost('xtr'),
			'xnl' =>$this->request->getPost('xnl'),
			'xnp' =>$this->request->getPost('xnp'),
			'xnr' =>$this->request->getPost('xnr'),
			'xitl' =>$this->request->getPost('xitl'),
			'xitp' =>$this->request->getPost('xitp'),
			'xitr' =>$this->request->getPost('xitr'),
			'xinl' =>$this->request->getPost('xinl'),
			'xinp' =>$this->request->getPost('xinp'),
			'xinr' =>$this->request->getPost('xinr'),
			'xiitl' =>$this->request->getPost('xiitl'),
			'xiitp' =>$this->request->getPost('xiitp'),
			'xiitr' =>$this->request->getPost('xiitr'),
			'xiinl' =>$this->request->getPost('xiinl'),
			'xiinp' =>$this->request->getPost('xiinp'),
			'xiinr' =>$this->request->getPost('xiinr'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' => $this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db='tb_smk';
		} elseif ($cek_jenis=='SLB') {
		$data = [
			'nis' =>$nis,
			'il' =>$this->request->getPost('il'),
			'ip' =>$this->request->getPost('ip'),
			'ir' =>$this->request->getPost('ir'),
			'iil' =>$this->request->getPost('iil'),
			'iip' =>$this->request->getPost('iip'),
			'iir' =>$this->request->getPost('iir'),
			'iiil' =>$this->request->getPost('iiil'),
			'iiip' =>$this->request->getPost('iiip'),
			'iiir' =>$this->request->getPost('iiir'),
			'ivl' =>$this->request->getPost('ivl'),
			'ivp' =>$this->request->getPost('ivp'),
			'ivr' =>$this->request->getPost('ivr'),
			'vl' =>$this->request->getPost('vl'),
			'vp' =>$this->request->getPost('vp'),
			'vr' =>$this->request->getPost('vr'),
			'vil' =>$this->request->getPost('vil'),
			'vip' =>$this->request->getPost('vip'),
			'vir' =>$this->request->getPost('vir'),
			'viil' =>$this->request->getPost('viil'),
			'viip' =>$this->request->getPost('viip'),
			'viir' =>$this->request->getPost('viir'),
			'viiil' =>$this->request->getPost('viiil'),
			'viiip' =>$this->request->getPost('viiip'),
			'viiir' =>$this->request->getPost('viiir'),
			'ixl' =>$this->request->getPost('ixl'),
			'ixp' =>$this->request->getPost('ixp'),
			'ixr' =>$this->request->getPost('ixr'),
			'xl' =>$this->request->getPost('xl'),
			'xp' =>$this->request->getPost('xp'),
			'xr' =>$this->request->getPost('xr'),
			'xil' =>$this->request->getPost('xil'),
			'xip' =>$this->request->getPost('xip'),
			'xir' =>$this->request->getPost('xir'),
			'xiil' =>$this->request->getPost('xiil'),
			'xiip' =>$this->request->getPost('xiip'),
			'xiir' =>$this->request->getPost('xiir'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' => $this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db='tb_slb';
		}
		$guru = [
			'nis' =>$nis,
			'gl' =>$this->request->getPost('gl'),
			'gp' =>$this->request->getPost('gp'),
			'sma_d3' =>$this->request->getPost('sma_d3'),
			's1' =>$this->request->getPost('s1'),
			's2' =>$this->request->getPost('s2'),
			'pns' =>$this->request->getPost('pns'),
			'non_pns' =>$this->request->getPost('non_pns'),
			'gpd' =>$this->request->getPost('gpd'),
			'gn' =>$this->request->getPost('gn'),
			'tahun' =>$this->request->getPost('tahun'),
			'tw' =>$this->request->getPost('tw'),
			'tgl_in' =>$date,
		];
		$db_guru='tb_guru';
		$this->f1_model->updateSiswa($db, $data, $id);
		$this->f1_model->updateGuru($db_guru, $guru, $nis, $tahun, $tw);
		session()->setFlashdata('success', 'Data Formulir 1 Berhasil Disimpan !!! <br>Segera Ubah Jika Ada Data Salah!!!<br>Karena Data Tidak Bisa Diubah Jika Sudah Di Proses');
		return redirect()->to(base_url('f1'));
	}

	public function Formulir1()
	{
		$nis=session()->get('nis');
		$cek = $this->f1_model->cekSesi($nis);
		$cek_jenis = $cek->jenis;
		if (($cek_jenis=='SMA') || ($cek_jenis=='MA')) {
			$m = $this->f1_model->getRowF1SMAMA($nis);
			$data['siswa']=$m->xl + $m->xp + $m->xil + $m->xip + $m->xiil + $m->xiip;
			$data['rombel']=$m->xr + $m->xir + $m->xiir;
			$data['guru']=$m->gl + $m->gp;
			$data['tahun']=$m->tahun;$data['tw']=$m->tw;
			$mpdf = new Mpdf([
				'mode' => 'utf-8',
				'margin_top' => 25,
			]);
			$data['data']=$this->f1_model->getReportF1SMAMA($nis);
			$mpdf->WriteHTML(view('report_form1_sma', $data));
			return redirect()->to($mpdf->Output('Formulir1-'.$nis.'.pdf', 'I'));
		} elseif ($cek_jenis=='SMK') {
			$m = $this->f1_model->getRowF1SMK($nis);
			$data['teknik']=$m->a + $m->b + $m->c + $m->d + $m->e + $m->f;
			$data['non_teknik']=$m->g + $m->h + $m->i + $m->j + $m->k + $m->l;
			$data['guru']=$m->m + $m->n;
			$data['rt']=$m->r1 + $m->r2 + $m->r3;
			$data['rnt']=$m->r4 + $m->r5 + $m->r6;
			$data['tahun']=$m->tahun;
			$data['tw']=$m->tw;
			$mpdf = new Mpdf([
				'mode' => 'utf-8',
				'margin_top' => 25,
			]);
			$data['data']=$this->f1_model->getReportF1SMK($nis);
			$mpdf->WriteHTML(view('report_form1_smk', $data));
			return redirect()->to($mpdf->Output('Formulir1-'.$nis.'.pdf', 'I'));
		} else {
			$m = $this->f1_model->getRowF1SMK($nis);
			$data['siswa']=$m->xl + $m->xp + $m->xil + $m->xip + $m->xiil + $m->xiip;
			$data['rombel']=$m->xr + $m->xir + $m->xiir;
			$data['guru']=$m->gl + $m->gp;
			$data['tahun']=$m->tahun;$data['tw']=$m->tw;
			$mpdf = new Mpdf([
				'mode' => 'utf-8',
				'margin_top' => 25,
			]);
			$data['data']=$this->f1_model->getReportF1SMK($nis);
			$mpdf->WriteHTML(view('report_form1_smk', $data));
			return redirect()->to($mpdf->Output('Formulir1-'.$nis.'.pdf', 'I'));
		}
	}

}