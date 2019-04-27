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
    <form action= "" method="post">
      <input name="kd_register" value ="<?php echo $edit->kd_register ?>" type="hidden" >
      <input name="kd_pinjam" value ="<?php echo $edit->kd_pinjam ?>" type="hidden" >
      <table>
        <tr>
          <th>Judul Buku</th>
          <td>: <input name="judul_buku" value ="<?php echo $edit->judul_buku ?>" type="text" disabled></td>
        </tr>
        <tr>
          <th>Pengarang</th>
          <td>: <input name="pengarang" value ="<?php echo $edit->pengarang ?>" type="text" disabled></td>          
        </tr>
        <tr>
          <th>Penerbit</th>
          <td>: <input name="penerbit" value ="<?php echo $edit->penerbit ?>" type="text" disabled></td>
        </tr>
        <tr>
          <th>Tahun Terbit</th>
          <td>: <input name="tahun_terbit" value ="<?php echo $edit->tahun_terbit ?>" type="text" disabled></td>
        </tr>
        <tr>
          <th>Tanggal Peminjaman</th>
          <td>: <input name="tgl_pinjam" value ="<?php echo $edit->tgl_pinjam ?>" type="date"></td>
        </tr>
        <tr>
          <th>Tanggal Pengembalian</th>
          <td>: <input name="tgl_kembali" value ="<?php echo $edit->tgl_kembali ?>" type="date"></td>
        </tr>
      </table><br>
      <input type="submit" value="Ubah" />
    </form>
  </body>
</html>