<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Login_model;

class Login extends BaseController
{	

	public function __construct()
	{
		$this->LoginModel = new Login_model();
	}

	public function index()
	{
		echo view('login');
		session()->destroy();	
	}

	public function cek_login()
	{
		$nis = $this->request->getPost('nis');
		$pass = $this->request->getPost('pass');

		$cek = $this->LoginModel->login($nis, $pass);
		if (empty($cek)) {
			//Jika Pass Salah
			session()->setFlashdata('gagal', 'Username Atau Password Salah');
			return redirect()->to(base_url('login'));
		}
		$user=$cek->nis;
		$pasw=$cek->pass;
		$cek_skl = $this->LoginModel->cekData($nis);
		if (($user==$nis) && ($pasw==$pass)) {
			session()->set('nis', $cek->nis);
			session()->set('hak_akses', $cek->hak_akses);
			} if (($user==$nis) && ($pasw==$pass) && (session()->get('hak_akses')=='Super Administrator')) {
				return redirect()->to(base_url('su/home'));
			} elseif (($user==$nis) && ($pasw==$pass) && (session()->get('hak_akses')=='Administrator')) {
				return redirect()->to(base_url('admin/home'));
			} elseif (($user==$nis) && ($pasw==$pass) && (session()->get('hak_akses')!='Administrator') && (session()->get('hak_akses')!='Sekolah')) {
				return redirect()->to(base_url('admin/home'));
			} elseif (!empty($cek_skl)){
				$nama = $cek_skl->nama_skl;
				session()->setFlashdata('success', 'Selamat Datang di Aplikasi PSG Sumatera Selatan');
				return redirect()->to(base_url('home'));
			} elseif (empty($cek_skl)) {
				return redirect()->to(base_url('sekolah/tambah'));
			} 
		}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('login'));
	}

}