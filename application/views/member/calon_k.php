
		
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
		<h2 class="tittle text-center font-weight-bold">Visi & Misi Calon Ketua Osis</h2><hr>
		<div class="container py-xl-5 py-lg-3">
			<form action="<?php echo base_url().'member/vote_act' ?>" method="post" enctype="multipart/form-data">
			<div class="row about-bottom-w3l text-center mt-4">
				<div class="col-lg-14 about-grid">
					<div class="about-grid-main">
						<h4 class="my-4">&nbsp;Nurul Annisa Sholihah & Nova Tika Ramadhanti</h4>
						<img src="<?php echo base_url().'/assets/images/c3.png'; ?>" alt="" class="img-fluid">
						<div class="form-group"><br>
							<table border="0" >
								<thead>
									<tr>
										<tr>
											<th>Visi</th>
											<th>Misi </th>
										</tr>
									</thead>
									<tbody>

										<tr>

											<td>
Menjadikan siswa/i SMA NEGERI 2 KLARI sebagai siswa/i yang berprestasi, kreatif, disiplin serta peduli terhadap lingkungan sekitar yang dilandasi iman dan taqwa. 
.</td>
				   <td><br><hr>1.	Meningkatkan keimanan dan ketaqwaan kepada Tuhan YME.							<br><hr>
											2.	Meningkatkan kreatifitas, minat dan bakat yang dimiliki oleh siswa/i SMA NEGERI 2 KLARI. 
											<br><hr>
											3.	Meningkatkan kedisiplinan siswa/i SMA NEGERI 2 KLARI.
											<br><hr>
											4.	Meningkatkan kesadaran siswa/i dalam menjaga lingkungan sekolah.</td>      
										</tr>
									</tbody>
								</table>

							</div>


					</div>
				</div>
		
				

		</div>
		<center><a href="<?= base_url() ?>member/voting" class="btn button-style button-style-2 mt-sm-5 mt-4">Vote Disini</a></center>
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

