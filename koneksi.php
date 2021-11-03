<?php
    $conn = mysqli_connect("localhost","root", "" ,"sekolahku");



function hapus ($id){
        global $conn;

        $query= "DELETE FROM siswa WHERE id =$id";
        mysqli_query($conn, $query);

        // dari index manggil ke delete baru ke koneksi nah di koneksi manggil function hapus, global con itu konek smeuanya,di query tuh permintaan untuk di hapus berdasarkan nis nya.

        return mysqli_affected_rows($conn);

        // return ini untuk menyimpan data nya dan data itu di dapet dari mysqli_affected_rows 
        // mysqli_affected_rows bisa bernilai 0,1,2,3 dll lah kalau misal tabel yang di hapus 1 ya ke deteksi 1.
    }

function tambahdata($data){

    global $conn;
    // $id        = $data["id"];
    $nama      = $data["nama"];
    $nis       = $data["nis"];
    $jurusan   = $data["jurusan"];
    $email     = $data["email"];
    $tgl_lahir = $data["tgl_lahir"];
    $alamat    = $data["alamat"];
    $tlp       = $data["tlp"];
    $foto      = upload();

    $query = "INSERT INTO siswa VALUES ('','$nama','$nis','$foto','$jurusan','$email','$tgl_lahir','$alamat','$tlp')";

    
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updatedata($data){

    global $conn;
    $id        = $data["id"];
    $nama      = $data["nama"];
    $nis       = $data["nis"];
    $foto      = $data["foto"];
    $jurusan   = $data["jurusan"];
    $email     = $data["email"];
    $tgl_lahir = $data["tgl_lahir"];
    $alamat    = $data["alamat"];
    $tlp       = $data["tlp"];


    $sql = "UPDATE siswa SET nama='$nama', nis='$nis',foto='$foto',jurusan='$jurusan',email='$email',tgl_lahir='$tgl_lahir',alamat='$alamat',tlp='$tlp' WHERE id='$id' ";


    mysqli_query($conn, $sql);


    return mysqli_affected_rows($conn);


}

function caridata($Search){
    global $conn;
    $query = "select * from siswa where nama like '%$Search%'
    or nis like '%$Search%'
    or jurusan like '%$Search%' 
    or alamat like '%$Search%' 
    or tlp like '%$Search%'
    or email like '%$Search%'
    or tgl_lahir like '%$Search%'";
   
    // tanda persen itu misal nama di data bryna claresta tapi kalau pakai persen di cario bry aja dah ketemu soalnya 
    // belakang nya ke baca kalau gak pake harus nulis lengkap pas mau nyari

     $result = mysqli_query($conn, $query);

    return $result ;
}

function upload(){
    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']["tmp_name"];
    

    if($error == 4){
        echo "
        <script>
            alert('Gambar belum di pilih!');
            document.location.href = 'insert.php';
        </script>
        ";

    }
// tujuannya buat kalau ukuran gambar terlalu bsr gak bisa di upload 100000=1mb
    else if($ukuranfile > 100000){
        echo "
        <script>
        alert('file gambar terlalu besar!');
        document.location.href = 'insert.php';
    </script>
    ";
    }

// extendsi gambar tujuannya buat kalau kita mau membatasi file apa aja ya boleh di upload contoh 
// hanya boelh jpg maka word gak bisa di upload
    else{}
        $ekstensigambarvalid = ['jpg','jpeg','png'];
        $ekstensigambar = explode ('.',$namafile);
        // nama gambar dan ekstensi nya di pisahkan dengan titik
        $ekstensigambar = end ($ekstensigambar);
        // Bryna.Claresta.jpg contoh kalau ada titik di sebelum claresta maka yang terditeksi kan claresta maka 
        // di kasih end biar yang di lihat  titik yang paling akhir
 
// apabila file tidak sesuai ketentuan di ats contoh word,pdf dll maka..akan 
// tanda seru di bawah artinya tidak kalau tanda seru di arry artrinya tidak di array
        if(!in_array($ekstensigambar,$ekstensigambarvalid)){
                echo "
            <script>
                alert('file bukan gambar');
                document.location.href = 'index.php';
            </script>
            "; 
        }
        // else{
        // echo "
        // <script>
        //     alert('Gambar berhasil di upload!');
        //     document.location.href = 'index.php';
        // </script>
        // "; die;
        // }
    
    move_uploaded_file($tmpname,'img/'.$namafile);
    return $namafile ;


    

}

?>