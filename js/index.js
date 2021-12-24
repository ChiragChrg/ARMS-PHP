//Initializing HTML elements to JS variables
const TeacherLogin = document.getElementById("loginT");
const StudentLogin = document.getElementById("loginS");
const LogoT = document.querySelector(".logoT");
const LogoS = document.querySelector(".logoS");

const TCAgreeT = document.querySelector(".TCAgreeT");
const RegSubmitT = document.querySelector(".RegSubmitT");

const TCAgreeS = document.querySelector(".TCAgreeS");
const RegSubmitS = document.querySelector(".RegSubmitS");

//if Teacher Passwords dont match, show Alert
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
//if Student Passwords dont match, show Alert
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

//Terms and Conditions for Teacher, if not checked, disable the submit button
var checkTCT = () => {
  if (TCAgreeT.checked) {
    RegSubmitT.disabled = false;
    RegSubmitT.style.backgroundColor = "dodgerblue";
  } else {
    RegSubmitT.disabled = true;
    RegSubmitT.style.backgroundColor = "grey";
  }
};
//Terms and Conditions for Students, if not checked, disable the submit button
var checkTCS = () => {
  if (TCAgreeS.checked) {
    RegSubmitS.style.backgroundColor = "dodgerblue";
    RegSubmitS.disabled = false;
  } else {
    RegSubmitS.disabled = true;
    RegSubmitS.style.backgroundColor = "grey";
  }
};

//Set Login page User as Teacher
var setUser = (user) => {
  if (user === "Teacher") {
    document.querySelector(".teacherLogin").style.display = "block";
    document.querySelector(".studentLogin").style.display = "none";
    document.querySelector(".lost").style.display = "none";
  } else if (user === "Student") {
    document.querySelector(".studentLogin").style.display = "block";
    document.querySelector(".teacherLogin").style.display = "none";
    document.querySelector(".lost").style.display = "none";
  }
};

//Set Signup page User as Teacher
var setSignup = (user) => {
  if (user === "Teacher") {
    document.querySelector(".teacherSignup").style.display = "block";
    document.querySelector(".studentSignup").style.display = "none";
  } else if (user === "Student") {
    document.querySelector(".studentSignup").style.display = "block";
    document.querySelector(".teacherSignup").style.display = "none";
  }
};

//Log Errors to Alertbox
var setError = (error) => {
  var Alert = document.querySelector(".signupAlert");
  var AlertText = document.querySelector(".alert");
  Alert.style.display = "block";

  if (error === "Email") {
    AlertText.innerHTML = "Invalid Email";
  }
  if (error === "Regno") {
    AlertText.innerHTML = "Invalid Registration No";
  }
  if (error === "Password") {
    AlertText.innerHTML = "Invalid Password";
  }
  if (error === "RegError") {
    AlertText.innerHTML = "Unable to Register User. Try again later.";
  }

  setTimeout(() => (Alert.style.display = "none"), 3000); //Error disappears after 3 seconds
};
