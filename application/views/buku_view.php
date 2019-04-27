<html>
  <head>
    <title>Selamat Datang Pegawai</title>
  </head>
  <body>
    <h2><?php echo $title ?></h2>
    <a href="<?php echo base_url().'showbuku/input';?>">Tambah Buku</a>
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
        <td><?php echo anchor('showbuku/edit/'.$b->kd_register, ' Ubah ') . '| | ' .anchor('showbuku/delete/'.$b->kd_register, ' Hapus '). '| | ' .anchor('showbuku/pinjam/'.$b->kd_register, ' Pinjam '); ?> </td>
      </tr>
      <?php endforeach ?>
    </table><br>

    <!-- mulai daftar petugas -->
    <h2>Daftar Petugas</h2>
    <!-- <a href="<?php echo base_url().'showbuku/input';?>">Tambah Buku</a> -->
    <table border = 1>
      <thead>
        <th>No</th>
        <th>Kode Petugas</th>
        <th>Nama Petugas</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </thead>

      <?php 
      $no = 1;
      foreach ($petugas as $b): ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $b->kd_petugas ?></td>
        <td><?php echo $b->nama ?></td>
        <td><?php echo $b->alamat ?></td>
        <td><?php echo anchor('showbuku/editPetugas/'.$b->kd_petugas, ' Ubah ') . '| | ' .anchor('showbuku/deletePetugas/'.$b->kd_petugas, ' Hapus '); ?> </td>
      </tr>
      <?php endforeach ?>
    </table><br>

    <!-- mulai daftar anggota -->
    <h2>Daftar Anggota</h2>
    <a href="<?php echo base_url().'showbuku/inputAnggota';?>">Tambah Anggota Baru</a>
    <table border = 1>
      <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Jenjang</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </thead>

      <?php 
      $no = 1;
      foreach ($anggota as $b): ?>

      <tr>
        <td style="display:none;"><?php echo $b->kd_anggota ?></td>
        <td><?php echo $no++ ?></td>
        <td><?php echo $b->nama ?></td>
        <td><?php echo $b->prodi ?></td>
        <td><?php echo $b->jenjang ?></td>
        <td><?php echo $b->alamat ?></td>
        <td><?php echo anchor('showbuku/editAnggota/'.$b->kd_anggota, ' Ubah ') . '| | ' .anchor('showbuku/deleteAnggota/'.$b->kd_anggota, ' Hapus '); ?> </td>
      </tr>
      <?php endforeach ?>
    </table><br>

    <!-- mulai daftar peminjaman -->
    <h2>Daftar Peminjaman</h2>
    <table border = 1>
      <thead>
        <th>No</th>
        <th>Kode Register</th>
        <th>Kode Pinjam</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>Aksi</th>
      </thead>

      <?php 
      $no = 1;
      foreach ($pinjam as $b): ?>

      <tr>
        <!-- <td style="display:none;"><?php echo $b->kd_pinjam ?></td> -->
        <td><?php echo $no++ ?></td>
        <td><?php echo $b->kd_register ?></td>
        <td><?php echo $b->kd_pinjam ?></td>
        <td><?php echo $b->tgl_pinjam ?></td>
        <td><?php echo $b->tgl_kembali ?></td>
        <td><?php echo anchor('showbuku/editpinjam/'.$b->kd_register, ' Ubah ') . '| | ' .anchor('showbuku/deletepinjam/'.$b->kd_pinjam, ' Hapus '); ?> </td>
      </tr>
      <?php endforeach ?>
    </table>

  </body>
</html>