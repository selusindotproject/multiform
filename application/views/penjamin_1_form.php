<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h3>Tambah Data - Penjamin #1</h3>
        <a href="<?= site_url('pemohon') ?>">Kembali</a>
        <br>
        <br>
        <form class="" action="<?= site_url('penjamin_1/create_action') ?>" method="post">
            <table>
                <tr>
                    <td>Kode:</td>
                    <td><input type="text" name="kode" value="<?= $kode ?>"></td>
                </tr>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" name="nama" value="<?= $nama ?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Simpan"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>
