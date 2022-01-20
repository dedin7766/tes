
    
  <!-- /main banner -->


  <!-- what we do section -->
  <div class="what bg-li py-5" id="what">
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
    <h2 class="tittle text-center font-weight-bold">E-Voting - Quick Count</h2><hr>
    <div class="container py-xl-5 py-lg-3">
      <form action="<?php echo base_url().'member/vote_act' ?>" method="post" enctype="multipart/form-data">
      <div class="row about-bottom-w3l text-center mt-4">
        <div class="col-lg-4 about-grid">
          <div class="about-grid-main">
            <img src="<?php echo base_url().'/assets/images/1.png'; ?>" alt="" class="img-fluid">
            <div class="form-group">
               <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
              <h4 class="my-4">Reynanda Anggara Gita</h4><hr>
              <?php echo form_error('nama_calon '); ?>
            </div>
               <h4>Total Suara Masuk</h4>
            <h3 class="w3ls_pvt-title"><span><?php echo $count3; ?></span></h3>
            <h4>Suara</h4>
              </div>
        </div>
        <div class="col-lg-4 about-grid my-lg-0 my-5">
          <div class="about-grid-main">
              <img src="<?php echo base_url().'/assets/images/2.png'; ?>" alt="" class="img-fluid">
            <div class="form-group">
              <h4 class="my-4">M.Abdul Aziz</h4><hr>
              <?php echo form_error('nama_calon '); ?>
            </div>
               <h4>Total Suara Masuk</h4>
            <h3 class="w3ls_pvt-title"><span><?php echo $count2; ?></span></h3>
            <h4>Suara</h4>
            </div>
      
      </div>
        <div class="col-lg-4 about-grid my-lg-0 my-5">
          <div class="about-grid-main">
              <img src="<?php echo base_url().'/assets/images/3.png'; ?>" alt="" class="img-fluid">
            <div class="form-group">
              <h4 class="my-4">Alfian Ferrari</h4><hr>
              <?php echo form_error('nama_calon '); ?>
            </div>
             <h4>Total Suara Masuk</h4>
            <h3 class="w3ls_pvt-title"><span><?php echo $count; ?></span></h3>
            <h4>Suara</h4>
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













