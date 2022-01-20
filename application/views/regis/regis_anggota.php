<div class="page-header">
  <h3>Registrasi</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
<form action="<?php echo base_url().'regis/regis_anggota_act' ?>" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" name="nama_anggota" class="form-control">
      <?php echo form_error('nama_anggota'); ?>
    </div>
      <div class="form-group">
      <label>Kelas / Jabatan</label>
      <select name="kelas" class="form-control">
         <option value="">-Pilih-</option>
          <option value="Guru">Guru</option>
        <option value="X">X</option>
        <option value="XII">XI</option>
        <option value="XII">XII</option>
      </select>
      <?php echo form_error('gender'); ?>
    </div>
  <div class="form-group">
      <label>Jurursan</label>
      <select name="jurusan" class="form-control">
         <option value="">-Pilih-</option>
        <option value="IPA 1">IPA 1</option>
        <option value="IPA 2">IPA 2</option>
        <option value="IPA 3">IPA 3</option>
        <option value="IPS 1">IPS 1</option>
        <option value="IPS 2">IPS 2</option>
        <option value="IPS 3">IPS 3</option>
      </select>
      <?php echo form_error('gender'); ?>
    </div>
  
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control">
      <?php echo form_error('username'); ?>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
      <a href="#" class="btn btn-warning" onclick="window.history.go(-1)"> Kembali</a>   
    </div>
  </div>
</form>
