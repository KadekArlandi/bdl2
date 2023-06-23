<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    
<?php
$file = file_get_contents('pelanggan.json');
$data_pelanggan = json_decode($file);

?>

<div class="row">
    <a href="add_data_view.php" class="btn btn-primary"> Tambah Data </a>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th class="bg-secondary text-white">Id</th>
                    <th>Nama</th>
                    <th class="bg-secondary text-white">Alamat</th>
                    <th>Tlp</th>
                    <th class="bg-secondary text-white">Pekerjaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
    
                foreach ($data_pelanggan as $key => $pelanggan) { ?>
                
                <tr>
                    <td class="bg-secondary text-white"><?php echo $pelanggan->id_pelanggan ?></td>
                    <td><?php echo $pelanggan->nama_pelanggan ?></td>
                    <td class="bg-secondary text-white"><?php echo $pelanggan->alamat_pelanggan ?></td>
                    <td><?php echo $pelanggan->tlp_pelanggan ?></td>
                    <td class="bg-secondary text-white"><?php echo $pelanggan->pekerjaan ?></td>
                    <td>
                    <a href="edit_data_view.php?key=<?php echo $key ?>" class="btn btn-primary"> Edit Data </a>
                    </td>
                </tr>
              
                <?php } ?> 
            </tbody>
        </table>
    </div>
</div>

</body>
</html>