<html>
    <head>
        <title>Tambah Petugas</title>
    </head>
    <body><center> 
        <a href="<?php echo base_url().'showbuku';?>" style="float: left;"> &laquo; Back</a>
        <h2>Tambah Petugas</h2>
        <form action= "<?php echo base_url().'showbuku/tambahPetugas' ?>" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>: <input name="nama" type="text"></td>
                </tr>
                
                <tr>
                    <th>Alamat</th>
                    <td>: <input name="alamat" type="text"></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>: <input name="username" type="text"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>: <input name="password" type="password"></td>
                </tr>
            </table><br>
            <input type="submit" value="Tambah" />
        </form>
    </body>
</html>