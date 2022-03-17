<?php namespace App\Controllers\Admin;
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
			'isi' => 'admin/news',
		];
		echo view('admin/layout/v_wrap', $data);
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
			return redirect()->to(base_url('admin/berita'));
			} elseif (!$datafile->isValid()) {
				throw new RuntimeException($datafile->getErrorString().'('.$datafile->getError().')');
				return redirect()->to(base_url('f1'));
			}
		}
	}

	function edit($id)
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
			'data'	=> $this->ModelBerita->getBeritaEdit($id),
			'isi' => 'admin/news_edit',
		];
		echo view('admin/layout/v_wrap', $data);
	}

	function update($id)
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
			session()->setFlashdata('success', 'Berita/Pengumuman Berhasil diperbarui!');
			$this->ModelBerita->edit($id, $data);
			return redirect()->to(base_url('admin/berita'));
			} elseif (!$datafile->isValid()) {
				$data=[
					'nama'	=> $this->request->getPost('nama'),
					'isi'	=> $this->request->getPost('isi'),
					'status'=> $this->request->getPost('status'),
					'file'	=> $this->request->getPost('file_upload'),
				];
				session()->setFlashdata('success', 'Berita/Pengumuman Berhasil diperbarui!');
				$this->ModelBerita->edit($id, $data);
				return redirect()->to(base_url('admin/berita'));
			}
		} else {
			session()->setFlashdata('gagal', 'Berita/Pengumuman Gagal diperbarui!');
			return redirect()->to(base_url('admin/berita'));
		}
	}

	function hapus($id)
	{
		$this->ModelBerita->hapus($id);
		session()->setFlashdata('success', 'Berita/Pengumuman Berhasil Dihapus!');
		return redirect()->to(base_url('admin/berita'));

	}

}