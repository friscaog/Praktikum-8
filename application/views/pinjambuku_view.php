<html>
  <head>
    <title>Peminjaman</title>
    <style type="text/css">
      th, a {
        float: left;
      }
    </style>
  </head>
  <body><center>
    <a href="<?php echo base_url().'showbuku';?>" > &laquo; Back</a>
    <h2>Peminjaman Buku</h2>
    <form action= "<?php echo base_url().'showbuku/tambahPinjam' ?>" method="post">
      <input name="kd_register" value ="<?php echo $edit->kd_register ?>" type="hidden" >
      <table>
        <tr>
          <th>Judul Buku</th>
          <td>: <input name="judul_buku" value ="<?php echo $edit->judul_buku ?>" type="text" readonly></td>
        </tr>
        <tr>
          <th>Pengarang</th>
          <td>: <input name="pengarang" value ="<?php echo $edit->pengarang ?>" type="text" readonly></td>          
        </tr>
        <tr>
          <th>Penerbit</th>
          <td>: <input name="penerbit" value ="<?php echo $edit->penerbit ?>" type="text" readonly></td>
        </tr>
        <tr>
          <th>Tahun Terbit</th>
          <td>: <input name="tahun_terbit" value ="<?php echo $edit->tahun_terbit ?>" type="text" readonly></td>
        </tr>
        <tr>
          <th>Kode Anggota Peminjam</th>
          <td>: <input name="kd_anggota" type="number" ></td>
        </tr>
        <tr>
          <th>Kode Petugas</th>
          <td>: <input name="kd_petugas" type="number"></td>
        </tr>
        <tr>
          <th>Tanggal Peminjaman</th>
          <td>: <input name="tgl_pinjam" type="date"></td>
        </tr>
        <tr>
          <th>Tanggal Pengembalian</th>
          <td>: <input name="tgl_kembali" type="date"></td>
        </tr>
      </table><br>
      <input type="submit" value="Pinjam" />
    </form>
  </body>
</html>