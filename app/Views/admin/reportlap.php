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
	border: 1px solid;
	padding: 5px;
}
#judul {
	width: 100%;
	text-align: center;
	font-family: Times New Roman;
	font-size: 12px;
	padding: 5px;
	font-style: bold;
	border : 1px solid #fff;
}
img{
	width: 75px;
	height: 95px;
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
</table>
<br><br>
<table id="judul">
	<tr>
		<td><h3>Laporan Dana PSG</h3></td>
	</tr>
</table>
<br>
<table border="1" id="body">
	<thead>
		<tr>
			<th style="width: 5%">No</th>
			<th style="width: 35%">Sekolah</th>
			<th style="width: 20%">Kabupaten</th>
			<th style="width: 10%">Tahun</th>
			<th style="width: 10%">Triwulan</th>
			<th style="width: 20%">Dana</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; $total=0; foreach ($data as $value) { ?>
			<tr>
				<td style="width: 5%"><?= $no++.'.' ?></td>
				<td style="width: 35%"><?= $value->nis.' - '.$value->nama_skl ?></td>
				<td style="width: 20%"><?= $value->nama ?></td>
				<td style="width: 10%"><?= $value->tahun ?></td>
				<td style="width: 10%"><?= $value->tw ?></td>
				<td style="width: 20%"><?php echo "Rp. ".number_format($value->dana_diterima, 0,'','.'); $total=$total+$value->dana_diterima; ?></td>
			</tr>
		<?php } ?>
	</tbody>
    <tfoot>
        <tr>
            <th colspan="5">Total Dana Diterima</th>
            <th><?= "Rp. ".number_format($total,0,'','.') ?></th>
        </tr>
    </tfoot>
</table>
</body>
</html>