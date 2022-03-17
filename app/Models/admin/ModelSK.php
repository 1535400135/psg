<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelSK extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getSMA()
	{
		return $this->db->table('tb_form2')
		->join('tb_form1', 'tb_form2.nis=tb_form1.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->select('tb_form2.file as file2, tb_form1.file as file1')
		->select('tb_sekolah.nama_skl as sekolah, tb_kepsek.namakep as kepsek, kabupaten.nama as kota')
		->where(['tb_sekolah.jenis'=>'SMA'])->get()->getResult();
	}

	public function getMA()
	{
		return $this->db->table('tb_form2')
		->join('tb_form1', 'tb_form2.nis=tb_form1.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->select('tb_form2.file as file2, tb_form1.file as file1')
		->select('tb_sekolah.nama_skl as sekolah, tb_kepsek.namakep as kepsek, kabupaten.nama as kota')
		->where(['tb_sekolah.jenis'=>'MA'])->get()->getResult();
	}

	public function getSMK()
	{
		return $this->db->table('tb_form2')
		->join('tb_form1', 'tb_form2.nis=tb_form1.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->select('tb_form2.file as file2, tb_form1.file as file1')
		->select('tb_sekolah.nama_skl as sekolah, tb_kepsek.namakep as kepsek, kabupaten.nama as kota')
		->where(['tb_sekolah.jenis'=>'SMK'])->get()->getResult();
	}

	public function getSLB()
	{
		return $this->db->table('tb_form2')
		->join('tb_form1', 'tb_form2.nis=tb_form1.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->select('tb_form2.file as file2, tb_form1.file as file1')
		->select('tb_sekolah.nama_skl as sekolah, tb_kepsek.namakep as kepsek, kabupaten.nama as kota')
		->where(['tb_sekolah.jenis'=>'SLB'])->get()->getResult();
	}
}