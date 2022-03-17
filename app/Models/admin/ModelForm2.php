<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelForm2 extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getSMA()
	{
		return $this->db->table('tb_form2')
		->join('tb_ff', 'tb_form2.nis=tb_ff.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->select('tb_form2.nis as nis, tb_form2.id as id, tb_kepsek.namakep as kepsek, tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota')
		->select('tb_ff.tgl_in as tgl, tb_ff.dana_diterima as dana_diterima')
		->select('tb_form2.file as file, tb_form2.digunakan as digunakan, tb_form2.saldo as saldo, tb_form2.valid as valid')
		->where(['tb_sekolah.jenis'=>'SMA'])->get()->getResult();
	}

	public function getSMK()
	{
		return $this->db->table('tb_form2')
		->join('tb_ff', 'tb_form2.nis=tb_ff.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->select('tb_form2.nis as nis, tb_kepsek.namakep as kepsek, tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota')
		->select('tb_ff.tgl_in as tgl, tb_ff.dana_diterima as dana_diterima')
		->select('tb_form2.file as file, tb_form2.digunakan as digunakan, tb_form2.saldo as saldo, tb_form2.valid as valid')
		->where(['tb_sekolah.jenis'=>'SMK'])->get()->getResult();
	}

	public function getMA()
	{
		return $this->db->table('tb_form2')
		->join('tb_ff', 'tb_form2.nis=tb_ff.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->select('tb_form2.nis as nis, tb_kepsek.namakep as kepsek, tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota')
		->select('tb_ff.tgl_in as tgl, tb_ff.dana_diterima as dana_diterima')
		->select('tb_form2.file as file, tb_form2.digunakan as digunakan, tb_form2.saldo as saldo, tb_form2.valid as valid')
		->where(['tb_sekolah.jenis'=>'MA'])->get()->getResult();
	}

	public function getSLB()
	{
		return $this->db->table('tb_form2')
		->join('tb_ff', 'tb_form2.nis=tb_ff.nis')
		->join('tb_sekolah', 'tb_form2.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->select('tb_form2.nis as nis, tb_kepsek.namakep as kepsek, tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota')
		->select('tb_ff.tgl_in as tgl, tb_ff.dana_diterima as dana_diterima')
		->select('tb_form2.file as file, tb_form2.digunakan as digunakan, tb_form2.saldo as saldo, tb_form2.valid as valid')
		->where(['tb_sekolah.jenis'=>'SLB'])->get()->getResult();
	}

	public function updateData($id, $data)
	{
		return $this->db->table('tb_form2')->where('id', $id)->update($data);
	}
}