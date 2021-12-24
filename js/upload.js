//Upload using Filestack.com
const uploadFile = (sub) => {
  var subject = sub;

  const APIKEY = "ArgYno0SRKs6hxqgs1BFAz";
  const client = filestack.init(APIKEY);
  const options = {
    accept: ".pdf",
    onFileUploadFinished: (res) => {
      // console.log(res);
      // console.log(res.url);
      storeUrl(res, subject);
    },
  };
  client.picker(options).open();
};

var storeUrl = (Url, Subject) => {
  console.log(Url);
  var DbId = Url.uploadId;
  var DbURL = Url.url;
  var DbName = Url.filename;
  var DbSize = Url.size;
  var DbSub = Subject;
  window.location.href =
    "../dbUpload.php?FID=" +
    DbId +
    "&Url=" +
    DbURL +
    "&Name=" +
    DbName +
    "&Size=" +
    DbSize +
    "&Subject=" +
    DbSub;
};

//Display Upload status Alert
uploadStatus = (status) => {
  var Alert = document.querySelector('.signupAlert');
  var AlertText = document.querySelector('.alert');
  Alert.style.display = 'block';

  if(status == "Success"){
    AlertText.innerHTML = 'File Uploaded Successfully';
  }
  else if(status == "Error"){
    AlertText.innerHTML = 'File Upload Failed';
  }
}

//Google Drive Link fetching
//(Too complicated to impelent with API and stuff So Dropped it)

// var url = "https://drive.google.com/file/d/1A8bftX6IbOJJIATkTVzfgHM1vu0HW0AI/view?usp=sharing";

// function download() {
//   // Converting Gdrive URL to Downloadable link
//   var url = document.getElementById("download").value;
//   var id = "";

//   url = url.replace("https://drive.google.com/file/d/", "");

//   if (url.includes("/view?usp=sharing"))
//     id = url.replace("/view?usp=sharing", "");
//   else id = url.replace("/view?usp=drivesdk", "");

//   var link = "https://drive.google.com/uc?id=" + id + "&export=download";

//   window.open(link, "_blank");
// }
