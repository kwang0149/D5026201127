<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="praktikum-form-validation\style.css" />
  </head>
  <body>
    <div class="container form-container">
      <div class="row"><h1 class="text-center">FORM VALIDATION</h1></div>
      <form id="validasi-form">
        <!-- USERNAME -->

        <div class="row mt-4 nama input mx-auto">
          <label for="username">Username</label>
          <input class="form-control" id="username" type="text" placeholder="Input Username" required />
          <div class="error_form" id="username_error_message"></div>
        </div>

        <!-- FULL NAME -->
        <div class="row input mx-auto mt-4">
          <label for="fullName" class="form-label">Full Name</label>
          <input class="form-control" id="fullName" type="text" placeholder="Input Full Name" required />
          <div class="error_form" id="error_fullName_message"></div>
        </div>

        <!-- EMAIL -->
        <div class="row input mx-auto mt-4">
          <label for="email" class="form-label">Email</label>
          <input id="email" class="form-control mx-auto" type="text" placeholder="Input Email" required />
          <div class="error_form" id="email_error_message"></div>
        </div>

        <!-- STATE -->
        <div class="container d-flex justify-content-center mt-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="form-group">
                <label>Kota</label>
                <div>
                  <select name="ibukota" class="selectpicker form-control state" data-live-search="true" required>
                    <option>Jakarta</option>
                    <option>Banda Aceh</option>
                    <option>Medan</option>
                    <option>Padang</option>
                    <option>Pekanbaru</option>
                    <option>Jambi</option>
                    <option>Pelembang</option>
                    <option>Bengkulu</option>
                    <option>Bandar Lampung</option>
                    <option>Pangkalpinang</option>
                    <option>Tanjungpinang</option>
                    <option>Bandung</option>
                    <option>Semarang</option>
                    <option>Yogyakarta</option>
                    <option>Surabaya</option>
                    <option>Serang</option>
                    <option>Denpasar</option>
                    <option>Mataram</option>
                    <option>Kupang</option>
                    <option>Pontianak</option>
                    <option>Palangka Raya</option>
                    <option>Banjarmasin</option>
                    <option>Samarinda</option>
                    <option>Tanjung Selor</option>
                    <option>Manado</option>
                    <option>Palu</option>
                    <option>Makassar</option>
                    <option>Kendari</option>
                    <option>Gorontalo</option>
                    <option>Mamuju</option>
                    <option>Ambon</option>
                    <option>Sofifi</option>
                    <option>Jayapura</option>
                    <option>Manokwari</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ZIP CODE -->
        <div class="row input mx-auto mt-4">
          <label for="zipCode" class="form-label">Zip Code</label>
          <input class="form-control mx-auto" type="text" id="zipCode" placeholder="Input Zip Code" required />
          <div class="error_form" id="zipCode_message"></div>
        </div>

        <!-- ADDRESS -->
        <div class="row input mx-auto mt-4">
          <label for="address" class="form-label">Address</label>
          <input id="address" class="form-control mx-auto" type="text" placeholder="Input Address" required />
          <div id="error_address_message"></div>
        </div>

        <!-- SUBMIT -->
        <div class="d-flex justify-content-center mt-4">
          <button class="btn btn-primary submit" type="submit">VALIDATE</button>
        </div>
      </form>
      <div class="alert alert-success mt-4 form-sukses" role="alert">Pengisian form sudah benar</div>
      <div class="alert alert-danger mt-4 form-gagal" role="alert ">Pengisan form salah</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="praktikum-form-validation\script.js"></script>
  </body>
</html>
