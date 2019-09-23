<?php
require"config.php";
?>
<html>
<head>
	<title></title>
</head>
<body>
	<center>

	<h1>SENARAI PERALATAN DAN HARGA </h1>
	<table border="3" width="600" align="center">
<tr>
	<th>Bil</th>
	<th>Nama Produk</th>
	<th>Harga(RM)</th>
	<th>Perubahan</th>
	<th>Tindakan</th>

<?php
$senaraiperalatan=mysqli_query($conn,"SELECT * FROM peralatan ORDER BY id ASC");
$no=1;
while($senarai=mysqli_fetch_array($senaraiperalatan)){
?>
<tr>
	<td><?php echo $no;?></td>

	<td><?php echo $senarai['nama'];?></td>
	<td><?php echo $senarai['harga'];?></td>
<td>
<a href="delete.php?delete_id=<?php echo $senarai['id'];?> " onclick "return confirm('Anda Pasti?')">KEMAS KINI</a>
<td>
<a href="delete.php?delete_id=<?php echo $senarai['id'];?> " onclick "return confirm('Anda Pasti?')">HAPUS</a>
</td>
</tr>

<?php
$no++;
}
?>
	</table>
	<a href="add.php?kemaskini_id=<?php echo $senarai['id'];?>" onclick "return confirm('Anda Pasti?')">DAFTAR BARANG BARU</a>
</body>
</html>