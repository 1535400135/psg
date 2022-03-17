<?php namespace App\Controllers\su;
use CodeIgniter\Controller;
use App\Models\admin\ModelBerita;

class Berita extends BaseController
{
	public function __construct()
	{
		$this->ModelBerita = new ModelBerita;
		helper('form');
	}
	public function index()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');		
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data=[
			'submenu' => '',
			'menu' => 'New',
			'title' => 'Berita',
			'data'	=> $this->ModelBerita->getBerita(),
			'isi' => 'su/news',
		];
		echo view('su/layout/v_wrap', $data);
	}

	function save()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Sekolah')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		if ($datafile = $this->request->getFile('file_upload')) {
			if ($datafile->isValid() && !$datafile->hasMoved()) {
				$newName = $datafile->getRandomName();
				$datafile->move(ROOTPATH.'public/berita', $newName);
				$data=[
					'nama'	=> $this->request->getPost('nama'),
					'isi'	=> $this->request->getPost('isi'),
					'status'=> $this->request->getPost('status'),
					'file'	=> $newName,
			];
			session()->setFlashdata('success', 'Berita/Pengumuman Berhasil disimpan!');
			$this->ModelBerita->simpan($data);
			return redirect()->to(base_url('su/berita'));
			} elseif (!$datafile->isValid()) {
				throw new RuntimeException($datafile->getErrorString().'('.$datafile->getError().')');
				return redirect()->to(base_url('su/berita'));
			}
		}
	}


}