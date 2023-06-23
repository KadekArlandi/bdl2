<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

        <form action="add_data.php"method="POST">
            <div class="row container-fluid">
            <div class="mb-3">
                  <label for="id_pelanggan" class="form-label">Id</label>
                  <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control">
                </div>
            <div class="mb-3">
                  <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                  <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
                </div>
            <div class="mb-3">
                  <label for="alamat_pelanggan" class="form-label">Alamat</label>
                  <input type="text" name="alamat_pelanggan" id="alamat_pelanggan" class="form-control">
                </div>
            <div class="mb-3">
                  <label for="tlp_pelanggan" class="form-label">No Telepon</label>
                  <input type="text" name="tlp_pelanggan" id="tlp_pelanggan" class="form-control">
                </div>
            <div class="mb-3">
                  <label for="pekerjaan" class="form-label">Pekerjaan</label>
                  <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
                </div>
                </div>
                <div class="row container-fluid">
                    <button class="btn btn-primary" type="submit"> Simpan </button>
                </div>
        </form>

</body>
</html>