<?php

//data pelanggan yang sudah ada di pelanggan.json
$value_id_pelanggan = $_POST['id_pelanggan'];

//value baru yang ingin diubah
$value_nama_pelanggan = $_POST['nama_pelanggan'];
$value_alamat_pelanggan = $_POST['alamat_pelanggan'];
$value_tlp_pelanggan= $_POST['tlp_pelanggan'];
$value_pekerjaan = $_POST['pekerjaan'];


//membaca data json
$file = file_get_contents('pelanggan.json');
$data_pelanggan = json_decode($file);

//mencari index dari key yang kita punya
foreach($data_pelanggan as $key => $value){
    //kondisi untuk mencari index dari value id_pelanggan(terget)
    if($value ->id_pelanggan == $value_id_pelanggan){
        $data_pelanggan[$key]-> nama_pelanggan = $value_nama_pelanggan;
        $data_pelanggan[$key]-> alamat_pelanggan = $value_alamat_pelanggan;
        $data_pelanggan[$key]-> tlp_pelanggan = $value_tlp_pelanggan;
        $data_pelanggan[$key]-> pekerjaan = $value_pekerjaan;

    }
}
$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('pelanggan.json', $json_pelanggan_update);


?>