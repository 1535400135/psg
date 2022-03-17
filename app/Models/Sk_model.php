<?php namespace App\Models;
use CodeIgniter\Model;

class Sk_model extends Model
{

	public function __construct(){
		parent::__construct();
	}

	public function cekData($nis)
	{
		return $this->db->table('tb_form2 as a')
		->join('tb_form1 as b', 'a.nis=b.nis')
		->select('a.id, a.nis, a.tahun, a.tw, b.tahun as tahunf1, b.tw as twf1, a.valid, b.valid as validf1')
		->where(['a.nis'=>$nis])->orderBy('a.nis', 'desc')->get()->getRow();
	}

	public function getData($nis)
	{
		return $this->db->table('tb_form2 as a')
		->join('tb_sekolah as b', 'a.nis=b.nis')
		->join('tb_kepsek as c', 'a.nis=c.nis')
		->join('tb_ff as d', 'a.nis=d.nis')
		->select('c.namakep, b.nama_skl, c.nik, c.nohp, c.alamat, a.tahun, a.tw, b.nomor_rek, d.dana_diterima, d.tgl_in')
		->where(['a.nis'=>$nis])->orderBy('a.nis', 'desc')->get()->getRow();
	}
}