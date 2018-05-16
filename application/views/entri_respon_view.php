<html>
<head>
<title>Demo Model</title>
</head>
<body>
<h2>Entri Data Sukses</h2>
<p>Bars data berikut telah ditambahkan ke tabel</p>

<table border="1">
<tr>
	<th>NIM</th>
	<th>Nama Mahasiswa</th>
	<th>Prodi</th>
</tr>
<tr>
	<td><?php echo $model->nim; ?></td>
	<td><?php echo $model->nama; ?></td>
	<td><?php echo $model->prodi; ?></td>
</tr>
</body>
</html>