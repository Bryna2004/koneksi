<?php

    require 'koneksi.php';

    $id = $_GET["id"];

    if( hapus($id) > 0){

    //  kalau misal di mysqli nya tertulis 1 data terhapus bakalan langsung keluarv berhasil di hapus
    //  tapi kalau keluar nya 0 dia bakal pop up nya tulisannya gagal di hapus
        echo "
        <script>
            alert('berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
    }
 
    else{
        echo "
        <script>
            alert('Gagal Dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
    }

    ?>