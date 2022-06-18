<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=' . $title . '.xls');
header('Pragma: no-cache');
header("Expires: 0");

?>

<h3>
  <center>Laporan Data Anggota Perputakaan Online</center>
</h3>
<br />
<table class="table-data">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col" nowrap>Member Sejak</th>
    </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>
<script type="text/javascript">
  window.print();
</script>