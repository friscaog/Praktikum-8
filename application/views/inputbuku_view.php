<html>
    <head>
        <title>Tambah Buku</title>
    </head>
    <body><center> 
        <a href="<?php echo base_url().'showbuku';?>" style="float: left;"> &laquo; Back</a>
        <h2>Tambah Buku</h2>
        <form action= "<?php echo base_url().'showbuku/tambah' ?>" method="post">
            <table>
                <tr>
                    <th>Judul</th>
                    <td>: <input name="judul" type="text"></td>
                </tr>
                
                <tr>
                    <th>Pengarang</th>
                    <td>: <input name="pengarang" type="text"></td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td>: <input name="penerbit" type="text"></td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td>: <input name="tahun_terbit" type="text"></td>
                </tr>
            </table><br>
            <input type="submit" value="Tambah" />
        </form>
    </body>
</html>