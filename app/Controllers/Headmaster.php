<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Kepsek_model;

class Headmaster extends BaseController
{

	public function __construct()
	{
		$this->kepsekModel = new Kepsek_model;
	}

	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$data=[
			'submenu' => 'DATA',
			'menu' => 'KEPSEK',
			'title' => 'Data Kepala Sekolah',
		];
		if (!empty($this->kepsekModel->cekKepsek($nis))) {
			$data['info'] = $this->kepsekModel->getKepsek($nis);
			$data['isi'] = 'info_kepsek';
		} else {
			$data['isi'] = 'kepsek';
		}
		echo view('layout/v_wrap', $data);
	}

	public function edit()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis=session()->get('nis');
		$data=[
			'submenu' => 'DATA',
			'menu' => 'KEPSEK',
			'title' => 'Data Kepala Sekolah',
			'info' => $this->kepsekModel->getKepsek($nis),
			'isi' => 'kepsek_update',
		];
		echo view('layout/v_wrap', $data);
	}

	public function save()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		if ($datafile = $this->request->getFile('file_upload')) {
			if ($datafile->isValid() && !$datafile->hasMoved()) {
				$newName = $datafile->getRandomName();
				$datafile->move(ROOTPATH.'public/sk_kepsek', $newName);	
				$nis=session()->get('nis');
				$data = [
				'nik' =>$this->request->getPost('nik'),
				'namakep' =>$this->request->getPost('namakep'),
				'alamat' =>$this->request->getPost('alamat'),
				'tmp' =>$this->request->getPost('tmp'),
				'tgl' =>$this->request->getPost('tgl'),
				'jk' =>$this->request->getPost('jk'),
				'agama' =>$this->request->getPost('agama'),
				'nohp' =>$this->request->getPost('nohp'),
				'email' =>$this->request->getPost('email'),
				'no_sk'	=>$this->request->getPost('no_sk'),
				'tgl_sk'	=>$this->request->getPost('tgl_sk'),
				'file'		=>$newName,
				'nis' =>$nis,
				];
		$this->kepsekModel->insertKepsek($data);
		session()->setFlashdata('success', 'Data Kepala Sekolah Berhasil Disimpan');
		return redirect()->to(base_url('skrt'));
		} elseif (!$datafile->isValid()) {
				throw new RuntimeException($datafile->getErrorString().'('.$datafile->getError().')');
				return redirect()->to(base_url('Headmaster'));
			}
		}
	}

	public function update()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
				$nis=session()->get('nis');
				$data = [
				'nik' 		=>$this->request->getPost('nik'),
				'namakep' 	=>$this->request->getPost('namakep'),
				'alamat' 	=>$this->request->getPost('alamat'),
				'tmp' 		=>$this->request->getPost('tmp'),
				'tgl' 		=>$this->request->getPost('tgl'),
				'jk' 		=>$this->request->getPost('jk'),
				'agama' 	=>$this->request->getPost('agama'),
				'nohp' 		=>$this->request->getPost('nohp'),
				'email' 	=>$this->request->getPost('email'),
			];
			$this->kepsekModel->updateKepsek($nis, $data);
			session()->setFlashdata('success', 'Data Kepala Sekolah Berhasil Diperbarui');
			return redirect()->to(base_url('Headmaster'));	 
		}
	

}