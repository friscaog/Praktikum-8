<?php
class userlog_model extends CI_Model{

	function login($username,$password){
		$periksa = $this->db->get_where('petugas',array('username'=>$username,'password'=> $password));
		if($periksa->num_rows()>0){
			echo "<script> alert('Selamat datang petugas perpustakaan!'); window.location.href='" . base_url() . "showbuku'; </script>";
			return 1;
		}
		else
		{
		    return 0;
		}
	}

	function logout($date){
		$this->db->where('last_login',$date)->update('petugas', $_POST);
	}

}
?>