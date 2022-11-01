<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h3>Tambah Data - Pemohon</h3>
        <a href="<?= site_url('pemohon') ?>">Kembali</a>
        <br>
        <br>
        <form class="" action="<?= site_url('pemohon/create_action') ?>" method="post">
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
                    <td>Status:</td>
                    <td>
                        <input type="radio" name="status" value="menikah"> Menikah<br>
                        <input type="radio" name="status" value="tidak_menikah"> Tidak Menikah
                    </td>
                </tr>
                <tr>
                    <td>Penjamin #1:</td>
                    <td>
                        <input type="radio" name="penjamin_1" value="ada"> Ada<br>
                        <input type="radio" name="penjamin_1" value="tidak_ada"> Tidak Ada
                    </td>
                </tr>
                <tr>
                    <td>Penjamin #2:</td>
                    <td>
                        <input type="radio" name="penjamin_2" value="ada"> Ada<br>
                        <input type="radio" name="penjamin_2" value="tidak_ada"> Tidak Ada
                    </td>
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
