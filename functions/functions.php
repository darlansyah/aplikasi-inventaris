                                                                                                                                                                                    <?php

$link = mysqli_connect('localhost','root','','responsi'); // koneksi database


// start READ
function tampil($query){ // menampilkan data
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
// end READ

// start CREATE
function tambahInventaris($data){ // menambakan data
    global $link;


    $nama_barang = $data['nama_barang'];
    $jumlah = $data['jumlah'];
    $satuan = $data['satuan'];
    $tanggal = $data['tanggal'];
    $katagoti = $data['katagori'];
    $status = $data['status'];
    $harga = $data['harga'];

    $query = "INSERT INTO inventaris VALUES ('','$nama_barang','$jumlah','$satuan','$tanggal','$katagoti','$status','$harga')";

    $result = mysqli_query($link, $query);

    return mysqli_affected_rows($link);
}
// end CREATE


// start UPDATE
function ubahInventaris($data,$kode){ // mengubah data

    global $link;

    //var_dump($data);    exit();
    $nama_barang = $data['nama_barang'];
    $jumlah = $data['jumlah'];
    $satuan = $data['satuan'];
    $tanggal = $data['tanggal'];
    $katagoti = $data['katagori'];
    $status = $data['status'];
    $harga = $data['harga'];

    $query = "UPDATE inventaris SET
              nama_barang = '$nama_barang',
              jumlah = '$jumlah',
              satuan = '$satuan',
              tgl_datang = '$tanggal',
              id_katagori = '$katagoti',
              status_barang = '$status',
              harga = '$harga'
              WHERE id_barang = $kode
            ";

   mysqli_query($link, $query) ;


    return mysqli_affected_rows($link);

}
//end UPDATE



//  start DELETE
function hapusInventasi($kode){ // menghapus data
     global $link;

    $query = "DELETE FROM inventaris WHERE id_barang = '$kode'";

    mysqli_query($link, $query);

    return mysqli_affected_rows($link);
}

//  end DELETE
