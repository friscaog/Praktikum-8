<html>
  <head>
    <title>Ubah Data Buku</title>
  </head>
  <body><center>
    <a href="<?php echo base_url().'showbuku';?>" style="float: left;"> &laquo; Back</a>
    <h2> Ubah Data Buku</h2>
    <form action= "" method="post">
      <table>
        <tr>
          <th>Judul</th>
          <td><input name="judul_buku" value ="<?php echo $edit->judul_buku ?>" type="text"></td>
        </tr>
        <tr>
          <th>Pengarang</th>
          <td><input name="pengarang" value ="<?php echo $edit->pengarang ?>"   type="text"></td>          
        </tr>
        <tr>
          <th>Penerbit</th>
          <td><input name="penerbit" value ="<?php echo $edit->penerbit ?>" type="text"></td>
        </tr>
        <tr>
          <th>Tahun Terbit</th>
          <td><input name="tahun_terbit" value ="<?php echo $edit->tahun_terbit ?>" type="text"></td>
        </tr>
      </table>
      <input type="submit" value="Ubah" />
    </form>
  </body>
</html>