// Mobile Menu Toggle
const OpenBtn = document.querySelector(".openbtn");
const NavMenu = document.querySelector(".nav");

var openMenu = () => {
  OpenBtn.style.display = "none";
  // NavMenu.style.visibility = "visible";
  NavMenu.style.display = "block";
};

var closeMenu = () => {
  OpenBtn.style.display = "block";
  // NavMenu.style.visibility = "hidden";
  NavMenu.style.display = "none";
};
