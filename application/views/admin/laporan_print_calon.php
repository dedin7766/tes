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
  <center><h1>Laporan Data Calon Ketua Osis</h1></center>
  <br>
  <table class="table-data" border="1">
  	<thead>
  		 <tr>
        <th>No</th>
        <th>Nama Calon</th>
        <th>Gender</th>
        <th>Kelas</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($calon_ketua as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nama_calon ?></td>
        <td><?php echo $a->gender ?></td>
        <td><?php echo $a->kelas ?></td>
        <td><?php echo $a->alamat ?></td>
      
      </tr>
    <?php } ?>
</tbody>
</table>
<script type="text/javascript">
window.print();
</script>
</body>
</html>