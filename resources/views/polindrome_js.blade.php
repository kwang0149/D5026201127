<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <section class="content d-flex mx-auto">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-light pb-5">Search Nearest Polindrome Number</h1>
            <input class="userNumber" type="text" placeholder="insert number" />
            <button class="search">Search</button>
          </div>
        </div>
        <p class>Bilangan polindrome terdekat :</p>
        <p class="hasil"></p>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
  $(".search").click(function () {
    const input = $(".userNumber").val();

    console.log(nearestPolindrome(input));
    $(".hasil").html(nearestPolindrome(input));
  });

  function cekPolindrome(number) {
    let stringAngka = number.toString();
    let cek = true;
    for (let i = 0; i < stringAngka.length; i++) {
      if (stringAngka[i] != stringAngka[stringAngka.length - 1 - i]) cek = false;
    }
    return cek;
  }

  function nearestPolindrome(number) {
    while (cekPolindrome(number) == false) {
      number++;
    }
    return number;
  }
});

function execute() {
  let numberInput = prompt("Enter number");
  if (numberInput != null) {
    document.getElementById("demo").innerHTML = "Nearest palindrome number from " + numberInput + " is " + nearestPolindrome(numberInput);
  }
}

    </script>
    <script src="script.js"></script>
  </body>
</html>
