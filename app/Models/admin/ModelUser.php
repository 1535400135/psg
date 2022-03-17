<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelUser extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getKab()
	{
		return $this->db->table('kabupaten')->get()->getResult();
	}

	public function getUser()
	{
		return $this->db->table('tb_users')
		->join('tb_sekolah', 'tb_users.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->select('tb_users.nis as nis, tb_sekolah.nama_skl as sekolah, kabupaten.nama as nama,')
		->select('tb_sekolah.status as status, tb_sekolah.jenis as jenis')
		->where(['tb_users.hak_akses'=>'Sekolah'])->get()->getResult();
	}

	public function simpan($data)
	{
		return $this->db->table('tb_users')->insert($data);
	}
}