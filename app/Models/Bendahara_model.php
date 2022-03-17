<?php namespace App\Models;
use CodeIgniter\Model;

class Bendahara_model extends Model
{
	public function __construct(){
		parent::__construct();
	}
	public function getBendahara($nis)
	{
		return $this->db->table('profilben')->where(['nis'=>$nis])->get()->getResult();
	}
	public function cekBendahara($nis)
	{
		return $this->db->table('profilben')->where(['nis'=>$nis])->get()->getRow();
	}
	public function insertSkrt($data)
	{
		return $this->db->table('tb_bendahara')->insert($data);
	}
	public function updateSkrt($nis, $data)
	{
		return $this->db->table('tb_bendahara')->where(['nis'=>$nis])->update($data);
	}
}