<?php namespace App\Models;
use CodeIgniter\Model;

class Sekolah_model extends Model
{
	public function __construct(){
		parent::__construct();
	}
	public function getKab()
	{
	  return $this->db->table('kabupaten')->get()->getResultArray();
	}
	public function getSekolah($nis)
	{
		return $this->db->table('profil')->where(['nis'=>$nis])->get()->getResult();
	}
	public function rowSekolah($nis)
	{
		return $this->db->table('tb_sekolah')->where(['nis'=>$nis])->get()->getRow();
	}
	public function insert_data($data_sekolah)
	{
		return $this->db->table('tb_sekolah')->insert($data_sekolah);
	}

	public function updateSekolah($nis, $data)
	{
		return $this->db->table('tb_sekolah')->where(['nis'=>$nis])->update($data);
	}

	public function getBank()
	{
		return $this->db->table('tb_bank')->get()->getResult();
	}
}