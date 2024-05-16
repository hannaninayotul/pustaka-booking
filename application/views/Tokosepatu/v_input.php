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
        <legend>Input Transaksi</legend>
        <form method="post">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <? form_error('nama', '<br><span style= "color:red;">', '</span'); ?>
                    </td>
                </tr>
                <tr>
                <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="no_hp" id="no_hp">
                        <? form_error('no_hp', '<br><span style= "color:red;">', '</span'); ?>
                    </td>
                </tr>
                <tr>
                <th>Merek Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merek" id="merek">
                            <option>-- PILIH --</option>
                            <?php foreach ($merek as $m) : ?>
                            <option value="<?= $m;?>"><?= $m;?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option>-- PILIH --</option>
                            <?php for ($i = 32; $i < 45; $i ++) : ?>
                            <option value="<?= $i;?>"><?= $i;?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>