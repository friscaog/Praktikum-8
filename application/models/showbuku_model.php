<?php
class showbuku_model extends CI_Model{

  function selectAll()
  {
    $this->db->order_by("kd_register","desc"); 
    return $this->db->get('buku')->result();
  }
   
  function input()
  {
    $Id = $this->input->post('kd_register');
    $Judul = $this->input->post('judul');
    $Pengarang=$this->input->post('pengarang');
    $Penerbit=$this->input->post('penerbit');
    $Tahun=$this->input->post('tahun_terbit');
    $data = array('judul_buku'=>$Judul, 'pengarang'=>$Pengarang, 'penerbit'=>$Penerbit, 'tahun_terbit'=>$Tahun );
    $this->db->insert('buku',$data);  
  }

  function delete($kd_register)
  {
    $this->db->delete('buku', array('kd_register'=>$kd_register));
  }

  function update($kd_register)
  {
    $this->db->where('kd_register',$kd_register)->update('buku', $_POST);
  }
  
  function select($kd_register)
  {
    return $this->db->get_where('buku', array('kd_register'=>$kd_register))->row();
  }

}
?>