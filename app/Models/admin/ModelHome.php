<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelHome extends Model
{
	public function __construct(){
		parent::__construct();
	}

	function getSekolah() 
	{
		return $this->db->table('tb_sekolah')->countAll();
	}
	function getForm1($tahun, $tw)
	{
		return $this->db->table('tb_form1')->selectCount('id')->where(['tahun'=>$tahun,'tw'=>$tw])->get()->getRow();
	}
	function getForm2($tahun, $tw)
	{
		return $this->db->table('tb_form2')->selectCount('id')->where(['tahun'=>$tahun,'tw'=>$tw])->get()->getRow();
	}
	function getSK()
	{
		return $this->db->table('tb_sk')->countAll();
	}

	public function cekBerita()
	{
		return $this->db->table('tb_new')->get()->getResult();
	}

	public function getDanaFull($tahun, $tw)
	{
		return $this->db->table('tb_ff')->selectSum('dana_diterima')->where(['tahun'=>$tahun,'tw'=>$tw])->get()->getRow();
	}

	public function getTahun()
	{
		return $this->db->table('tb_form2')->selectMax('tahun')->get()->getRow();
	}

	public function getTw()
	{
		return $this->db->table('tb_form2')->select('tw')->orderBy('id', 'DESC')->get()->getRow();
	}

	public function getDana($id, $tahun, $tw)
	{
		return $this->db->table('tb_ff')->selectSum('dana_diterima')
		->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
		->where(['tb_sekolah.id_kab'=>$id,'tb_ff.tahun'=>$tahun,'tb_ff.tw'=>$tw])->get()->getRow();
	}

}