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
<center>Laporan Data Anggota Perputakaan Online</center>
</h3><br /><table class="table-data">
<tr>
<th>#</th>
<th>Nama</th>
<th>Email</th>
<th nowrap>Member Sejak</th>
<?php
$i = 1;
foreach ($anggota as $a) { ?>
<tr>
<th scope="row"><?= $i++; ?></th>
<td><?= $a['nama']; ?></td>
<td><?= $a['email']; ?></td>
<td><?= date('d F Y', $a['tanggal_input']); ?></td>
</tr>
<?php } ?>
</table>
<script type="text/javascript">
window.print();
</script>
</body></html>