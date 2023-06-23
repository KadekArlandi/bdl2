<?php

$data_pelanggan [] = array(
                    'id_pelanggan' => 'P001',
                    'nama_pelanggan' => 'Wayan',
                    'alamat_pelanggan' => 'Jalan Tukad Pakerisan 1',
                    'tlp_pelanggan' => '089111222333',
                    'pekerjaan' => 'Swasta'             
);

$data_pelanggan [] = array(
                    'id_pelanggan' => 'P002',
                    'nama_pelanggan' => 'Made',
                    'alamat_pelanggan' => 'Jalan Tukad Pakerisan 2',
                    'tlp_pelanggan' => '089222333444',
                    'pekerjaan' => 'Programmer'              
);

$data_pelanggan [] = array(
                    'id_pelanggan' => 'P003',
                    'nama_pelanggan' => 'Komang',
                    'alamat_pelanggan' => 'Jalan Tukad Pakerisan 3',
                    'tlp_pelanggan' => '089333444555',
                    'pekerjaan' => 'Designer'                 
);


#print_r($data_pelanggan);exit();
$json_pelanggan = json_encode($data_pelanggan,JSON_PRETTY_PRINT);
#print_r($data_pelanggan);exit();
file_put_contents('pelanggan.json',$json_pelanggan);

?>