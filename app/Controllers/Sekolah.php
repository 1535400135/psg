<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Sekolah_model;

class Sekolah extends BaseController
{

	public function __construct()
	{
		$this->sekolahModel = new Sekolah_model;
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

	public function getKel($id_kec)
	{
	  	$db = \Config\Database::connect();
		$db = db_connect();
		$query = $db->query("SELECT * From kelurahan WHERE id_kec='$id_kec'");
		$result = $query->getResult();
		echo"<option value=''>Silakan Pilih Kelurahan/Desa</option>";
	  	foreach ($result as $row) {
			$id=$row->id_kel;
			$nama=$row->nama;
			echo "<option value='$id'>$nama</option>";
		}
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
			'menu' => 'SKL',
			'title' => 'Data Sekolah',
			'info' => $this->sekolahModel->getSekolah($nis),
			'row' => $this->sekolahModel->rowSekolah($nis),
			'isi' => 'info_sekolah',
		];
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
			'menu' => 'SKL',
			'title' => 'Data Sekolah',
			'info' => $this->sekolahModel->rowSekolah($nis),
			'bank' => $this->sekolahModel->getBank(),
			'isi' => 'sekolah_update',
			'data' => $this->sekolahModel->getSekolah($nis),
		];
		$info = $this->sekolahModel->getSekolah($nis);
		echo view('layout/v_wrap', $data, $info);
	}

	public function tambah()
	{
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$nis = session()->get('nis');
		$data=[
			'submenu' => 'DATA',
			'menu' => 'SKL',
			'title' => 'Data Sekolah',
			'data_nis' => $nis,
			'bank' => $this->sekolahModel->getBank(),
			'isi' => 'sekolah',
			'kab' => $this->sekolahModel->getKab(),
		];
		echo view('layout/v_wrap', $data);
	}

	public function save() {
		if ((session()->get('nis')=='') || (session()->get('hak_akses')=='Administrator')) {
		session()->setFlashdata('gagal', 'Maaf Anda Tidak Bisa Masuk !!!');
		session()->destroy();
		return redirect()->to(base_url('login'));
		}
		$data_sekolah = [
			'nis' =>$this->request->getPost('nis'),
			'nama_skl' =>$this->request->getPost('nama_skl'),
			'id_kab' =>$this->request->getPost('kota'),
			'id_kec' =>$this->request->getPost('kec'),
			'id_kel' =>$this->request->getPost('kel'),
			'alamat' =>$this->request->getPost('alamat'),
			'pos' =>$this->request->getPost('pos'),
			'email' =>$this->request->getPost('email'),
			'notlp' =>$this->request->getPost('notlp'),
			'status' =>$this->request->getPost('status'),
			'jenis' =>$this->request->getPost('jenis'),
			'id_bank' =>$this->request->getPost('id_bank'),
			'nomor_rek' =>$this->request->getPost('nomor_rek'),
		];
		$this->sekolahModel->insert_data($data_sekolah);
		session()->setFlashdata('success', 'Data Sekolah Berhasil Disimpan');
		return redirect()->to(base_url('headmaster'));
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
			'pos' =>$this->request->getPost('pos'),
			'email' =>$this->request->getPost('email'),
			'notlp' =>$this->request->getPost('notlp'),
			'id_bank' =>$this->request->getPost('id_bank'),
			'nomor_rek' =>$this->request->getPost('nomor_rek'),	
		];
		$this->sekolahModel->updateSekolah($nis, $data);
		session()->setFlashdata('success', 'Data Sekolah Berhasil Diperbarui');
		return redirect()->to(base_url('home'));
	}

}