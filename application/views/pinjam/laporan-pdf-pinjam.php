<!DOCTYPE html>
<html><head>
<title></title>
</head><body>
<style type="text/css">
.table-data {
width: 100%;
border-collapse: collapse;
table-layout: fixed;
}
.table-data th{
background-color: grey;
}
.table-data tr th,
.table-data tr td {
border: 1px solid black;
font-size: 11pt;
font-family: Verdana;
padding: 10px 10px 10px 10px;
}

h3 {
font-family: Verdana;
}
</style><h3>
<center>Laporan Data Buku Perputakaan Online</center>
</h3><br /><table class="table-data">
<tr>
<th>No</th>
<th>Nama Anggota</th>
<th>Judul Buku</th>
<th>Tanggal Pinjam</th>
<th>Tanggal Kembali</th>
<th>Tanggal Pengembalian</th>
<th>Total Denda</th>
<th>Status</th>
<?php
$no = 1;
foreach($laporan as $b){
?>
<tr>
<td scope="row"><?= $no++; ?></th>
<td><?= $b['nama']; ?></td>
<td><?= $b['judul_buku']; ?></td>
<td><?= $b['tgl_pinjam']; ?></td>
<td><?= $b['tgl_kembali']; ?></td>
<td><?= $b['tgl_pengembalian']; ?></td>
<td><?= $b['total_denda']; ?></td>
<td><?= $b['status']; ?></td>
</tr>
<?php }; ?>
</table>
<script type="text/javascript">
window.print();
</script>
</body></html>