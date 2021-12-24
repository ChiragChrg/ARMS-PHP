var Dropdown = document.querySelectorAll(".drop");

for (var i = 0; i < Dropdown.length; i++) {
  Dropdown[i].addEventListener("click", function () {
    var UpArrow = document.querySelector(".upArrow");
    var DownArrow = document.querySelector(".downArrow");
    var DropFiles = document.querySelector(".files");
    console.log(UpArrow);
    console.log(DownArrow);
    console.log(DropFiles);
    UpArrow.style.display = "block";
  });
}

//     // this.classList.toggle("show");
//     // console.log("Clicked");

//     // if (DownArrow[i].style.display === "block") {
//     //   UpArrow.style.display = "block";
//     //   DownArrow.style.display = "none";
//     //   DropFiles.style.height = "100%";
//     //   console.log("if");
//     // } else {
//     //   UpArrow.style.display = "none";
//     //   DownArrow.style.display = "block";
//     //   DropFiles.style.height = "0%";
//     //   console.log("else");
//     // }

//     // var DropdownContent = this.nextElementSibling;
//     // if (DropdownContent.style.display === "block") {
//     //   DropdownContent.style.display = "none";
//     // } else {
//     //   DropdownContent.style.display = "block";
//     // }
//   });
// }

// Dropdown.addEventListener("click", toggleDrop);

// var toggleDrop = (evt) => {
//   console.log("Clicked");
//   if (DownArrow.style.display === "block") {
//     evt.UpArrow.style.display = "block";
//     evt.DownArrow.style.display = "none";
//   } else {
//     evt.UpArrow.style.display = "none";
//     evt.DownArrow.style.display = "block";
//   }
// };
