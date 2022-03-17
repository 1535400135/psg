<?php namespace App\Models\admin;
use CodeIgniter\Model;

class ModelLap extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getKab()
	{
		return $this->db->table('kabupaten')->get()->getResult();
	}

	function Laporan()
	{
		
	}

	function getLakiSMA($kab,$tahun,$tw)
	{
		if (empty($tahun)) {
			return $this->db->table('tb_sma_ma')->selectCount('tb_sma_ma.xl')->selectCount('tb_sma_ma.xil')->selectCount('tb_sma_ma.xiil')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_sma_ma.nis')->where(['tb_sma_ma.tw'=>$tw,'tb_sekolah.id_kab'=>$kab])->get()->getRow();
		} elseif (empty($tw)) {
			return $this->db->table('tb_sma_ma')->selectCount('xl')->selectCount('xil')->selectCount('xiil')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_sma_ma.nis')->where(['tb_sma_ma.tahun'=>$tahun,'tb_sekolah.id_kab'=>$kab])->get()->getRow();
		} elseif (empty($tahun) && empty($tw)) {
			return $this->db->table('tb_sma_ma')->selectCount('xl')->selectCount('xil')->selectCount('xiil')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_sma_ma.nis')->where(['tb_sekolah.id_kab'=>$kab])->get()->Row();
		} else {
			return $this->db->table('tb_sma_ma')->selectCount('xl')->selectCount('xil')->selectCount('xiil')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_sma_ma.nis')->where(['tb_sma_ma.tahun'=>$tahun,'tb_sma_ma.tw'=>$tw,'tb_sekolah.id_kab'=>$kab])
			->get()->getRow();
		}
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

	public function cetakDana($id='', $tahun='', $tw='')
	{
		if (($id='') && ($tahun='') && ($tw='')) {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->get()->getResult();
		} elseif (($tahun='') && ($tw='')) {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->where(['tb_sekolah.id_kab'=>$id])->get()->getResult();
		} elseif (($id='') && empty($tw='')) {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->where(['tb_ff.tahun'=>$tahun])->get()->getResult();
		} elseif (($tahun='') && ($id='')) {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->where(['tb_ff.tw'=>$tw])->get()->getResult();
		} elseif (empty($id)) {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->where(['tb_ff.tahun'=>$tahun,'tb_ff.tw'=>$tw])->get()->getResult();
		} elseif (empty($tahun)) {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->where(['tb_sekolah.id_kab'=>$id,'tb_ff.tw'=>$tw])->get()->getResult();
		} elseif (empty($tw)) {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->where(['tb_sekolah.id_kab'=>$id,'tb_ff.tahun'=>$tahun])->get()->getResult();
		} else {
			return $this->db->table('tb_ff')->select('tb_ff.nis, tb_sekolah.nama_skl, tb_ff.dana_diterima, tb_ff.tahun, tb_ff.tw, kabupaten.nama')
			->join('tb_sekolah', 'tb_sekolah.nis=tb_ff.nis')
			->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
			->where(['tb_sekolah.id_kab'=>$id,'tb_ff.tahun'=>$tahun,'tb_ff.tw'=>$tw])->get()->getResult();
		}
	}

}