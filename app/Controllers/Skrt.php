<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Bendahara_model;

class Skrt extends BaseController
{
	public function __construct()
	{
		$this->skrtModel = new Bendahara_model;
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
			'menu' => 'SKRT',
			'title' => 'Data Sekertaris',
		];
		if (!empty($this->skrtModel->cekBendahara($nis))) {
			$data['info'] = $this->skrtModel->getBendahara($nis);
			$data['isi'] = 'info_skrt';
		} else {
			$data['isi'] = 'skrt';
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
			'menu' => 'SKRT',
			'title' => 'Data Kepala Sekolah',
			'info' => $this->skrtModel->getBendahara($nis),
			'isi' => 'skrt_update',
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
				$datafile->move(ROOTPATH.'public/sk_bendahara', $newName);
				$nis=session()->get('nis');
				$data = [
					'nib' =>$this->request->getPost('nib'),
					'nama_ben' =>$this->request->getPost('nama_ben'),
					'alamat' =>$this->request->getPost('alamat'),
					'tempat' =>$this->request->getPost('tempat'),
					'tgl' =>$this->request->getPost('tgl'),
					'jk' =>$this->request->getPost('jk'),
					'agama' =>$this->request->getPost('agama'),
					'no_hp' =>$this->request->getPost('no_hp'),
					'email' =>$this->request->getPost('email'),
					'no_sk' =>$this->request->getPost('no_sk'),
					'tgl_sk' =>$this->request->getPost('tgl_sk'),
					'file' =>$newName,
					'nis' =>$nis,
				];
				$this->skrtModel->insertSkrt($data);
				session()->setFlashdata('success', 'Data Bendahara Berhasil Disimpan');
				return redirect()->to(base_url('home'));
			} elseif (!$datafile->isValid()) {
				return redirect()->to(base_url('skrt'));
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
					'nib' 		=>$this->request->getPost('nib'),
					'nama_ben' 	=>$this->request->getPost('nama_ben'),
					'alamat' 	=>$this->request->getPost('alamat'),
					'tempat'	=>$this->request->getPost('tempat'),
					'tgl' 		=>$this->request->getPost('tgl'),
					'jk' 		=>$this->request->getPost('jk'),
					'agama' 	=>$this->request->getPost('agama'),
					'no_hp'		=>$this->request->getPost('nohp'),
					'email' 	=>$this->request->getPost('email'),
				];
				$this->skrtModel->updateSkrt($nis, $data);
				session()->setFlashdata('success', 'Data Bendahara Sekolah Berhasil Diperbarui');
				return redirect()->to(base_url('skrt'));

			}
		
	
}