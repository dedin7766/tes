
<div class="page-header">
  <h3>Data Calon Ketua Osis</h3>
</div>

<a href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Calon Ketua Osis</a>
<br><br>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id = "table-datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Calon</th>
        <th>Gender</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Jumlah Suara yang Diperolah</th>
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
         <?php if ($a->id_calon == "1"): ?>
                  <td><?php echo $count; ?></td>
                   <?php elseif ($a->id_calon == "2"): ?>
                  <td><?php echo $count2; ?></td>
                    <?php elseif ($a->id_calon == "3"): ?>
                      <td><?php echo $count3; ?></td>
                 <?php endif ?>
      
      
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>

