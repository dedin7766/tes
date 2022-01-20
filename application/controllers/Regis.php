<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {
   function regis_anggota(){
      $this->load->view('regis/header');
      $this->load->view('regis/regis_anggota');
      $this->load->view('regis/footer');
    }
    function regis_anggota_act(){
      $nama_anggota = $this->input->post('nama_anggota');
        $kelas = $this->input->post('kelas');
         $jurusan = $this->input->post('jurusan');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->form_validation->set_rules('nama_anggota','Nama Anggota','required');
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      if($this->form_validation->run() != false){

        

      

          $data = array(
            'nama_anggota' => $nama_anggota,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'username' => $username,
            'password' => md5($password),
          );
          $this->M_perpus->insert_data($data,'anggota');
            $this->session->set_flashdata('msg_b','Sukses Registrasi,Silahkan Login dengan Username dan Password Anda.');
      redirect(base_url().'Login_siswa');
        }else{
          $this->load->view('regis/header');
          $this->load->view('regis/regis_anggota');
          $this->load->view('regis/footer');
        }
      }
    }
  