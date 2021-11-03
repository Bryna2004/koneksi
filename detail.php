<?php

    require 'koneksi.php';
    // fungsi require menghubungkan file index dengan yang lain jadi kalau ada perubahan tinggal di ganti di koksi aja langsung semua auto keganti

    $data =$_GET['nis'];
    $result = mysqli_query($conn, "SELECT * FROM siswa WHERE nis ='$data' ");
?>

    <h2>Data Siswa</h2>
    <table cellspacing="0" cellpadding="10" border="1">
        <tr>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Foto</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Option</th>
            <th>Alamat</th>
            <th>Tgl lahir</th>
            <th>No HP</th>
        </tr>
    <?php while($data = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td>
                <a href="detail.php?nis=<?php echo $data ["nis"] ?>">
                    <?php echo $data["nama"]?>
                </a>
            </td>

            <td><?php echo $data ["nis"] ?></td>
            <td><img src ="<?php echo $data["foto"]?>" alt="img.png" srcset=""></td>
            <td><?php echo $data ["jurusan"] ?></td>
            <td><?php echo $data ["Email"] ?></td>
            <td><?php echo $data ["alamat"] ?></td>
            <td><?php echo $data ["tgl_lahir"] ?></td>
            <td><?php echo $data ["tlp"] ?></td>
            <td>Edit | Delete</td>
            
        </tr><?php endwhile ?>
    </table>
</body>
</html>