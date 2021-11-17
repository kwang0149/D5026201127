$(document).ready(function () {
  $(".form-gagal").hide();
  $(".form-sukses").hide();

  let username_error = true;
  $("#username").focusout(function () {
    check_username();
  });

  let fullName_error = true;
  $("#fullName").focusout(function () {
    check_fullName();
  });

  let email_error = true;
  $("#email").focusout(function () {
    check_email();
  });
  let zipCode_error = true;
  $("#zipCode").focusout(function () {
    check_zipCode();
  });

  let address_error = true;
  $("#address").focusout(function () {
    check_address();
  });

  check_username = () => {
    const pattern = /^[a-zA-Z0-9]{6,8}$/;
    let username = $("#username").val();
    if (pattern.test(username)) {
      $("#username_error_message").hide();
    } else {
      $("#username_error_message").html("masukan 6-8 karakter");
      $("#username_error_message").css("color", "red");
      $("#username_error_message").show();
      username_error = false;
    }
  };

  //   CEK FULL NAME
  check_fullName = () => {
    const fullName = $("#fullName").val();

    if (fullName.length > 0) {
      $("#error_fullName_message").hide();
    } else {
      $("#error_fullName_message").html("masukkan nama lengkap");
      $("#error_fullName_message").css("color", "red");
      $("#error_fullName_message").show();
      fullName_error = false;
    }
  };

  // CEK EMAIL
  check_email = () => {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const email = $("#email").val();
    if (regex.test(email)) {
      $("#email_error_message").hide();
    } else {
      $("#email_error_message").html("masukan email yang valid");
      $("#email_error_message").css("color", "red");
      $("#email_error_message").show();
      fullName_error = false;
    }
  };

  // cek zip code
  check_zipCode = () => {
    const regex = /^[0-9]{6}$/;
    const zipCode = $("#zipCode").val();
    if (regex.test(zipCode)) {
      $("#zipCode_message").hide();
    } else {
      $("#zipCode_message").html("masukkan 6 digit angka");
      $("#zipCode_message").css("color", "red");
      $("#zipCode_message").show();
      zipCode_error = false;
    }
  };

  check_address = () => {
    const address = $("#address").val();
    if (address.length > 0) {
      $("#error_address_message").hide();
      console.log("address benar");
    } else {
      console.log("address salah");
      $("#error_address_message").html("masukkan alamat");
      $("#error_address_message").css("color", "red");
      $("#error_address_message").show();
      address_error = false;
    }
  };

  $(".submit").click(function (e) {
    e.preventDefault();
    username_error = true;
    fullName_error = true;
    email_error = true;
    zipCode_error = true;
    address_error = true;
    check_username();
    check_fullName();
    check_email();
    check_zipCode();
    check_address();
    if (username_error == true && fullName_error == true && email_error == true && zipCode_error == true && address_error == true) {
      $(".form-sukses").show();
      $(".form-gagal").hide();
    } else {
      $(".form-gagal").show();
      $(".form-sukses").hide();
    }
  });
});
