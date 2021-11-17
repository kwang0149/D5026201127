

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <section class="content d-flex mx-auto text-dark">
      <div class="container rounded">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class=" pb-5">Search Nearest Polindrome Number</h1>
            <form action="/tugas-php2" method="get">
              @csrf
              <div class="col-4 mx-auto">              <input class="userNumber form-control" name="number" type="number" placeholder="insert number"/>
              </div>
              <div class="mx-auto mt-4">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
          </form>
            
          </div>
        </div>

        
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>