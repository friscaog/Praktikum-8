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
    $this->db->trans_start();
    $Judul = $this->input->post('judul');
    $Pengarang=$this->input->post('pengarang');
    $Penerbit=$this->input->post('penerbit');
    $Tahun=$this->input->post('tahun_terbit');
    $data = array('judul_buku'=>$Judul, 'pengarang'=>$Pengarang, 'penerbit'=>$Penerbit, 'tahun_terbit'=>$Tahun );
    $this->db->insert('buku',$data);  
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE){
      echo "<script> alert('Gagal menambah buku!'); window.location.href='" . base_url() . "showbuku'; </script>";
    }else{
      echo "<script> alert('Berhasil menambah buku baru!'); window.location.href='" . base_url() . "showbuku'; </script>";
    }
    
  }

  function delete($kd_register)
  {
    $this->db->delete('buku', array('kd_register'=>$kd_register));
    echo "<script> alert('Berhasil menghapus buku!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }

  function update($kd_register)
  {
    $this->db->trans_start();
    $this->db->where('kd_register',$kd_register)->update('buku', $_POST);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE){
      echo "<script> alert('Gagal mengubah data buku'); window.location.href='" . base_url() . "showbuku'; </script>";
    }else{
      echo "<script> alert('Berhasil mengubah data buku'); window.location.href='" . base_url() . "showbuku'; </script>";
    }
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
    echo "<script> alert('Berhasil menambah anggota perpustakaan baru!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }

  function selectkdAnggota($kd_anggota)
  {
    return $this->db->get_where('anggota', array('kd_anggota'=>$kd_anggota))->row();
  }

  function updatekdAnggota($kd_anggota)
  {
    $this->db->where('kd_anggota',$kd_anggota)->update('anggota', $_POST);
    echo "<script> alert('Berhasil mengubah data anggota!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }

  function deletekdAnggota($kd_anggota)
  {
    $this->db->delete('anggota', array('kd_anggota'=>$kd_anggota));
    echo "<script> alert('Berhasil menghapus anggota!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }


  // PETUGAS
  function inputPetugas()
  {
    $nama = $this->input->post('nama');
    $username=$this->input->post('username');
    $alamat=$this->input->post('alamat');
    $password=$this->input->post('password');
    $data = array('nama'=>$nama, 'username'=>$username, 'alamat'=>$alamat, 'password'=>$password );
    $this->db->insert('petugas',$data); 
    echo "<script> alert('Berhasil menambah petugas perpustakaan baru!'); window.location.href='" . base_url() . "showbuku'; </script>"; 
  }

  function selectkdPetugas($kd_petugas)
  {
    return $this->db->get_where('petugas', array('kd_petugas'=>$kd_petugas))->row();
  }

  function updatekdPetugas($kd_petugas)
  {
    $this->db->where('kd_petugas',$kd_petugas)->update('petugas', $_POST);
    echo "<script> alert('Berhasil mengubah data petugas!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }

  function deletekdPetugas($kd_petugas)
  {
    $this->db->delete('petugas', array('kd_petugas'=>$kd_petugas));
    echo "<script> alert('Berhasil menghapus petugas!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }


  // PEMINJAMAN
  function inputPinjam($table,$data)
  {
    $this->db->insert($table, $data);
    return $this->db->insert_id();// return last insert id
    echo "<script> alert('Berhasil membuat peminjaman buku!'); window.location.href='" . base_url() . "showbuku'; </script>";
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
    echo "<script> alert('Berhasil mengubah data peminjaman!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }

  function deletePinjam($kd_pinjam)
  {
    $tables = array('detail_pinjam', 'peminjaman');
    $this->db->where('kd_pinjam', $kd_pinjam);
    $this->db->delete($tables);
    echo "<script> alert('Berhasil menghapus data peminjaman!'); window.location.href='" . base_url() . "showbuku'; </script>";
  }

}
?>