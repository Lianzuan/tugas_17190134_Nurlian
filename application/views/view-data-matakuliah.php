<html>
<head>
	<title>Tampil Data Matakuliah</title>
</head>
<body>
<center>
<table>
	<tr>
		<th colspan="3">
			Tampil Data Mata Kuliah
		</th>
	</tr>
	<tr>
		<th colspan="3">
			<hr>
		</th>
	</tr>
	<tr>
		<th>Kode MTK</th>
		<td>:</td>
		<td>
			<?= $kode?>
			</td>
		</tr>
	<tr>
		<th>Nama MTK</th>
		<td>:</td>
		<td>
			<?= $nama ?>
		</td>
	</tr>
	<tr>
		<th>SKS</th>
		<td>:</td>
		<td>
			<?=$sks ?>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<a href="http://localhost/pustaka/matakuliah"> Kembali</a>
		</td>
	</tr>
</table>
</center>
</body>
</html>