<?php namespace App\Controllers;

/**
 * 
 */
class penggunaan extends BaseController
{
	
	function index()
	{
		$data=[
			'submenu' => 'PENGGUNAAN',
			'menu' => 'HOWTO',
			'title' => 'Cara Penggunaan Sistem PSG',
			'isi'	=> 'howto',
		];
		echo view('layout/v_wrap', $data);
	}
}