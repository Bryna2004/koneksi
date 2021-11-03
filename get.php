<?php

$x=10;
echo $x;
// echo itu artinya menampilkan

function tampil(){
    global $x;
    echo $x;
    // echo ini hanyak untuk menampilkan variabel yang ada di dalaam function 
    // maka dari itu, perlu yang namanya variabel global, global tuh buat mempersingkat contoh di atas ada tulisan co=prov jatim brati di bawah tuh tinggal nulis global co nah itu udah otomatis kesambungg , intinya buat mempersingkat 
}
tampil();

// var_dump($_GET);
//     tujuan dari var dump get adalah menampilkan data yang ada di dalam variabel get jadi misal dipnecet nama keluar nis di url nya jadi misal kita msuk in psw trs entar kebuka di halaman
//     berikut nya itu ada tambahan psw kita di url nya ituuu bahayaa "buka halaman baru bisa di bookmark"


// var_dump($_POST);
//     tujuan dar var dump post saam kek get beda nya dia gak ada tambahn url nya sehingga cuma nge buka detailnya aja langsung contoh di berita kompas kita mau buka detail beritaa kita
//     langsung ke buka berita a tanpa ada ketdi ur nya sehingga halam detail itu gak bisa di book mark atau di save 

// var_dump($_SERVER);
//         tujuan nya menunjukkan data2 apa saja yang kita pake contoh kit apake vsc dll car buka nya di chrome nya nambahin di url e id tambahin get.php

//  var dump nampilkan lebih detail gak cuma echo nya aja tampi nampilin mmisal integer 10 bukan cuma angka 10 aja
// kalau mau nambahin langsung di ur nya entar bakal ke simpen di dolar get adalah pake misal ?nama+bryna&kelas=ipa
