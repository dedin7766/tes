

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

  <title>Login - SMAN 1 KLARI</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url().'assets4/style.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>

  
</head>

<body>
                      <?php if($this->session->flashdata('msg_b')){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Sukses Registrasi,Silahkan Login dengan Username dan Password Anda.</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
                   </div>
                  <?php } ?>

                 <?php if($this->session->flashdata('msg_bb')){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success</strong><br> <?php echo $this->session->flashdata('msg_bb');?>
                   </div>
                  <?php } ?>
  <form name="login-form" class="login-form" action="<?php echo base_url().'login_siswa/login' ?>" method="post">
  
    <div class="header">
    <h1>Login</h1>
    
     <a href="<?php echo base_url().'index.php'; ?>"><span>SMAN 1 KLARI</span></a>
    </div>
  
    <div class="content">
    <input name="username" type="text" class="input username" placeholder="Username" />
    <div class="user-icon"></div>
    <input name="password" type="password" class="input password" placeholder="Password" />
    <div class="pass-icon"></div>   
    </div>

    <div class="footer">
        <center><?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
        echo "<div class='alert alert-danger alert-danger'>";
        echo $this->session->flashdata('alaert');
        echo "</div>";
      } else if($_GET['pesan']=='logout'){
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-success'>";
            echo $this->session->flashdata('Anda telah logout');
            echo "</div>";
          }
        }else if($_GET['pesan']=='Belum Login'){
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-primary'>";
            echo $this->session->flashdata('alert');
            echo "</div>";
          }
        }
        }else{
          if($this->session->flashdata())
          {
            echo "<div class='alert alert-danger alert-message'>";
            echo $this->session->flashdata('alert');
            echo "</div>";
          }
        }
        ?></center>
     <input type="submit" value="Login"  class="button">
    </div>
   <a href="<?php echo base_url().'regis/regis_anggota'; ?>" class="btn btn-success btn-xs" style="width:100%;margin-right: 18px;"><span class="glyphicon glyphicon-plus"></span>Registrasi</a>

  </form><br>

  
  

</body>

</html>
