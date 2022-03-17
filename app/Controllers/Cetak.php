<?php namespace App\Controllers;
use \Mpdf\Mpdf;
use CodeIgniter\Controller;
use App\Models\Sk_model;

class Cetak extends BaseController
{

	public function __construct()
	{
		$this->Sk_model = new Sk_model;
	}

	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$cekData = $this->Sk_model->cekData($nis);
		$cek1 = $cekData->tahun;
		$cek2 = $cekData->tw;
		$cek3 = $cekData->tahunf1;
		$cek4 = $cekData->twf1;
		$cek5 = $cekData->valid;
		$cek6 = $cekData->validf1;
		if (($cek1===$cek3) && ($cek2===$cek4) &&($cek5===$cek6)) {
		$mpdf = new Mpdf([
			'mode' => 'utf-8',
			'margin-top' => 30,
			'margin-bottom' => 30,
			'margin-left' => 30,
			'margin-right' => 30,
		]);
		$data['data'] = $this->Sk_model->getData($nis);
        $mpdf->WriteHTML(view('reportsknegeri', $data));
        return redirect()->to($mpdf->Output('filename.pdf', 'I'));
    	} else {
    	session()->setFlashdata('gagal', 'Maaf Anda Belum Bisa Melakukan Pencetakan SK!!! Silahkan Hubungi Administrator Untuk Keterangan Lebih Lanjut!!!');
		return redirect()->to(base_url('home'));
    	}
	}


}