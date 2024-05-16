<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
</head>
<style>fieldset{
    width: 40%;
    margin: 20px auto;
    border-radius: 5px;
}
select{
    width: 100%;
}
</style>
<body>
    <fieldset>
        <legend>Output Transaksi</legend>
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <?= $nama;?>
                    </td>
                </tr>
                <tr>
                <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                    <?= $no_hp;?>
                    </td>
                </tr>
                <tr>
                <th>Merek Sepatu</th>
                    <td>:</td>
                    <td>
                    <?= $merek;?>
                    </td>
                </tr>
                <tr>
                <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                    <?= $ukuran;?>
                    </td>
                </tr>
                <tr>
                <tr>
                <th>Harga</th>
                    <td>:</td>
                    <td>
                    <?= $harga;?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <a href="<? base_url('Tokosepatu');?>">Kembali</a>
                    </td>
                </tr>
            </table>
    </fieldset>
</body>
</html>