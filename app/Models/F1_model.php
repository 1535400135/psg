<?php namespace App\Models;
use CodeIgniter\Model;

class F1_model extends Model
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
		->where(['tb_sekolah.nis'=>$nis])->get()->getResult();
	}

	public function cekDataF1($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_form1', 'tb_sekolah.nis=tb_form1.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}

	public function getDataF1SMAMA($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_sma_ma', 'tb_sekolah.nis=tb_sma_ma.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where('tb_sekolah.nis', $nis)->get()->getResult();
	}

	public function getReportF1SMAMA($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_sma_ma', 'tb_sekolah.nis=tb_sma_ma.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getResult();
	}

	public function getReportF1SMK($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_smk', 'tb_sekolah.nis=tb_smk.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getResult();
	}

	public function getReportF1SLB($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('kabupaten', 'tb_sekolah.id_kab=kabupaten.id_kab')
		->join('tb_slb', 'tb_sekolah.nis=tb_slb.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getResult();
	}

	public function getRowF1SMAMA($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_sma_ma', 'tb_sekolah.nis=tb_sma_ma.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}

	// public function getRowF1SMK($nis)
	// {
	// 	return $this->db->table('tb_sekolah')
	// 	->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
	// 	->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
	// 	->join('tb_sma_ma', 'tb_sekolah.nis=tb_sma_ma.nis')
	// 	->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
	// 	->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	// }

	public function getRowF1SLB($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_slb', 'tb_sekolah.nis=tb_slb.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}

	public function getDataF1SMK($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_smk as a', 'tb_sekolah.nis=a.nis')
		->join('tb_guru as b', 'tb_sekolah.nis=b.nis')
		->select('tb_sekolah.nama_skl as sekolah,tb_kepsek.namakep as kepsek,tb_bendahara.nama_ben as bendahara')
		->select('a.id, a.tahun, a.tw, a.xtr as r1,a.xitr as r2,a.xiitr as r3, a.xnr as r4, a.xinr as r5, a.xiinr as r6')
		->select('a.xtl as a,a.xtp as b,a.xitl as c,a.xitp as d,a.xiitl as e,a.xiitp as f')
		->select('a.xnl as g,a.xnp as h,a.xinl as i,a.xinp as j,a.xiinl as k,a.xiinp as l')
		->select('b.gl as m,b.gp as n,b.sma_d3 as o,b.s1 as p,b.s2 as q,b.pns as r,b.non_pns as s,b.gpd as t,b.gn as u')
		->where(['tb_sekolah.nis'=>$nis])
		->get()->getResult();
	}

	public function getDataF1EditSMK($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_smk as a', 'tb_sekolah.nis=a.nis')
		->join('tb_guru as b', 'tb_sekolah.nis=b.nis')
		->select('tb_sekolah.nama_skl as sekolah,tb_kepsek.namakep as kepsek,tb_bendahara.nama_ben as bendahara')
		->select('a.id, a.tahun, a.tw, a.xtr as r1,a.xitr as r2,a.xiitr as r3, a.xnr as r4, a.xinr as r5, a.xiinr as r6')
		->select('a.xtl as a,a.xtp as b,a.xitl as c,a.xitp as d,a.xiitl as e,a.xiitp as f')
		->select('a.xnl as g,a.xnp as h,a.xinl as i,a.xinp as j,a.xiinl as k,a.xiinp as l')
		->select('b.gl as m,b.gp as n,b.sma_d3 as o,b.s1 as p,b.s2 as q,b.pns as r,b.non_pns as s,b.gpd as t,b.gn as u')
		->where(['a.id'=>$nis])
		->get()->getResult();
	}

	public function getRowF1EditSMK($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_smk as a', 'tb_sekolah.nis=a.nis')
		->join('tb_guru as b', 'tb_sekolah.nis=b.nis')
		->select('a.xtr as r1,a.xitr as r2,a.xiitr as r3, a.xnr as r4, a.xinr as r5, a.xiinr as r6')
		->select('a.xtl as a,a.xtp as b,a.xitl as c,a.xitp as d,a.xiitl as e,a.xiitp as f')
		->select('a.xnl as g,a.xnp as h,a.xinl as i,a.xinp as j,a.xiinl as k,a.xiinp as l')
		->select('b.gl as m,b.gp as n')
		->where(['a.id'=>$nis])
		->get()->getRow();
	}

	public function getRowF1SMK($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_smk as a', 'tb_sekolah.nis=a.nis')
		->join('tb_guru as b', 'tb_sekolah.nis=b.nis')
		->select('a.tahun, a.tw,a.xtr as r1,a.xitr as r2,a.xiitr as r3, a.xnr as r4, a.xinr as r5, a.xiinr as r6')
		->select('a.xtl as a,a.xtp as b,a.xitl as c,a.xitp as d,a.xiitl as e,a.xiitp as f')
		->select('a.xnl as g,a.xnp as h,a.xinl as i,a.xinp as j,a.xiinl as k,a.xiinp as l')
		->select('b.gl as m,b.gp as n')
		->where(['tb_sekolah.nis'=>$nis])
		->get()->getRow();
	}

	public function getDataF1SLB($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_slb', 'tb_sekolah.nis=tb_slb.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])
		->get()->getResult();
	}

	public function cekDataF1SMAMA($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_sma_ma', 'tb_sekolah.nis=tb_sma_ma.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}
	public function cekDataF1SMK($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_smk', 'tb_sekolah.nis=tb_smk.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}
	public function cekDataF1SLB($nis)
	{
		return $this->db->table('tb_sekolah')
		->join('tb_kepsek', 'tb_sekolah.nis=tb_kepsek.nis')
		->join('tb_bendahara', 'tb_sekolah.nis=tb_bendahara.nis')
		->join('tb_slb', 'tb_sekolah.nis=tb_slb.nis')
		->join('tb_guru', 'tb_sekolah.nis=tb_guru.nis')
		->where(['tb_sekolah.nis'=>$nis])->get()->getRow();
	}

	public function insertSiswa($db, $data)
	{
		return $this->db->table($db)->insert($data);
	}

	public function updateSiswa($db, $data, $id)
	{
		return $this->db->table($db)->where('id', $id)->update($data);
	}

	public function insertGuru($db_guru, $guru)
	{
		return $this->db->table($db_guru)->insert($guru);
	}

	public function updateGuru($db_guru, $guru, $nis, $thn, $tw)
	{
		return $this->db->table($db_guru)->where(['nis'=>$nis,'tahun'=>$thn,'tw'=>$tw])->update($guru);
	}

	public function insertDataUp($data)
	{
		return $this->db->table('tb_form1')->insert($data);
	}
	
}