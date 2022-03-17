<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
h3 {
	text-align: center;
}
li {
	padding: 5px;
	text-align: justify;
	font-size: 16px;
}
p {
	padding: 5px;
	text-align: justify;
	font-size: 16px;
}
td {
	padding: 5px;
	font-size: 16px;
}
#plg {
	padding-left: 450px;
	font-size: 16px;
}
</style>
</head>
<body>
<h3>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK</h3>
<br>
<p>Saya yang bertanda tangan dibawah ini :</p>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?= $data->namakep ?></td>
	</tr>
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><?= $data->nik ?></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td>Kepala Sekolah <?= $data->nama_skl ?></td>
	</tr>
	<tr>
		<td>Nomor Handphone</td>
		<td>:</td>
		<td><?= $data->nohp ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?= $data->alamat ?></td>
	</tr>
</table>
<ol>
	<li>Memang benar mendapatkan dana transfer dari Kegiatan Pembinaan dan Pengembangan SMA/SMK Negeri (Sekolah Gratis) Tahun Anggaran <?= $data->tahun ?> pada tanggal <?= $data->tgl_in ?> sebesar Rp. <?= $data->dana_diterima ?>, untuk keperluan operasional sekolah.</li>
	<li>Bersedia dan bertanggung jawab mewakili Bendahara Pengeluaran Pembantu untuk Kegiatan Pembinaan dan Pengembangan SMA/SMK Negeri (Sekolah Gratis) Tahun Anggaran <?= $data->tahun ?></li>
	<li>Bersedia mempertanggungjawabkan jumlah uang tersebut di atas dan menyampaikan SPJ Ringkas ke Kepala SKPD Dinas Pendidikan Provinsi Sumatera Selatan melalui Pejabat Pelaksana Teknik Kegiatan paling lambat 2 (dua) minggu setelah pencairan termasuk fotocopy pajak yang telah dilegalisir</li>
	<li>Bertanggungjawab penuh baik fisik maupun keuangan apabila terjadi ketekoran atau kerugian Negara atas penggunaan dana dimaksud</li>
	<li>Apabila dikemudian hari terdapat temua oleh Tim Pemeriksa Internal maupun Eksternal temuan tersebut disetor ke Kas Daerah Provinsi Sumatera Selatan Rekening <?= $data->nomor_rek ?>.</li>
</ol>
<p>Demikian Surat Pernyataan Pertanggung jawaban ini dibuat dengan sebenarnya dalam keadaan sadar dan tanpa paksaan dari pihak manapun untuk dapat dipergunakan sebagaimana mestinya.</p>
<p id="plg">Palembang <?= date('d M Y') ?><br>
Yang Membuat Pernyataan<br>
<br><br><br>
Nama Kepsek</p>
</body>
</html>