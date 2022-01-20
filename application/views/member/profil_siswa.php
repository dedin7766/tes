
    
  <!-- /main banner -->


  <!-- what we do section -->
  <div class="what bg-li py-7" id="what">

          <?php if($this->session->flashdata('msg_g')){ ?>
                  <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong><br> <?php echo $this->session->flashdata('msg_g');?>
                  </div>
                <?php } ?>

                <?php if($this->session->flashdata('msg_b')){ ?>
                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success</strong><br> <?php echo $this->session->flashdata('msg_b');?>
                  </div>
                <?php } ?>

                <?php if(validation_errors()){ ?>
                  <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
                  </div>
                <?php } ?>
                      <?php if($this->session->flashdata('msg_berhasil')){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
                   </div>
                  <?php } ?>
                  <?php if($this->session->flashdata('msg_gagal')){ ?>
                    <div class="alert alert-warning alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Warning!</strong><br> <?php echo $this->session->flashdata('msg_gagal');?>
                    </div>
                  <?php } ?>
                  <?php if($this->session->flashdata('msg_hapus')){ ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_hapus');?>
                    </div>
                  <?php } ?>
              <section class="midd-w3 py-7" id="faq">
    <div class="container py-xl-7 py-lg-3">
      <div class="row">
        <div class="col-lg-9 about-right-faq">
          <form action="<?php echo base_url().'admin/update_anggota' ?>" method="post" enctype="multipart/form-data">
<?php foreach ($agt as $a){ ?>
<div class="page-header">
  <h3>Profil Anda</h3><hr>
  <img src="<?php echo base_url().'/assets/upload/'.$a->gambar; ?>" width="150" height="150" alt="gambar tidak ada" class="rounded-circle"><br><br>
<h4><b><?php echo $a->nama_anggota; ?></b> (<?php echo $a->username; ?>)</h4>
<i class="fa fa-circle text-success"></i> Online</br><br>
 <label>Nomor Induk Siswa <b><?php echo $a->nis; ?></b></label><br>
 <label>Gender <b><?php echo $a->gender; ?></b></label><br>
 <label>Tinggal di <b><?php echo $a->alamat; ?></b></label><br>
 <label>Kelas <b><?php echo $a->kelas; ?></b></label><br>
 <label>Jurusan <b><?php echo $a->jurusan; ?></b></label><br>
 <label>Nomor Telepon <b><?php echo $a->no_telp; ?></b></label><br>
 <label>Email <b><?php echo $a->email; ?></b></label><br>
  <hr>
</div>

  <div class="form-group">
 <a class="btn btn-primary btn-xs" href="<?php echo base_url().'member/edit_prof/'.$a->id_anggota; ?>"><i class="fa fa-cog"> Edit Profil</i></a>
 <input type="button" value="Kembali" class="btn btn-warning" onclick="window.history.go(-1)">
  </div>
  </form>
  <?php } ?>
</div>
</div>
</div>
</section>
        </div>
      
      </div>
    </div>
  </div>

  <!-- //what we do section -->

  <!-- middle -->
  
  <!-- //middle -->

  <!-- services -->
  <hr>
  <!-- //services -->

  <!-- stats -->
  
  <!-- //stats -->

  <!-- partners -->

  <!-- //partners -->














