<?php namespace App\Models;
use CodeIgniter\Model;

class Home_model extends Model
{
	public function __construct(){
		parent::__construct();
	}
	public function cekData($nis) 
	{
		return $this->db->table('profil')->where(['nis'=>$nis])->get()->getResult();
	}
	public function cekBerita()
	{
		return $this->db->table('tb_new')->get()->getResult();
	}

}