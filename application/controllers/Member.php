<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
  function __construct(){
    parent::__construct();
     // cek Login
    if($this->session->userdata('status') != "login"){
     $alert=$this->session->set_flashdata('alert', 'Anda Belum Login,Harap Login untuk mengakses halaman selanjutnya');
     redirect(base_url().'login_siswa');
   }
 }

 function index(){

 $data['anggota'] = $this->M_perpus->getByDesc();
   $data['chek'] = $this->M_perpus->getByDesc2();
  $id=$this->session->userdata('id_agt');
  $data['hasil'] = $this->db->query("SELECT * FROM anggota  WHERE id_anggota and id_anggota='$id' ORDER BY  id_anggota='$id' ASC")->result();
  $this->load->view('member/header.php',$data);
  $this->load->view('member/index.php');
  $this->load->view('member/footer.php');
}

function chart(){

 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $data['count'] = $this->M_perpus->get_count();
 $data['count2'] = $this->M_perpus->get_count2();
 $data['count3'] = $this->M_perpus->get_count3();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/chart.php',$data);
 $this->load->view('member/footer.php');
}

function p_siswa(){
 $data['anggota2'] = $this->M_perpus->get_data('anggota')->result();
 $data['anggota'] = $this->M_perpus->getByDesc();
 $data['chek'] = $this->M_perpus->getByDesc2();
 $id=$this->session->userdata('id_agt');
 $data['agt'] = $this->db->query("SELECT * FROM anggota  WHERE id_anggota and id_anggota='$id' ORDER BY  id_anggota='$id' ASC")->result();
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/profil_siswa.php',$data);
 $this->load->view('member/footer.php');
}

   function edit_prof($id){
                   $data['anggota'] = $this->M_perpus->getByDesc();
        $where = array('id_anggota' =>$id);
        $data['anggota2'] = $this->db->query("select * from anggota where id_anggota='$id'")->result();
        $data['chek'] = $this->M_perpus->getByDesc2();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/edit_prof.php',$data);
 $this->load->view('member/footer.php');
      }

function profil(){
  
 $data['anggota'] = $this->M_perpus->getByDesc();

 $data['chek'] = $this->M_perpus->getByDesc2();
 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM anggota  WHERE id_anggota and id_anggota='$id' ORDER BY  id_anggota='$id' ASC")->result();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/profil.php',$data);
 $this->load->view('member/footer.php');
}


function visi(){

 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/visi.php');
 $this->load->view('member/footer.php');
}

function logout(){
  $this->session->sess_destroy();
  redirect(base_url().'login_siswa');
}
function voting(){

 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $data['anggota'] = $this->M_perpus->getByDesc();
 $data['chek'] = $this->M_perpus->getByDesc2();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/voting.php',$data);
 $this->load->view('member/footer.php');
}

function calon_1(){
 $data['chek'] = $this->M_perpus->getByDesc2();
 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $data['anggota'] = $this->M_perpus->getByDesc();
 $data['chek'] = $this->M_perpus->getByDesc2();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/calon_1.php',$data);
 $this->load->view('member/footer.php');
}

function calon_2(){
 $data['chek'] = $this->M_perpus->getByDesc2();
 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $data['anggota'] = $this->M_perpus->getByDesc();
 $data['chek'] = $this->M_perpus->getByDesc2();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/calon_2.php',$data);
 $this->load->view('member/footer.php');
}

function calon_k(){
 $data['chek'] = $this->M_perpus->getByDesc2();
 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $data['anggota'] = $this->M_perpus->getByDesc();
 $data['chek'] = $this->M_perpus->getByDesc2();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/calon_k.php',$data);
 $this->load->view('member/footer.php');
}

function vote_act(){
  $id_anggota = $this->input->post('id_anggota');
  $status = $this->input->post('status');
  $nama_calon = $this->input->post('nama_calon');
  $this->form_validation->set_rules('nama_calon','nama calon','required');
  if($this->form_validation->run() != false){
    $data = array(
      'nama_calon' => $nama_calon,
      'id_anggota' => $id_anggota,
      'status' => $status,
    );
    
    $this->M_perpus->insert_data($data,'hasil_vote');
    $this->session->set_flashdata('msg_bb','Sukses Memilih.');
    redirect(base_url().'member/sukses');
  }else{
   $this->session->set_flashdata('msg_g','Anda tidak berhasil memilih ,Harap pilih salah satu Calon Ketua Osis.');
   redirect(base_url().'member/voting');
 }
}
function sudah_pilih(){
  $id = $this->input->post('id');
  $status2 = $this->input->post('status2');

  if($this->form_validation->run() != false){
    $where = array('id_anggota' => $id);
    $data = array(
      'status2' => $status2,
      'id_anggota' => $id,
    );

    $this->M_perpus->update_data('anggota',$data,$where);
    redirect(base_url().'member/sukses');
  } else{
  }
}

function update_profil(){
        $id = $this->input->post('id');
        $nama_anggota = $this->input->post('nama_anggota');
        $gender = $this->input->post('gender');
        $penerbit = $this->input->post('penerbit');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('nama_anggota','Nama Anggota','required');
        $this->form_validation->set_rules('no_telp','No.Telpon','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() != false){
            $where = array('id_anggota' => $id);
            $data = array(
              'nama_anggota' => $nama_anggota,
              'gender' => $gender,
              'no_telp' => $no_telp,
              'alamat' => $alamat,
              'email' => $email,
              'password' => md5($password),
            );
    
        $this->M_perpus->update_data('anggota',$data,$where);

 $data['chek'] = $this->M_perpus->getByDesc2();
                   $data['anggota'] = $this->M_perpus->getByDesc();
        $where = array('id_anggota' =>$id);
        $data['agt'] = $this->db->query("select * from anggota where id_anggota='$id'")->result();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/profil_siswa.php',$data);
 $this->load->view('member/footer.php');
          } else{
              $where = array('id_anggota' =>$id);
              $data['anggota'] = $this->db->query("select * from anggota where id_anggota='$id'")->result();
             $this->load->view('member/header.php',$data);
 $this->load->view('member/edit_prof.php',$data);
 $this->load->view('member/footer.php');
          }
      }


function sukses(){
 $data['anggota2'] = $this->M_perpus->get_data('anggota')->result();
 $data['anggota'] = $this->M_perpus->getByDesc();
 $data['chek'] = $this->M_perpus->getByDesc2();
 $id=$this->session->userdata('id_agt');
 $data['agt'] = $this->db->query("SELECT * FROM anggota  WHERE id_anggota and id_anggota='$id' ORDER BY  id_anggota='$id' ASC")->result();
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/sukses.php',$data);
 $this->load->view('member/footer.php');
}

function quick(){
 $id=$this->session->userdata('id_agt');
 $data['hasil'] = $this->db->query("SELECT * FROM hasil_vote T, anggota A  WHERE T.id_anggota=A.id_anggota and T.id_anggota='$id' ORDER BY  A.id_anggota='$id' ASC")->result();
 $data['count'] = $this->M_perpus->get_count();
 $data['count2'] = $this->M_perpus->get_count2();
 $data['count3'] = $this->M_perpus->get_count3();
 $data['anggota'] = $this->M_perpus->getByDesc();
 $this->load->view('member/header.php',$data);
 $this->load->view('member/quick.php',$data);
 $this->load->view('member/footer.php');
}

}