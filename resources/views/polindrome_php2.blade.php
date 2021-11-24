<?php 
 function cekPolindrome($number) {
    $stringAngka = strval($number);
    $cek = true;
    for ($i = 0; $i < strlen($stringAngka); $i++) {
      if ($stringAngka[$i] != $stringAngka[strlen($stringAngka) - 1 - $i]) 
      $cek = false;
    }
    return $cek;
  }

  function nearestPolindrome($number) {
    while (cekPolindrome($number) == false) {
      $number++;
    }
    return $number;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="polindrome-php\style.css">
</head>
<body>
    <?php $userNumber=$_GET["number"]; ?>
    <div class="container rounded">
        <div class="row">
                    <div class="h3">Nearest polindrome from 
            <?php echo $userNumber ?>:
        </div>
        <form action="index.html" method="post">
            <div class="row mt-5"> 
            <input class="form-control text-center w-50 mx-auto " type="text" value="<?php echo nearestPolindrome($userNumber) ?>" aria-label="readonly input example" readonly>
            
        </div>
        <div class="row col-3 mx-auto mt-5">        <button  class="mx-auto btn btn-primary"><a class="text-decoration-none text-white" href="/tugas-php">Reset</a></button></div>
         <div class="row col-3 mx-auto mt-5">        <button  class="mx-auto btn btn-primary"><a class="text-decoration-none text-white" href="/">Home</a></button></div>
        </form>
        
        </div>

    </div>

</body>
</html>
