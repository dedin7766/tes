<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <style type="text/css">
  .table-data{
    width: 100%;
    border-collapse: collapse;
  }

  .table-data tr th.
  .table-data tr td{
    border: 1px solid black;
    font-size: 10pt;
  }
  </style>
  <center><h1>Laporan Data Vote</h1></center>
  <br>
  <table class="table-data" border="1">
    <thead>
       <tr>
        <th>No</th>
        <th>Nama Calon Ketua Osis</th>
        <th>Gender</th>
        <th>Kelas</th>
        <th>Jumlah Suara yang Diperolah</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($calon_ketua as $a) {
      ?>
      <tr align="center">
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nama_calon ?></td>
        <td><?php echo $a->gender ?></td>
        <td><?php echo $a->kelas ?></td>
         <?php if ($a->id_calon == "1"): ?>
                  <td><?php echo $count3; ?></td>
                   <?php elseif ($a->id_calon == "2"): ?>
                  <td><?php echo $count2; ?></td>
                    <?php elseif ($a->id_calon == "3"): ?>
                      <td><?php echo $count; ?></td>
                 <?php endif ?>
      
      </tr>
  <?php
  }
  ?>
</tbody>
</table>
<script type="text/javascript">
window.print();
</script>
</body>
</html>