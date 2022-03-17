<?php namespace App\Models;
use CodeIgniter\Model;

class Kepsek_model extends Model
{
	public function __construct(){
		parent::__construct();
	}
	public function getKepsek($nis)
	{
		return $this->db->table('profilkepsek')->where(['nis'=>$nis])->get()->getResult();
	}
	public function cekKepsek($nis)
	{
		return $this->db->table('profilkepsek')->where(['nis'=>$nis])->get()->getRow();
	}
	public function insertKepsek($data)
	{
		return $this->db->table('tb_kepsek')->insert($data);
	}
	public function updateKepsek($nis, $data)
	{
		return $this->db->table('tb_kepsek')->where(['nis'=>$nis])->update($data);
	}
}