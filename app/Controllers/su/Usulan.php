<?php namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\admin\ModelUsulan;
use \Mpdf\Mpdf;

class Usulan extends BaseController
{
	public function __construct()
	{
		$this->ModelUsulan = new ModelUsulan;
	}

	public function getKec($id_kab)
	{
	  	$db = \Config\Database::connect();
		$db = db_connect();
		$query = $db->query("SELECT * From kecamatan WHERE id_kab='$id_kab'");
		$result = $query->getResult();
		echo"<option value=''>Silakan Pilih Kecamatan</option>";
	  	foreach ($result as $row) {
			$id=$row->id_kec;
			$nama=$row->nama;
			echo "<option value='$id'>$nama</option>";
		}
	}

	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => 'Usulan',
			'menu' => 'USMA',
			'title' => 'Data Usulan',
			'kab'	=> $this->ModelUsulan->getKab(),
			'data'	=> $this->ModelUsulan->getSMA(),
			'isi' => 'admin/usulan',
		];
		echo view('admin/layout/v_wrap', $data);
	}

	function ReportUsulan()
	{
		$jenis = $this->request->getPost('jenis');
		$id = $this->request->getPost('kota');
		if ($jenis=='SMA' || $jenis=='MA' || $jenis='SLB')
		{
		$data['data']=$this->ModelUsulan->getReport($id, $jenis);
		$kota=$this->ModelUsulan->getKota($id);
		$data['kota']=$kota->nama;
		$data['jenis']=$jenis;
		$mpdf = new Mpdf([
			'mode' => 'utf-8',
			'margin_top' => 25,
			'margin_left' => 25,
			'margin_right' => 25,
			'margin_bottom' => 25,
			'format'	=> 'Legal',
			'orientation' => 'L',
		]);
		$mpdf->WriteHTML(view('admin/reportusulan', $data));
		return redirect()->to($mpdf->Output('Usulan.pdf', 'I'));
		} elseif ($jenis=='SMK') {
		$data=$this->ModelUsulan->getReport($id, $jenis);
		$mpdf = new Mpdf([
			'mode' => 'utf-8',
			'margin_top' => 25,
			'margin_left' => 25,
			'margin_right' => 25,
			'margin_bottom' => 25,
			'format'	=> 'Legal',
			'orientation' => 'L',
		]);
		$mpdf->WriteHTML(view('admin/reportusulansmk', $data));
		return redirect()->to($mpdf->Output('Usulan.pdf', 'I'));
		}
	}

}