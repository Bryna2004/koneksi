<?php

    require 'koneksi.php';

    // fungsi require menghubungkan file index dengan yang lain jadi kalau ada perubahan tinggal di ganti di koksi aja langsung semua auto keganti

    $result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY nama ASC");

//  order by name maksudnya mngurutkan dari nama dan asc itu dar alfabetnya
    if(!$result){
        echo mysqli_error($conn);
    } else {
    }

    if(isset ($_POST["caridata"])){
        $result = caridata($_POST["Search"]);
    }

    // mengambil Data
    // mysqli_fetch_row();  angka
    // mysqli_fetch_assoc(); nama/string
    // mysqli_fetch_arry(); bis angka dan nama
    // mysqli_fetch_object();

    // Array asosiatif??
    // $data = mysqli_fetch_assoc($result); bisa manggill sesuai database mengambil data berdasarkan namanya
    // var_dump($data);

    ?>

    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar MYSQL</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table cellspacing="0" cellpadding="10" border="1">
        <tr>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Foto</th>
            <th?>Jurusan</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Bryna</td>
            <td>1111</td>
            <td><img src="" alt="img.png" srcset=""></td>
            <td>IPA</td>
            <td>brynaclaresta@gmail.com</td>
        </tr>
    </table>
</body>
</html> -->

<!-- cara ke dua pakai  while biar gak perlu nulis satu" -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="x-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar MYSQL</title>
</head>
<body>
<h2>Data Siswa</h2>
    <a href = "insert.php";>
        <h2>Tambah data</h2>
    </a>

    <form action="" method="POST">
        Search
        <input type="text" name="Search" >
        <button name="caridata">Cari Data</button>
    </form>
    <br></br>
    
    <table cellspacing="0" cellpadding="10" border="1">
        <tr>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Foto</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Tgl lahir</th>
            <th>Alamat</th>
            <th>Tlp</th>
            <th>Option</th>

        </tr>
    <?php while($data = mysqli_fetch_assoc($result)) : ?>
        <tr>
            
            <td>
                <a href="detail.php?nis=<?php echo $data ["id"] ?>">
                    <?php echo $data["nama"]?>
                </a>
            </td>

            <!-- yang di atas itu di bikin seprti itu biar pas kita mncet anam bakalan ke buka halaman baru dengan url e ada tambahan nis habis gitu bakalan buka detail dari data itu -->
            <td><?php echo $data ["nis"] ?></td>
            <td><img src="img/<?php echo $data["foto"]?>" alt="" width=50 srcset=""></td>
            <td><?php echo $data ["jurusan"] ?></td>
            <td><?php echo $data ["email"] ?></td>
            <td><?php echo $data ["tgl_lahir"] ?></td>
            <td><?php echo $data ["alamat"] ?></td>
            <td><?php echo $data ["tlp"] ?></td>


            <td>
                <a href="update.php?id=<?php echo $data["id"] ?>">Update|</a>
                <a href="delete.php?id=<?php echo $data["id"] ?>"onclick="return confirm ('Anda Yakin')"> Delete</a>
            </td>
            <!-- delete php buat tempat ngatur2 hapus data, onclick apa bila di klik dia bakal keluar anda yakin dan dibawah nya ada pilihan yes atau no karena fungsi dari confirm. -->
        </tr><?php endwhile ?>
    </table>
</body>
</html>

<!-- php echo bisa diganti dengan = biar lebih cepat dan singkat -->


