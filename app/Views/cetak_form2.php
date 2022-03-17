<!DOCTYPE html>
<html>
<head>
	<title>Formulir 2 - <?= $nis ?> </title>
<meta charset="utf-8">
<style type="text/css">
body{
	font-family: Calibri;
}
h4{
	font-size: 16px;
	text-align: center;
}
p{
	font-size: 14px;
	padding-bottom: -10px;
}
table {
	border-collapse: collapse;
}
th{
	padding: 5px;
}
td {
	padding: 5px;
}
label{
	font-size: 10px;
}
</style>
</head>
<body>
<?php foreach ($data as $value) { ?>
<h4>REKAPITULASI PENGGUNAAN DANA PROGRAM SEKOLAH GRATIS PERIODE <?php echo $value['tahun']; echo '<br>';echo $value['tw']; ?></h4>
<br>
<table>
	<tbody>
		<tr>
			<td style="width: 200px;">Nama Sekolah</td>
			<td>:</td>
			<td><?= $value['nama_skl'] ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Kabupaten/Kota</td>
			<td>:</td>
			<td><?= $value['nama'] ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Jumlah Dana Diterima</td>
			<td>:</td>
			<td><?php echo number_to_currency($value['dana_diterima'], 'Rp. ') ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Diterima Tanggal</td>
			<td>:</td>
			<td><?= $value['tgl_in'] ?></td>
		</tr>
	</tbody>
</table>
<br><br>
<table border="1" style="text-align: center;">
	<tbody>
		<tr>
			<td style="width: 45px;">No.</td>
			<td style="width: 450px;">Penggunaan Dana</td>
			<td style="width: 185px;">Jumlah Dana</td>
		</tr>
	</tbody>
</table>
<table border="1">
	<tbody>
		<?php for ($i=1; $i < 26 ; $i++) { ?>
			<?php if (($value['dana'.$i])>0)  { ?>
		<tr>
			<td style="width: 45px;"><?= $i ?></td>
			<td style="width: 450px;"><?= $value['use'.$i] ?></td>
			<td style="width: 185px;"><?php echo number_to_currency($value['dana'.$i], 'Rp. ') ?></td>
		</tr>
			<?php } ?>
		<?php } ?>
	</tbody>
</table>
<table border="1">
	<tbody>
		<tr>
			<td style="width: 495px; text-align: center;">TOTAL DANA</td>
			<td style="width: 185px"><?php echo number_to_currency($dana, 'Rp. ') ?></td>
		</tr>
	</tbody>
</table>
<br>
<table>
	<tbody>
		<tr>
			<td style="width: 400px;">Menetahui/Menyetujui</td>
			<td>Palembang <?php echo date('d M Y') ?></td>
		</tr>
	</tbody>
</table>
<table>
	<tbody>
		<tr>
			<td style="width: 400px;">Kepala Sekolah <?= $value['nama_skl'] ?></td>
			<td>Bendahara <?= $value['nama_skl'] ?></td>
		</tr>
	</tbody>
</table>
<br><br><br><br>
<table>
	<tbody>
		<tr>
			<td style="width: 400px;"><?= $value['namakep'] ?></td>
			<td><?= $value['nama_ben'] ?></td>
		</tr>
	</tbody>
</table>
<?php } ?>
</body>
</html>