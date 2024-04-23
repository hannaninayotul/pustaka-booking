<html>    
<head> 
    <title>Form Input Matakuliah</title> 
</head> 
<body> 
    <center> 
        <form action="<?= base_url('Daftar/cetak'); ?>" method="post"> 
            <table> 
                <tr> 
                    <th colspan="3"> Form Input Daftar Data </th> 
            </tr> 
            <tr> 
                <td colspan="3"><hr> 
            </td> 
            </tr> 
            <tr> 
                <th>NIM</th> 
                <th>:</th> 
                <td> 
                    <input type="text" name="nim" id="nim" placeholder="Required">
                    <div class="col-sm-6-col-danger"> <?= form_error('nim'); ?> </div> 
                </td> 
            </tr> 
            <tr> 
                <th>Nama</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="nama" id="nama" placeholder="Required"> 
                    <div class="col-sm-6-col-danger"> <?= form_error('nama'); ?> </div> 
                </td> 
                <tr> 
                <th>Tanggal Lahir</th> 
                <td>:</td> 
                <td> 
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                    <div class="col-sm-6-col-danger"> <?= form_error('tanggal_lahir'); ?> </div> 
                </td> 
                </tr>
                <tr>
                <th>Tempat Lahir</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Required"> 
                    <div class="col-sm-6-col-danger"> <?= form_error('tempat_lahir'); ?> </div> 
                </td> 
                </tr>
                <tr>
                <th>Alamat</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="alamat" id="alamat" placeholder="Required"> 
                    <div class="col-sm-6-col-danger"> <?= form_error('alamat'); ?> </div> 
                </td> 
            </tr> 
    </tr> 
    <tr> 
        <td colspan="3" align="center"> 
            <input type="submit" value="Submit"> 
        </td> 
    </tr> 
</table> 
</form> 
</center> 
</body> 

</html>