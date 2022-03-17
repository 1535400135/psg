<?php namespace App\Controllers;
use CodeIgniter\Controller;

class contoh extends BaseController
{
	public function contoh()
	{
		$contoh1 = $this->request->getPost('contoh');
		$harga_str = preg_replace("/[^0-9]/", "", $contoh1);
		var_dump($harga_str);
		$harga_int = (int) $harga_str;
		echo $harga_int;
		echo $contoh1;
		
		
	}


}