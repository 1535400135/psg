<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelUsulan extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getKab()
	{
		return $this->db->table('kabupaten')->get()->getResultArray();
	}

	public function getTahun()
	{
		return $this->db->table('tb_form2')->select('tahun')->groupBy('tahun')->get()->getResultArray();
	}

	public function getTw()
	{
		return $this->db->table('tb_form2')->select('tw')->groupBy('tw')->get()->getResultArray();
	}

	public function getSMA()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah' , 'tb_form1.nis=tb_sekolah.nis')
		->join('tb_bank', 'tb_sekolah.id_bank=tb_bank.id')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('kecamatan', 'tb_sekolah.id_kec=kecamatan.id_kec')
		->select('tb_form1.nis as nis, tb_sekolah.nama_skl as sekolah')
		->select('tb_kepsek.namakep as kepsek, tb_bank.nama as nama')
		->select('kecamatan.nama as kecamatan, kabupaten.nama as kota')
		->select('tb_sekolah.nomor_rek as nomor_rek, tb_form1.jumlah as jumlah')
		->where(['tb_sekolah.jenis'=>'SMA'])->get()->getResult();
	}

	public function getSMK()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah' , 'tb_form1.nis=tb_sekolah.nis')
		->join('tb_bank', 'tb_sekolah.id_bank=tb_bank.id')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('kecamatan', 'tb_sekolah.id_kec=kecamatan.id_kec')
		->select('tb_form1.nis as nis, tb_sekolah.nama_skl as sekolah')
		->select('tb_kepsek.namakep as kepsek, tb_bank.nama as nama')
		->select('kecamatan.nama as kecamatan, kabupaten.nama as kota')
		->select('tb_sekolah.nomor_rek as nomor_rek, tb_form1.teknik as teknik, tb_form1.non_teknik as non_teknik')
		->where(['tb_sekolah.jenis'=>'SMK'])->get()->getResult();
	}

	public function getMA()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah' , 'tb_form1.nis=tb_sekolah.nis')
		->join('tb_bank', 'tb_sekolah.id_bank=tb_bank.id')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('kecamatan', 'tb_sekolah.id_kec=kecamatan.id_kec')
		->select('tb_form1.nis as nis, tb_sekolah.nama_skl as sekolah')
		->select('tb_kepsek.namakep as kepsek, tb_bank.nama as nama')
		->select('kecamatan.nama as kecamatan, kabupaten.nama as kota')
		->select('tb_sekolah.nomor_rek as nomor_rek, tb_form1.jumlah as jumlah')
		->where(['tb_sekolah.jenis'=>'MA'])->get()->getResult();
	}

	public function getSLB()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah' , 'tb_form1.nis=tb_sekolah.nis')
		->join('tb_bank', 'tb_sekolah.id_bank=tb_bank.id')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('kecamatan', 'tb_sekolah.id_kec=kecamatan.id_kec')
		->select('tb_form1.nis as nis, tb_sekolah.nama_skl as sekolah')
		->select('tb_kepsek.namakep as kepsek, tb_bank.nama as nama')
		->select('kecamatan.nama as kecamatan, kabupaten.nama as kota')
		->select('tb_sekolah.nomor_rek as nomor_rek, tb_form1.jumlah as jumlah')
		->where(['tb_sekolah.jenis'=>'SLB'])->get()->getResult();
	}

	public function getReport($id, $jenis)
	{
		return $this->db->table('tb_form2')
		->join('tb_form1', 'tb_form2.nis=tb_form1.nis')
		->join('tb_sekolah' , 'tb_form2.nis=tb_sekolah.nis')
		->join('tb_bank', 'tb_sekolah.id_bank=tb_bank.id')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('kecamatan', 'tb_sekolah.id_kec=kecamatan.id_kec')
		->select('tb_form2.nis as nis, tb_sekolah.nama_skl as sekolah')
		->select('tb_kepsek.namakep as kepsek, tb_bank.nama as nama')
		->select('kecamatan.nama as kecamatan, kabupaten.nama as kota')
		->select('tb_sekolah.nomor_rek as nomor_rek, tb_form1.jumlah as jumlah')
		->select('tb_form1.teknik as teknik, tb_form1.non_teknik as non_teknik')
		->where(['tb_sekolah.jenis'=>$jenis, 'tb_sekolah.id_kab'=>$id])->get()->getResult();
	}

	public function getReportAll($jenis)
	{
		return $this->db->table('tb_form2')
		->join('tb_form1', 'tb_form2.nis=tb_form1.nis')
		->join('tb_sekolah' , 'tb_form2.nis=tb_sekolah.nis')
		->join('tb_bank', 'tb_sekolah.id_bank=tb_bank.id')
		->join('tb_kepsek', 'tb_form2.nis=tb_kepsek.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('kecamatan', 'tb_sekolah.id_kec=kecamatan.id_kec')
		->select('tb_form2.nis as nis, tb_sekolah.nama_skl as sekolah')
		->select('tb_kepsek.namakep as kepsek, tb_bank.nama as nama')
		->select('kecamatan.nama as kecamatan, kabupaten.nama as kota')
		->select('tb_sekolah.nomor_rek as nomor_rek, tb_form1.jumlah as jumlah')
		->select('tb_form1.teknik as teknik, tb_form1.non_teknik as non_teknik')
		->where(['tb_sekolah.jenis'=>$jenis])->get()->getResult();
	}

	function getKota($id)
	{
		return $this->db->table('kabupaten')
		->select('nama')->where(['id_kab'=>$id])
		->get()->getRow();
	}
}