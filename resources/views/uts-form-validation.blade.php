<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UTS PWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="uts_form_validation\style.css" />
  </head>
  <body>
    <div class="container pt-3 identitas">
      <h6>Chang Hong Kwang</h6>
      <h6>Kwang</h6>
      <h6>5026201127</h6>
    </div>

    <div class="container border border-3 rounded cover-form">
      <div class="row text-center">
        <h1 class="pt-4">Form Input Data Barang</h1>
      </div>
      <form class="form-container" id="cek_input_data_barang">
        <div class="row justify-content-between pt-3">
          <div class="col-4"><h4>Nama Barang</h4></div>
          <div class="col-1"><h4>:</h4></div>
          <div class="col-7 kotak-input">
            <input class="form-control border border-dark border-3" id="nama-barang" type="text" required />
            <div class="error_form" id="nama_barang_error_message"></div>
          </div>
        </div>
        <div class="row justify-content-between pt-3">
          <div class="col-4"><h4>Harga</h4></div>
          <div class="col-1"><h4>:</h4></div>
          <div class="col-7 kotak-input">
            <input class="form-control border border-dark border-3" id="harga" type="number" required />
            <div class="error_form" id="harga_error_message"></div>
          </div>
        </div>
        <div class="row justify-content-between pt-3">
          <div class="col-4"><h4>Jenis Barang</h4></div>
          <div class="col-1"><h4>:</h4></div>
          <div class="col-7 kotak-input">
            <select class="form-select border border-dark border-3" aria-label="Default select example" required>
              <option selected disabled value=""></option>
              <option value="1">Makanan</option>
              <option value="2">Minuman</option>
              <option value="3">Non Mamin</option>
            </select>

            <div class="error_form" id="jenis_barang_error_message"></div>
          </div>
        </div>
        <div class="row justify-content-between pt-3">
          <div class="col-4"><h4>Kode Barcode</h4></div>
          <div class="col-1"><h4>:</h4></div>
          <div class="col-7 kotak-input">
            <input class="form-control border border-dark border-3" id="kode-barcode" type="number" required />
            <div class="error_form" id="kode_barcode_error_message"></div>
          </div>
        </div>
        <div class="row pt-5 justify-content-center">
          <button type="submit" class="col-4 me-5 btn btn-primary">Kirim</button>
          <button type="reset" class="col-4 ms-5 btn btn-success">Reset</button>
        </div>
      </form>
      <div class="alert alert-success mt-4 form-sukses" role="alert">Pengisian form sudah benar</div>
      <div class="alert alert-danger mt-4 form-gagal" role="alert ">Pengisan form salah</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="uts_form_validation\script.js"></script>
  </body>
</html>
