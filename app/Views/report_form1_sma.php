<!DOCTYPE html>
<html>
<head>
<title>Formulir 1 - <?php foreach ($data as $value) { echo $value->nama_skl; } ?></title>
<style type="text/css">
body{
	font-family: Calibri;
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
td {
	padding: 5px;
}
label{
	font-size: 10px;
}
</style>
</head>
<body>
<h4 style="text-align: center;">IDENTITAS SEKOLAH PENERIMA BANTUAN HIBAH PROGRAM SEKOLAH GRATIS PERIODE <?php echo $tahun; echo "<br>"; echo $tw; ?></h4>
<br>
<?php foreach ($data as $data) { ?>
<table>
	<tbody>
		<tr>
			<td style="width: 200px;">Nama Sekolah</td>
			<td>:</td>
			<td><?= $data->nama_skl ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Kabupaten/Kota</td>
			<td>:</td>
			<td><?= $data->nama ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Nama Kepala Sekolah</td>
			<td>:</td>
			<td><?= $data->namakep ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Nomor Telepon/HP</td>
			<td>:</td>
			<td><?= $data->notlp ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Nama Bendahara</td>
			<td>:</td>
			<td style="padding-right: 16px;"><?= $data->nama_ben ?></td>
			<td>HP. </td>
			<td><?= $data->no_hp ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Jumlah Siswa dan Rombel</td>
			<td>:</td>
		</tr>
		<tr>
			<td>SDLB</td>
		</tr>
	</tbody>
</table>
<table border="1">
	<tbody>
		<tr>
			<td style="width: 170px; text-align: center;">Kelas X</td>
			<td style="width: 170px; text-align: center;">Kelas XI</td>
			<td style="width: 170px; text-align: center;">Kelas XII</td>
			<td style="width: 170px; text-align: center;">TOTAL</td>
		</tr>
	</tbody>
</table>
<table border="1" style="text-align: center; font-size: 12px;">
	<tbody>
		<tr>
			<td style="width: 56.66px"><label>L</label></td>
			<td style="width: 56.66px"><label>P</label></td>
			<td style="width: 56.66px"><label>Rombel</label></td>
			<td style="width: 56.66px"><label>L</label></td>
			<td style="width: 56.66px"><label>P</label></td>
			<td style="width: 56.66px"><label>Rombel</label></td>
			<td style="width: 56.66px"><label>L</label></td>
			<td style="width: 56.66px"><label>P</label></td>
			<td style="width: 56.66px"><label>Rombel</label></td>
			<td style="width: 85px"><label>Siswa</label></td>
			<td style="width: 85px"><label>Rombel</label></td>
		</tr>
	</tbody>
</table>
<table border="1" style="text-align: center; font-size: 12px;">
	<tbody>
		<tr>
			<td style="width: 56.66px"><label><?= $data->xl ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xp ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xr ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xil ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xip ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xir ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiil ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiip ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiir ?></label></td>
			<td style="width: 85px"><label><?= $siswa ?></label></td>
			<td style="width: 85px"><label><?= $rombel ?></label></td>
		</tr>
	</tbody>
</table>
<p>Jumlah Guru dan TU :</p>
<table border="1">
	<tbody>
		<tr>
			<td style="width: 226.66px; text-align: center;">Jenis Kelamin</td>
			<td style="width: 226.66px; text-align: center;">Status</td>
			<td style="width: 226.66px; text-align: center;">Pendidikan</td>
		</tr>
	</tbody>
</table>
<table border="1" style="text-align: center; font-size: 12px;">
	<tbody>
		<tr>
			<td style="width: 113.33px"><label>L</label></td>
			<td style="width: 113.33px"><label>P</label></td>
			<td style="width: 113.33px"><label>PNS</label></td>
			<td style="width: 113.33px"><label>NON PNS</label></td>
			<td style="width: 75.55px"><label>SMA/D3</label></td>
			<td style="width: 75.55px"><label>S1</label></td>
			<td style="width: 75.55px"><label>S2</label></td>
		</tr>
	</tbody>
</table>
<table border="1" style="text-align: center; font-size: 12px;">
	<tbody>
		<tr>
			<td style="width: 113.33px"><label><?= $data->gl ?></label></td>
			<td style="width: 113.33px"><label><?= $data->gp ?></label></td>
			<td style="width: 113.33px"><label><?= $data->pns ?></label></td>
			<td style="width: 113.33px"><label><?= $data->non_pns ?></label></td>
			<td style="width: 75.55px"><label><?= $data->sma_d3 ?></label></td>
			<td style="width: 75.55px"><label><?= $data->s1 ?></label></td>
			<td style="width: 75.55px"><label><?= $data->s2 ?></label></td>
		</tr>
	</tbody>
</table>
<br>
<table>
	<tbody>
		<tr>
			<td style="width: 350px;"></td>
			<td>Palembang <?php echo date('d M Y') ?></td>
		</tr>
	</tbody>
</table>
<table>
	<tbody>
		<tr>
			<td style="width: 350px;"></td>
			<td>Kepala Sekolah <?= $data->nama_skl ?></td>
		</tr>
	</tbody>
</table>
<br><br><br><br>
<table>
	<tbody>
		<tr>
			<td style="width: 350px;"></td>
			<td><?= $data->namakep ?></td>
		</tr>
	</tbody>
</table>
<?php } ?>
</body>
</html>