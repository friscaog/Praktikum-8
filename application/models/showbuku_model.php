<?php
class showbuku_model extends CI_Model{

  function selectBuku()
  {
    $this->db->order_by("kd_register","desc"); 
    return $this->db->get('buku')->result();
  }

  function selectAnggota()
  {
    $this->db->order_by("kd_anggota","desc"); 
    return $this->db->get('anggota')->result();
  }

  function selectPetugas()
  {
    $this->db->order_by("kd_petugas","desc"); 
    return $this->db->get('petugas')->result();
  }

  function selectPinjam()
  {
    $this->db->order_by("kd_pinjam","desc"); 
    return $this->db->get('detail_pinjam')->result();
  }
   
  function input()
  {
    // $Id = $this->input->post('kd_register');
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


  // anggota
  function inputAnggota()
  {
    $Nama = $this->input->post('nama');
    $Prodi=$this->input->post('prodi');
    $Jenjang=$this->input->post('jenjang');
    $Alamat=$this->input->post('alamat');
    $data = array('nama'=>$Nama, 'prodi'=>$Prodi, 'jenjang'=>$Jenjang, 'alamat'=>$Alamat );
    $this->db->insert('anggota',$data);  
  }

  function selectkdAnggota($kd_anggota)
  {
    return $this->db->get_where('anggota', array('kd_anggota'=>$kd_anggota))->row();
  }

  function updatekdAnggota($kd_anggota)
  {
    $this->db->where('kd_anggota',$kd_anggota)->update('anggota', $_POST);
  }

  function deletekdAnggota($kd_anggota)
  {
    $this->db->delete('anggota', array('kd_anggota'=>$kd_anggota));
  }


  // PETUGAS
  function inputPetugas()
  {
    $Nama = $this->input->post('nama');
    $Prodi=$this->input->post('prodi');
    $Jenjang=$this->input->post('jenjang');
    $Alamat=$this->input->post('alamat');
    $data = array('nama'=>$Nama, 'prodi'=>$Prodi, 'jenjang'=>$Jenjang, 'alamat'=>$Alamat );
    $this->db->insert('anggota',$data);  
  }

  function selectkdPetugas($kd_petugas)
  {
    return $this->db->get_where('petugas', array('kd_petugas'=>$kd_petugas))->row();
  }

  function updatekdPetugas($kd_petugas)
  {
    $this->db->where('kd_petugas',$kd_petugas)->update('petugas', $_POST);
  }

  function deletekdPetugas($kd_petugas)
  {
    $this->db->delete('petugas', array('kd_petugas'=>$kd_petugas));
  }


  // PEMINJAMAN
  function inputPinjam($table,$data)
  {
    $this->db->insert($table, $data);
    return $this->db->insert_id();// return last insert id
  } 

  function selectkdPinjam($kd_register)
  {
    $this->db->select('t1.judul_buku,t1.pengarang,t1.penerbit,t1.tahun_terbit,detail_pinjam.*');
    $this->db->from('buku as t1');
    $this->db->join('detail_pinjam','detail_pinjam.kd_register=t1.kd_register');
    $this->db->where('t1.kd_register',$kd_register);
    return $this->db->get()->row();
  }

  function updatePinjam($kd_register)
  {
    $this->db->where('kd_register',$kd_register)->update('detail_pinjam', $_POST);
  }

  function deletePinjam($kd_pinjam)
  {
    $tables = array('detail_pinjam', 'peminjaman');
    $this->db->where('kd_pinjam', $kd_pinjam);
    $this->db->delete($tables);
  }

}
?>