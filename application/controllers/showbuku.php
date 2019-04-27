<?php

class showbuku extends CI_Controller{
  function __construct()
  {
    parent::__construct();
    $this->load->model('showbuku_model');
  }

  function index()
  {
    $data['title'] = 'Daftar Buku';

    //memanggil function selectAll di model showbuku_model, dimasukkan ke $data['buku']
    $data['buku'] = $this->showbuku_model->selectAll();      
   
    //meload view bernama buku_view.php dengan data variable adalah $data
    $this->load->view('buku_view', $data);
  }

  function input()
  {
    $this->load->view('inputbuku_view');
  }

  function tambah()
  {
    $this->showbuku_model->input();     
    redirect ('showbuku');
  }

  function delete($kd_register)
  {
    $this->showbuku_model->delete($kd_register);
    redirect('showbuku');
  }

  function edit($kd_register) 
  {
    if($_POST==NULL) {
      $data['ubah'] = $this->showbuku_model->select($kd_register);
      $this->load->view('editbuku_view',$data);
    }
    else
    {
      $this->showbuku_model->update($kd_register);
      redirect('showbuku');
    }
  }
}
?>