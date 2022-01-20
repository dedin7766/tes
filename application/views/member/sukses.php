<script>
      alert('Terimakasih,Anda Sukses Memilih Calon Ketua Osis.');
      document.location.href = 'http://localhost/web_sekolah/member/logout';
    </script>";
  
    
  <!-- /main banner -->


  <!-- what we do section -->
  <div class="what bg-li py-5" id="what">

 <?php if ($chek['status'] == "Sudah Pilih"): ?>
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
                <h4 align="center">Terimakasih,Anda sudah memilih.</h4><br>

              <table id="example1" class="table table-bordered table-striped" align="center">
                <thead>
              <tr align="center">
            <th>NIS</th>
            <th>Nama Anda</th>
            <th>Pilihan Anda</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($hasil as $a) {
            ?>
            <tr align="center">
              <td><?php echo $a->nis ?></td>
              <td><?php echo $a->nama_anggota ?></td>
              <td><?php echo $a->nama_calon ?></td>
             
            </tr>
          <?php } ?>
             </form>
              </table></center>
     <?php else:?>
                 <h4 align="center">Anda belum memilih.</h4>

        <?php endif ?>
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














