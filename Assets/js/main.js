function validateLogin() {
  let x = document.forms["myForm"]["username"].value;
  let y = document.forms["myForm"]["password"].value;

  if (x == "") {
    let msg = (document.getElementsByClassName("msgUser")[0].innerHTML =
      "Please provide your username!");
    return false;
  } else if (y == "") {
    let msg = (document.getElementsByClassName("msgPass")[0].innerHTML =
      "Please provide your password!");
    return false;
  } else if (x == "" && y == "") {
    let alertUser = (document.getElementsByClassName("msgUser")[0].innerHTML =
      "Please provide your username!");
    let alertPass = (document.getElementsByClassName("msgPass")[0].innerHTML =
      "Please provide your password!");
    return false;
  } else if (x == $user[$username] && y == $user[$password]) {
    alert("Login successful!");
    return true;
  } else {
    alert("Login failed!");
    return false;
  }
}

function validateRegister() {
  let username = document.forms["myForm"]["username"].value;
  let password = document.forms["myForm"]["password"].value;
  let email = document.forms["myForm"]["email"].value;
  let gender = document.forms["myForm"]["gender"].value;

  if (username == "") {
    let msg = (document.getElementsByClassName("msgUser")[0].innerHTML =
      "Please provide your username!");
    return false;
  } else if (password == "") {
    let msg = (document.getElementsByClassName("msgPass")[0].innerHTML =
      "Please provide your password!");
    return false;
  } else if (email == "") {
    let msg = (document.getElementsByClassName("msgEmail")[0].innerHTML =
      "Please provide your email!");
    return false;
  } else if (gender == "") {
    let msg = (document.getElementsByClassName("msgGender")[0].innerHTML =
      "Please provide your gender!");
    return false;
  }

  if (username == "" && password == "" && email == "" && gender == "") {
    let alertUser = (document.getElementsByClassName("msgUser")[0].innerHTML =
      "Please provide your username!");
    let alertPass = (document.getElementsByClassName("msgPass")[0].innerHTML =
      "Please provide your password!");
    let alertEmail = (document.getElementsByClassName("msgEmail")[0].innerHTML =
      "Please provide your email!");
    let alertGender = (document.getElementsByClassName(
      "msgGender"
    )[0].innerHTML = "Please provide your gender!");
    return false;
  }
}
