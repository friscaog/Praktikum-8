<html>
  <head>
    <title>Ubah Data Petugas</title>
  </head>
  <body><center>
    <a href="<?php echo base_url().'showbuku';?>" style="float: left;"> &laquo; Back</a>
    <h2> Ubah Data Petugas</h2>
    <form action= "" method="post">
      <table>
        <tr>
          <th>Nama</th>
          <td>: <input name="nama" value ="<?php echo $ubah->nama ?>" type="text"></td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>: <input name="alamat" value ="<?php echo $ubah->alamat ?>"   type="text"></td>          
        </tr>
        <tr>
          <th>Username</th>
          <td>: <input name="username" value ="<?php echo $ubah->username ?>" type="text"></td>
        </tr>
        <tr>
          <th>Password</th>
          <td>: <input name="password" value ="<?php echo $ubah->password ?>" type="password"></td>
        </tr>
      </table>
      <input type="submit" value="Ubah" />
    </form>
  </body>
</html>