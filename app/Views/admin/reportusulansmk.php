<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Usulan Dana</title>
<style type="text/css">
body{
	font-family: Calibri;
}
td{
	padding: 5px;
}
h4{
	font-size: 16px;
}
p{
	font-size: 14px;
	padding-bottom: -10px;
}
table {
	border-collapse: collapse;
}
label{
	font-size: 10px;
}
#heading{
	width: 100%;
	text-align: center;
	padding: 2px;
	border : 1px solid;
}
#body{
	width: 100%;
	text-align: center;
	border: 1px solid;
	padding: 5px;
}
#judul {
	width: 100%;
	text-align: center;
	font-family: Times New Roman;
	padding: 5px;
	font-style: bold;
	border : 1px solid #fff;
}
#isi{
	width: 100%;
	text-align: center;
	font-family: Times New Roman;
	padding: 5px;
}
</style>
</head>
<body>
<table id="heading">
	<tr>
		<td style="padding: 2px; font-size: 18px;">PEMERINTAH PROVINSI SUMATERA SELATAN</td>
	</tr>
	<tr>
		<td style="padding: 2px; font-size: 18px;">DINAS PENDIDIKAN</td>
	</tr>
	<tr>
		<td style="padding: 2px; font-size: 20px;"><b>MKKS SMK KOTA LUBUKLINGGAU</b></td>
	</tr>
	<tr>
		<td style="padding: 2px; font-size: 12px;">Alamat Lengkap</td>
	</tr>
	<tr>
		<td style="padding: 2px; font-size: 12px;">No Telp dan Kode POS</td>
	</tr>
	<tr>
		<td style="padding: 2px; font-size: 12px;"><i>e-mail MKKS</i></td>
	</tr>
</table>
<br><br>
<table id="judul">
	<tr>
		<td><h3>USULAN DANA PSG 2020</h3></td>
	</tr>
	<tr>
		<td><h3>PEMERINTAH PROVINSI SUMATERA SELATAN</h3></td>
	</tr>
</table>
<br>
<table border="1" id="body">
	<tr>
		<td style="width: 5%">No</td>
		<td style="width: 18%">Sekolah</td>
		<td style="width: 12%">Kecamatan</td>
		<td style="width: 18%">Bank Penyalur</td>
		<td style="width: 12%">Rekening PSG</td>
		<td style="width: 10%">Siswa Teknik</td>
		<td style="width: 10%">Siswa Non Teknik</td>
		<td style="width: 15%">Nama Kepala Sekolah</td>
	</tr>
</table>
<table border="1" id="isi">
<?php $no=1; foreach ($data as $value) { ?>
	<tr>
		<td style="width: 5%"><?= $no++ ?></td>
		<td style="width: 18%"><?= $value->sekolah ?></td>
		<td style="width: 12%"><?= $value->kecamatan ?></td>
		<td style="width: 18%"><?= $value->nama ?></td>
		<td style="width: 12%"><?= $value->nomor_rek ?></td>
		<td style="width: 10%"><?= $value->teknik ?></td>
		<td style="width: 10%"><?= $value->non_teknik ?></td>
		<td style="width: 15%"><?= $value->kepsek ?></td>
	</tr>
<?php } ?>
</table>
</body>
</html>