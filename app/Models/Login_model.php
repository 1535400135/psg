<?php namespace App\Models;
use CodeIgniter\Model;

class Login_model extends Model
{
	public function __construct(){
		parent::__construct();
	}
	public function login($nis, $pass) 
	{
		return $this->db->table('tb_users')->where(['nis'=>$nis, 'pass'=>$pass])->get()->getRow();
	}
	public function cekData($nis) 
	{
		return $this->db->table('tb_sekolah')->where(['nis'=>$nis])->get()->getRow();
	}
}