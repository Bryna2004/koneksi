<?php

    require 'koneksi.php';

    $id = $_GET["id"];
    $result = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");

    $id = $_GET["id"];
    if ( isset ($_POST ["submit"])) { 
        
        
        if (updatedata($_POST)>0){
            echo "
        <script>
            alert('data berhasil diupdate!');
            document.location.href = 'index.php';
        </script>
        ";
        }
 
        else{
            echo "
            <script>
                alert('Gagal Diupdate!');
                document.location.href = 'index.php';
            </script>
            ";
        }

    }

    else{ 

    }
    
    ?>

    <form action="" method="post">
    <table>
     <?php while($data = mysqli_fetch_assoc($result)) : ?>
        <input value="<?= $data["id"]?>" type="hidden" name="id">

        <tr>
            <td>
                <label>Nama</label>
            </td>
            <td>
                : <input value="<?= $data["nama"]?>" type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>
                <label>NIS</label>
            </td>
            <td>
                : <input value="<?= $data["nis"]?>"type="text" name="nis">
            </td>
        </tr>
        <tr>
            <td>
                <label>Foto</label>
            </td>
            <td>
                : <input value="<?= $data["foto"]?>"type="text" name="foto">
            </td>
        </tr>
        <tr>
            <td>
                <label>Jurusan</label>
            </td>
            <td>
                : <input value="<?= $data["jurusan"]?>"type="text" name="jurusan">
            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
            </td>
            <td>
                : <input value="<?= $data["email"]?>" type="text" name="email">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tgl lahir</label>
            </td>
            <td>
                : <input value="<?= $data["tgl_lahir"]?>" type="text" name="tgl_lahir">
            </td>
        </tr>
        <tr>
            <td>
                <label>Alamat</label>
            </td>
            <td>
                : <input value="<?= $data["alamat"]?>" type="text" name="alamat">
            </td>
        </tr>
        <tr>
            <td>
                <label>Tlp</label>
            </td>
            <td>
                : <input value="<?= $data["tlp"]?>" type="text" name="tlp">
            </td>
        </tr>
        <tr>
            <td>
              <br>  
                <button type="submit" name="submit">Submit Data</button>
            </td>
        </tr>
      <?php endwhile ?>
</table>
</form>



    