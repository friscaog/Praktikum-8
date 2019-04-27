<html>
    <head>
        <title>Tambah Anggota Baru</title>
    </head>
    <body><center> 
        <a href="<?php echo base_url().'showbuku';?>" style="float: left;"> &laquo; Back</a>
        <h2>Tambah Anggota Baru</h2>
        <form action= "<?php echo base_url().'showbuku/tambahAnggota' ?>" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>: <input name="nama" type="text"></td>
                </tr>
                
                <tr>
                    <th>Program Studi</th>
                    <td>: <input name="prodi" type="text"></td>
                </tr>
                <tr>
                    <th>Jenjang</th>
                    <td>: <input name="jenjang" type="text"></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: <input name="alamat" type="text"></td>
                </tr>
            </table><br>
            <input type="submit" value="Tambah" />
        </form>
    </body>
</html>