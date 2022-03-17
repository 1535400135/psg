<?php namespace App\Models;
use CodeIgniter\Model;

class F2_model extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function cekSesi($nis)
	{
		return $this->db->table('sesi')->where(['nis' => $nis])->get()->getRow();
	}

	public function cekData($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_form1', 'tb_sekolah.nis=tb_form1.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}

	public function cekDataValidF2($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_form2', 'tb_sekolah.nis=tb_form2.nis')
		->select('tb_form2.valid')
		->where(['tb_sekolah.nis'=>$nis])
		->get()->getRow();
	}

	public function getInfo($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->select('tb_sekolah.nama_skl as sekolah, tb_kepsek.namakep as kepsek')
		->where(['tb_sekolah.nis'=>$nis])
		->get()->getResult();
	}

	public function getF2($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_ff', 'tb_sekolah.nis=tb_ff.nis')
		->where(['tb_sekolah.nis'=>$nis])
		->get()->getResultArray();
	}

	public function cekF1Valid($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_form1', 'tb_sekolah.nis=tb_form1.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}

	public function getDataF2($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_ff', 'tb_sekolah.nis=tb_ff.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRowArray();
	}

	public function cekDataF2($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_ff', 'tb_sekolah.nis=tb_ff.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}

	public function insertData($data)
	{
		return $this->db->table('tb_ff')->insert($data);
	}

	public function insertF2($data)
	{
		return $this->db->table('tb_form2')->insert($data);
	}

	public function cetakReport($nis)
	{
		return $this->db->table('tb_ff')
		->join('tb_sekolah', 'tb_ff.nis=tb_sekolah.nis')
		->join('tb_kepsek', 'tb_ff.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_ff.nis=tb_bendahara.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->where(['tb_ff.nis'=>$nis])->get()->getResultArray();
	}
}