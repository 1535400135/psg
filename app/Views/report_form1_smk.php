<!DOCTYPE html>
<html>
<head>
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
<h4 style="text-align: center;">IDENTITAS SEKOLAH PENERIMA BANTUAN HIBAH PROGRAM SEKOLAH GRATIS PERIODE <?php $date=date('Y-m-d'); echo $date; ?></h4>
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
			<td>HP</td>
			<td><?= $data->no_hp ?></td>
		</tr>
		<tr>
			<td style="width: 200px;">Jumlah Siswa dan Rombel</td>
			<td>:</td>
		</tr>
		<tr>
			<td>SMK Teknik</td>
		</tr>
	</tbody>
</table>
<table border="1">
	<tbody>
		<tr>
			<td style="width: 170px; text-align: center;">Kelas X Teknik</td>
			<td style="width: 170px; text-align: center;">Kelas XI Teknik</td>
			<td style="width: 170px; text-align: center;">Kelas XII Teknik</td>
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
			<td style="width: 56.66px"><label><?= $data->xtl ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xtp ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xtr ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xitl ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xitp ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xitr ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiitl ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiitp ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiitr ?></label></td>
			<td style="width: 85px"><label><?= $teknik ?></label></td>
			<td style="width: 85px"><label><?= $rt ?></label></td>
		</tr>
	</tbody>
</table>
<p>SMK Non Teknik</p>
<table border="1">
	<tbody>
		<tr>
			<td style="width: 170px; text-align: center;">Kelas X Non Teknik</td>
			<td style="width: 170px; text-align: center;">Kelas XI Non Teknik</td>
			<td style="width: 170px; text-align: center;">Kelas XII Non Teknik</td>
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
			<td style="width: 56.66px"><label><?= $data->xnl ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xnp ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xnr ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xinl ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xinp ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xinr ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiinl ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiinp ?></label></td>
			<td style="width: 56.66px"><label><?= $data->xiinr ?></label></td>
			<td style="width: 85px"><label><?= $non_teknik ?></label></td>
			<td style="width: 85px"><label><?= $rnt ?></label></td>
		</tr>
	</tbody>
</table>
<p>Jumlah Guru dan TU :</p>
<table border="1">
	<tbody>
		<tr>
			<td style="width: 170px; text-align: center;">Jenis Kelamin</td>
			<td style="width: 170px; text-align: center;">Status</td>
			<td style="width: 170px; text-align: center;">Pendidikan</td>
			<td style="width: 170px; text-align: center;">Produktif/Normatif</td>
		</tr>
	</tbody>
</table>
<table border="1" style="text-align: center; font-size: 12px;">
	<tbody>
		<tr>
			<td style="width: 85px"><label>L</label></td>
			<td style="width: 85px"><label>P</label></td>
			<td style="width: 85px"><label>PNS</label></td>
			<td style="width: 85px"><label>NON PNS</label></td>
			<td style="width: 56.66px"><label>SMA/D3</label></td>
			<td style="width: 56.66px"><label>S1</label></td>
			<td style="width: 56.66px"><label>S2</label></td>
			<td style="width: 85px"><label>Guru Produktif</label></td>
			<td style="width: 85px"><label>Guru Normatif</label></td>
		</tr>
	</tbody>
</table>
<table border="1" style="text-align: center; font-size: 12px;">
	<tbody>
		<tr>
			<td style="width: 85px"><label><?= $data->gl ?></label></td>
			<td style="width: 85px"><label><?= $data->gp ?></label></td>
			<td style="width: 85px"><label><?= $data->pns ?></label></td>
			<td style="width: 85px"><label><?= $data->non_pns ?></label></td>
			<td style="width: 56.66px"><label><?= $data->sma_d3 ?></label></td>
			<td style="width: 56.66px"><label><?= $data->s1 ?></label></td>
			<td style="width: 56.66px"><label><?= $data->s2 ?></label></td>
			<td style="width: 85px"><label><?= $data->gp ?></label></td>
			<td style="width: 85px"><label><?= $data->gn ?></label></td>
		</tr>
	</tbody>
</table>
<br>
<table>
	<tbody>
		<tr>
			<td style="width: 350px;"></td>
			<td>Palembang <?php echo date('D M Y') ?></td>
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
		<tr>
			<td style="width: 350px;"></td>
			<td>NIP. <?= $data->nik ?></td>
		</tr>
	</tbody>
</table>
<?php } ?>
</body>
</html>