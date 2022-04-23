const form = document.getElementById("form");
const firstName = document.getElementById("fname");
const lastName = document.getElementById("lname");
const email = document.getElementById("email");
const password = document.getElementById("pw");
const submitButton = document.getElementById("btn-submit");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  if (checkInputs()) {
    console.log("form submitted");
    form.submit();
    form.reset();
  }
});

function checkInputs() {
  const firstNameValue = firstName.value.trim();
  const lastNameValue = lastName.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  let a = checkFirstName(firstNameValue);
  let b = checkLastName(lastNameValue);
  let c = checkEmail(emailValue);
  let d = checkPassword(passwordValue);
  return a && b && c && d;
}

function checkFirstName(firstNameValue) {
  if (firstNameValue === "") {
    setErrorFor(firstName, "first name must not be blank");
    return false;
  } else {
    setSuccessFor(firstName);
    return true;
  }
}

function checkLastName(lastNameValue) {
  if (lastNameValue === "") {
    setErrorFor(lastName, "last name must not be blank");
    return false;
  } else {
    setSuccessFor(lastName);
    return true;
  }
}

function checkEmail(emailValue) {
  if (emailValue === "") {
    setErrorFor(email, "email must not be blank");
    return false;
  } else if (!matchEmailPattern(emailValue)) {
    setErrorFor(email, "must be an institutional email");
    return false;
  } else {
    setSuccessFor(email);
    return true;
  }
}

function checkPassword(passwordValue) {
  if (passwordValue === "") {
    setErrorFor(password, "password must not be blank");
    return false;
  } else if (!matchPasswordPattern(passwordValue)) {
    setErrorFor(
      password,
      "password must have eight characters minimum, at least one uppercase letter, one lowercase letter and one number"
    );
    return false;
  } else {
    setSuccessFor(password);
    return true;
  }
}
function matchEmailPattern(email) {
  const emailPattern = /^[a-zA-Z0-9]+.[a-zA-Z0-9]+@etudiant-isi.utm.tn$/;
  return emailPattern.test(email);
}

function matchPasswordPattern(password) {
  const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
  return passwordPattern.test(password);
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.classList.remove("error");
  formControl.classList.add("success");
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  formControl.classList.remove("success");
  formControl.classList.add("error");
  const errorBox = formControl.querySelector(".error-msg");
  errorBox.innerText = message;
}
