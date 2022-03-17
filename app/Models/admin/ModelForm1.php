<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelForm1 extends Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getSMA()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah', 'tb_form1.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('tb_guru', 'tb_form1.nis=tb_guru.nis')
		->join('tb_sma_ma', 'tb_form1.nis=tb_sma_ma.nis')
		->select('tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota, tb_kepsek.namakep as kepsek')
		->select('tb_form1.nis as nis, tb_form1.jumlah as jumlah, tb_form1.id as id')
		->select('tb_sma_ma.xl as xl, tb_sma_ma.xil as xil, tb_sma_ma.xiil as xiil')
		->select('tb_sma_ma.xp as xp, tb_sma_ma.xip as xip, tb_sma_ma.xiip as xiip')
		->select('tb_sma_ma.xr as xr, tb_sma_ma.xir as xir, tb_sma_ma.xiir as xiir')
		->select('tb_form1.file as file, tb_form1.guru as guru, tb_form1.tgl_in as tgl, tb_form1.id as id')
		->select('tb_sma_ma.tahun as tahun, tb_sma_ma.tw as tw')
		->select('tb_form1.valid as valid')
		->where(['tb_sekolah.jenis'=>'SMA'])
		->get()->getResultArray();
	}

	public function getMA()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah', 'tb_form1.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('tb_guru', 'tb_form1.nis=tb_guru.nis')
		->join('tb_sma_ma', 'tb_form1.nis=tb_sma_ma.nis')
		->select('tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota, tb_kepsek.namakep as kepsek')
		->select('tb_form1.nis as nis, tb_form1.jumlah as jumlah')
		->select('tb_sma_ma.xl as xl, tb_sma_ma.xil as xil, tb_sma_ma.xiil as xiil')
		->select('tb_sma_ma.xp as xp, tb_sma_ma.xip as xip, tb_sma_ma.xiip as xiip')
		->select('tb_sma_ma.xr as xr, tb_sma_ma.xir as xir, tb_sma_ma.xiir as xiir')
		->select('tb_form1.file as file, tb_form1.guru as guru, tb_form1.tgl_in as tgl, tb_form1.id as id')
		->select('tb_sma_ma.tahun as tahun, tb_sma_ma.tw as tw')
		->select('tb_form1.valid as valid')
		->where(['tb_sekolah.jenis' => 'MA'])
		->get()->getResultArray();
	}

	public function getSMK()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah', 'tb_form1.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('tb_guru', 'tb_form1.nis=tb_guru.nis')
		->join('tb_smk', 'tb_form1.nis=tb_smk.nis')
		->select('tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota, tb_form1.nis as nis')
		->select('tb_smk.xtr as xtr, tb_smk.xitr as xitr, tb_smk.xiitr as xiitr')
		->select('tb_smk.xnr as xnr, tb_smk.xinr as xinr, tb_smk.xiinr as xiinr')
		->select('tb_form1.guru as guru, tb_form1.valid as valid, tb_form1.tgl_in as tgl, tb_form1.file as file, tb_form1.id as id')
		->select('tb_form1.teknik as teknik, tb_form1.non_teknik as non_teknik')
		->select('tb_smk.tahun as tahun, tb_smk.tw as tw')
		->where(['tb_sekolah.jenis' => 'SMK'])
		->get()->getResultArray();
	}

	public function getSLB()
	{
		return $this->db->table('tb_form1')
		->join('tb_sekolah', 'tb_form1.nis=tb_sekolah.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_kepsek', 'tb_form1.nis=tb_kepsek.nis')
		->join('tb_guru', 'tb_form1.nis=tb_guru.nis')
		->join('tb_slb', 'tb_form1.nis=tb_slb.nis')
		->select('tb_sekolah.nama_skl as sekolah, kabupaten.nama as kota, tb_form1.nis as nis')
		->select('tb_slb.il as il, tb_slb.iil as iil, tb_slb.iiil as iiil')
		->select('tb_slb.ivl as ivl, tb_slb.vl as vl, tb_slb.vil as vil')
		->select('tb_slb.viil as viil, tb_slb.viiil as viiil, tb_slb.ixl as ixl')
		->select('tb_slb.xl as xl, tb_slb.xil as xil, tb_slb.xiil as xiil')
		->select('tb_slb.ip as ip, tb_slb.iip as iip, tb_slb.iiip as iiip')
		->select('tb_slb.ivp as ivp, tb_slb.vp as vp, tb_slb.vip as vip')
		->select('tb_slb.viip as viip, tb_slb.viiip as viiip, tb_slb.ixp as ixp')
		->select('tb_slb.xp as xp, tb_slb.xip as xip, tb_slb.xiip as xiip')
		->select('tb_slb.ir as ir, tb_slb.iir as iir, tb_slb.iiir as iiir')
		->select('tb_slb.ivr as ivr, tb_slb.vr as vr, tb_slb.vir as vir')
		->select('tb_slb.viir as viir, tb_slb.viiir as viiir, tb_slb.ixr as ixr')
		->select('tb_slb.xr as xr, tb_slb.xir as xir, tb_slb.xiir as xiir')
		->select('tb_form1.valid as valid, tb_form1.tgl_in as tgl, tb_form1.jumlah as jumlah, tb_form1.guru as guru, tb_form1.id as id')
		->select('tb_slb.tahun as tahun, tb_slb.tw as tw')
		->where(['tb_sekolah.jenis' => 'SLB'])
		->get()->getResultArray();
	}

	public function updateData($id, $data)
	{
		return $this->db->table('tb_form1')->where('id', $id)->update($data);
	}

}