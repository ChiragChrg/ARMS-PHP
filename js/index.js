const TeacherLogin = document.getElementById("loginT");
const StudentLogin = document.getElementById("loginS");
const LogoT = document.querySelector(".logoT");
const LogoS = document.querySelector(".logoS");

const TCAgreeT = document.querySelector(".TCAgreeT");
const RegSubmitT = document.querySelector(".RegSubmitT");

const TCAgreeS = document.querySelector(".TCAgreeS");
const RegSubmitS = document.querySelector(".RegSubmitS");

// Switching Visibility of the Login form
// var showFormT = () => {
//   TeacherLogin.style.display = "block";
//   StudentLogin.style.display = "none";
//   LogoT.style.display = "none";
//   LogoS.style.display = "block";
// };

// var showFormS = () => {
//   StudentLogin.style.display = "block";
//   TeacherLogin.style.display = "none";
//   LogoT.style.display = "block";
//   LogoS.style.display = "none";
// };

var matchPasswordT = () => {
  var passwordT = document.getElementById("passwordT").value;
  var ConfirmPasswordT = document.getElementById("confirmT").value;
  var Alert = document.querySelector(".alert");

  if (passwordT === ConfirmPasswordT) {
    Alert.innerHTML = "";
    Alert.style.display = "none";
  } else {
    Alert.style.display = "block";
    Alert.innerHTML = "Passwords do not match. Please try again.";
  }
};

var matchPasswordS = () => {
  var passwordS = document.getElementById("passwordS").value;
  var ConfirmPasswordS = document.getElementById("confirmS").value;
  var Alert = document.querySelector(".alert");

  if (passwordS === ConfirmPasswordS) {
    Alert.innerHTML = "";
    Alert.style.display = "none";
  } else {
    Alert.style.display = "block";
    Alert.innerHTML = "Passwords do not match. Please try again.";
  }
};

var checkTCT = () => {
  if (TCAgreeT.checked) {
    RegSubmitT.disabled = false;
    RegSubmitT.style.backgroundColor = "dodgerblue";
  } else {
    RegSubmitT.disabled = true;
    RegSubmitT.style.backgroundColor = "grey";
  }
};

var checkTCS = () => {
  if (TCAgreeS.checked) {
    RegSubmitS.style.backgroundColor = "dodgerblue";
    RegSubmitS.disabled = false;
  } else {
    RegSubmitS.disabled = true;
    RegSubmitS.style.backgroundColor = "grey";
  }
};
