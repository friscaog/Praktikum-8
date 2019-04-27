<html>
    <head>
        <title>Tambah Anggota Baru</title>
    </head>
    <body><center> 
      <a href="<?php echo base_url().'showbuku';?>" style="float: left;"> &laquo; Back</a>
      <h2>Tambah Anggota Baru</h2>
      <form action= " " method="post">
        <table>
          <tr>
            <th>Nama</th>
            <td><input name="nama" value ="<?php echo $ubah->nama ?>" type="text"></td>
          </tr>
                
          <tr>
            <th>Program Studi</th>
            <td><input name="prodi" value ="<?php echo $ubah->prodi ?>" type="text"></td>
          </tr>
          <tr>
            <th>Jenjang</th>
            <td><input name="jenjang" value ="<?php echo $ubah->jenjang ?>" type="text"></td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td><input name="alamat" value ="<?php echo $ubah->alamat ?>" type="text"></td>
          </tr>
        </table><br>
        <input type="submit" value="Ubah" />
      </form>
    </body>
</html>