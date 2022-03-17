<?php namespace App\Models\su;
use CodeIgniter\Model;

class Admin_model extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getKab()
	{
		return $this->db->table('kabupaten')->get()->getResult();
	}

	public function getAdmin()
	{
		return $this->db->table('tb_users')
		->select('nis, hak_akses')
		->where(['tb_users.hak_akses'=>'Administrator'])->get()->getResult();
	}

	public function simpan($data)
	{
		return $this->db->table('tb_users')->insert($data);
	}
}