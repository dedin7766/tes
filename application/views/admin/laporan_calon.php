<div class="page-header">
  <h3>Cetak Data Calon Ketua Osis</h3>
</di>
<a class="btn btn-default btn-md" href="<?php echo base_url().'admin/laporan_print_calon' ?>">
  <span class="glypicon glypicon-print"></span>
Print</a>
<a class="btn btn-warning btn-md" href="<?php echo base_url().'admin/laporan_pdf_calon' ?>">
  <span class="glypicon glypicon-print"></span>
Cetak PDF</a>
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
</div>