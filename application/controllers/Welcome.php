<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function __construct(){
	   parent::__construct();
  
  }

  function index(){
    
 $data['anggota'] = $this->M_perpus->getByDesc();
 $data['chek'] = $this->M_perpus->getByDesc2();
   $id=$this->session->userdata('id_agt');
    $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
    $this->load->view('member/header.php',$data);
    $this->load->view('member/index.php');
    $this->load->view('member/footer.php');
  }
  


}
  