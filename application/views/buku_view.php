<html>
  <head>
    <title>Daftar Buku</title>
  </head>
  <body>
    <h2><?php echo $title ?></h2>
    <a href="<?php echo base_url().'showbuku/input';?>">Tambah Data</a>
    <table border = 1>
      <thead>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
      </thead>

      <?php 
      $no = 1;
      foreach ($buku as $b): ?>

      <tr>
        <td style="display:none;"><?php echo $b->kd_register ?></td>
        <td><?php echo $no++ ?></td>
        <td><?php echo $b->judul_buku ?></td>
        <td><?php echo $b->pengarang ?></td>
        <td><?php echo $b->penerbit ?></td>
        <td><?php echo $b->tahun_terbit ?></td>
        <td><?php echo anchor('showbuku/edit/'.$b->kd_register, ' Ubah ') . '| | ' .anchor('showbuku/delete/'.$b->kd_register, ' Hapus '); ?> </td>
      </tr>
      <?php endforeach ?>
    </table>
  </body>
</html>