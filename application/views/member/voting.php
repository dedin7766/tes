
		
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
		<h2 class="tittle text-center font-weight-bold">E-Voting - Pemilihan Calon Ketua Osis</h2><hr>
		 <?php if ($chek['status'] == "Sudah Pilih"): ?>
		           	<h4 align="center">Terimakasih,Anda sudah memilih.</h4>
                 <?php else:?>
		<h4 align="center">Nama Anda: <?= $anggota['nama_anggota']; ?></h4>
		<h4 align="center">Kelas: <?= $anggota['kelas']; ?> <?= $anggota['jurusan']; ?></h4>
        <h4 align="center">Silahkan Tentukan Pilihan Anda</h4>
     
		<div class="container py-xl-5 py-lg-3">
			<form action="<?php echo base_url().'member/vote_act' ?>" method="post" enctype="multipart/form-data">
			<div class="row about-bottom-w3l text-center mt-4">
				<div class="col-lg-4 about-grid">
					<div class="about-grid-main">
						<img src="<?php echo base_url().'/assets/images/ft.png'; ?>" alt="" class="img-fluid"><br><br>

		             <a class="btn btn-success" href="<?= base_url() ?>member/calon_1"><font color="white">Lihat Visi & Misi</font></a>
						<div class="form-group">
							 <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
							  <input type="hidden" name="status" value="Sudah Pilih">
							<h4 class="my-4"><input type="radio" name="nama_calon" value="Muchammad Baswaidan Dwi Alfarizi">&nbsp;Muchammad Baswaidan</h4>
							<?php echo form_error('nama_calon '); ?>
						
							</div>
                
					</div>
				</div>
				<div class="col-lg-4 about-grid my-lg-0 my-5">

					<div class="about-grid-main">
							<img src="<?php echo base_url().'/assets/images/fg.png'; ?>" alt="" class="img-fluid">
							<br><br>

		            <a class="btn btn-success" href="<?= base_url() ?>member/calon_2"><font color="white">Lihat Visi & Misi</font></a>
						<div class="form-group">
							<h4 class="my-4"><input type="radio" name="nama_calon" value="Nadira Rahma Oktafiani">&nbsp;Nadira Rahma Oktafiani</h4>
							<?php echo form_error('nama_calon '); ?>
								

						</div>
					    <?php if ($chek['status'] == "Sudah Pilih"): ?>
		             <a class="btn btn-danger" href="" onclick="return confirm('MAAF , ANDA HANYA BISA MEMILIH 1 KALI')"><font color="white">Pilih</font></a>
                 <?php else:?>
                 <?php endif ?>
				</div>
			
			</div>
				<div class="col-lg-4 about-grid my-lg-0 my-5">
					<div class="about-grid-main">
							<img src="<?php echo base_url().'/assets/images/gg.png'; ?>" alt="" class="img-fluid">
							<br><br>

		             <a class="btn btn-success" href="<?= base_url() ?>member/calon_k"><font color="white">Lihat Visi & Misi</font></a>
						
						<div class="form-group">
							<h4 class="my-4"><input type="radio" name="nama_calon" value="Nurul Annisa Sholihah">&nbsp;Nurul Annisa Sholihah</h4>
							<?php echo form_error('nama_calon '); ?>
								

						</div>

						    <?php if ($chek['status'] == "Sudah Pilih"): ?>
		             <a class="btn btn-danger" href="" onclick="return confirm('MAAF , ANDA HANYA BISA MEMILIH 1 KALI')"><font color="white">Vote</font></a>
                 <?php else:?>
                 <?php endif ?>
				</div>

			  
			   <br>
			</div>
		</div>
<br><br>
                 <center><input type="submit" value="VOTE" class="btn btn-info btn-lg"></center>
                  <?php endif ?>
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

