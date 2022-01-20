<div class="page-header">
  <h3>Data Siswa yang Sudah Memilih / Vote</h3>
</div>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id = "table-datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Memilih Calon Ketua Osis</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($hasil as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nama_anggota ?></td>
        <td><?php echo $a->kelas ?> <?php echo $a->jurusan ?></td>
        <td><?php echo $a->nama_calon ?></td>
       
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
