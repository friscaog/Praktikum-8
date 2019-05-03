<?php

class showbuku extends CI_Controller{
  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('status_login') != "sukses"){
      redirect('auth');
    }
    $this->load->model('showbuku_model');
  }

  function index()
  {
    $data['title'] = 'Daftar Buku';

    //memanggil function selectAll di model showbuku_model, dimasukkan ke $data['buku']
    $data['buku'] = $this->showbuku_model->selectBuku();
    $data['petugas'] = $this->showbuku_model->selectPetugas();
    $data['anggota'] = $this->showbuku_model->selectAnggota();
    $data['pinjam'] = $this->showbuku_model->selectPinjam();
   
    //meload view bernama buku_view.php dengan data variable adalah $data
    $this->load->view('buku_view', $data);
  }

  function input()
  {
    $this->load->view('inputbuku_view');
  }

  function inputAnggota()
  {
    $this->load->view('inputanggota_view');
  }

  function inputPetugas()
  {
    $this->load->view('inputpetugas_view');
  }


  // TAMBAH
  function tambah()
  {
    $this->showbuku_model->input();
  }

  function tambahAnggota()
  {
    $this->showbuku_model->inputAnggota();     
  }

  function tambahPetugas()
  {
    $this->showbuku_model->inputPetugas();     
  }

  
  // EDIT
  function edit($kd_register) 
  {
    if($_POST==NULL) {
      $data['edit'] = $this->showbuku_model->select($kd_register);
      $this->load->view('editbuku_view',$data);
    }
    else
    {
      $this->showbuku_model->update($kd_register);
    }
  }

  function editAnggota($kd_anggota) 
  {
    if($_POST==NULL) {
      $data['ubah'] = $this->showbuku_model->selectkdAnggota($kd_anggota);
      $this->load->view('editanggota_view',$data);
    }
    else
    {
      $this->showbuku_model->updatekdAnggota($kd_anggota);
      // redirect('showbuku');
    }
  }

  function editPetugas($kd_petugas) 
  {
    if($_POST==NULL) {
      $data['ubah'] = $this->showbuku_model->selectkdPetugas($kd_petugas);
      $this->load->view('editpetugas_view',$data);
    }
    else
    {
      $this->showbuku_model->updatekdPetugas($kd_petugas);
      // redirect('showbuku');
    }
  }

  


  // DELETE
  function delete($kd_register)
  {
    $this->showbuku_model->delete($kd_register);
    // redirect('showbuku');
  }

  function deleteAnggota($kd_anggota)
  {
    $this->showbuku_model->deletekdAnggota($kd_anggota);
    // redirect('showbuku');
  }

  function deletePetugas($kd_petugas)
  {
    $this->showbuku_model->deletekdPetugas($kd_petugas);
    // redirect('showbuku');
  }



  // PEMINJAMAN
  function pinjam($kd_register)
  {
    $data['edit'] = $this->showbuku_model->select($kd_register);
    $this->load->view('pinjambuku_view', $data);
  }

  function tambahPinjam()
  {
    $kd_anggota = $this->input->post('kd_anggota');
    $kd_petugas=$this->input->post('kd_petugas');
    $kd_register=$this->input->post('kd_register');
    $tgl_pinjam=$this->input->post('tgl_pinjam');
    $tgl_kembali=$this->input->post('tgl_kembali');
    $data1 = array('kd_anggota'=>$kd_anggota, 'kd_petugas'=>$kd_petugas );
    $kd_pinjam = $this->showbuku_model->inputPinjam('peminjaman',$data1);

    $data2 = array('kd_register'=>$kd_register, 'tgl_pinjam'=>$tgl_pinjam, 'tgl_kembali'=>$tgl_kembali, 'kd_pinjam'=>$kd_pinjam );
    $this->showbuku_model->inputPinjam('detail_pinjam',$data2);     
    // redirect ('showbuku');
  }

  function editPinjam($kd_register) 
  {
    if($_POST==NULL) {
      $data['edit'] = $this->showbuku_model->selectkdPinjam($kd_register);
      $this->load->view('editpinjam_view',$data);
    }
    else
    {
      $this->showbuku_model->updatePinjam($kd_register);
      // redirect('showbuku');
    }
  }

  function deletePinjam($kd_pinjam)
  {
    $this->showbuku_model->deletePinjam($kd_pinjam);
    // redirect('showbuku');
  }

}
?>