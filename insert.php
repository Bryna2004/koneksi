<?php

    require 'koneksi.php';

    // <!-- untuk cek apakah buttom sudah di klik atau tidak -->
    if ( isset ($_POST ["submit"])) {
    

        // <!-- untuk cek apakah data berhasil diinput atau tidak -->
        if (tambahdata($_POST)>0){
            echo "
        <script>
            alert('data berhasil diinput!');
            document.location.href = 'index.php';
        </script>
        ";
      
    }
 
    else{
        echo "
        <script>
            alert('Gagal Diinput!');
            document.location.href = 'index.php';
        </script>
        ";
    }

}

?>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                <label>Nama</label>
            </td>
            <td>
                : <input autocomplete="off" type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>
                <label>NIS</label>
            </td>
            <td>
                : <input autocomplete="off" type="text" name="nis">
            </td>
        </tr>
        <tr>
            <td>
                <label>Foto</label>
            </td>
            <td>
                : <input autocomplete="off" type="file" name="foto">
            </td>
        </tr>
        <tr>
            <td>
                <label>Jurusan</label>
            </td>
            <td>
                : <input autocomplete="off" type="text" name="jurusan">
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
            </td>
            <td>
                : <input autocomplete="off" type="text" name="email">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tgl lahir</label>
            </td>
            <td>
                : <input autocomplete="off" type="date" name="tgl_lahir">
            </td>
        </tr>
        <tr>
            <td>
                <label>Alamat</label>
            </td>
            <td>
                : <input autocomplete="off" type="text" name="alamat">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tlp</label>
            </td>
            <td>
                : <input autocomplete="off" type="text" name="tlp">
            </td>
        </tr>
        <tr>
            <td>
              <br>  
                <button type="submit" name="submit">Submit Data</button>
            </td>
        </tr>
</table>
</form>
</body>

      
      