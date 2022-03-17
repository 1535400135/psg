<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelBerita extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getBerita()
	{
		return $this->db->table('tb_new')->orderBy('nama','DESC')->get()->getResult();
	}

	function simpan($data)
	{
		return $this->db->table('tb_new')->insert($data);
	}

	function getBeritaEdit($id)
	{
		return $this->db->table('tb_new')->where('id', $id)->get()->getRow();
	}

	function edit($id, $data)
	{
		return $this->db->table('tb_new')->where('id', $id)->update($data);
	}

	function hapus($id)
	{
		return $this->db->table('tb_new')->where('id', $id)->delete();
	}
}