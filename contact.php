<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | ARMS</title>
    <link rel="stylesheet" media="(min-width:451px)" href="./css/index.css">
    <link rel="stylesheet" media="(max-width:450px)" href="./css/Mobile/index.css">
    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon">
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
      />
    <script src="./js/icon.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <header>
      <div class="header">
        <a href="https://sims-arms.000webhostapp.com/">
          <div class="logo">
            <i class="fad fa-user-graduate fa-3x"></i>
            <p>&nbsp;ARMS</p>
          </div>
        </a>

        <a href="javascript:void(0)" class="openbtn" onclick="openMenu()">
          <i class="fad fa-bars fa-2x"></i>
        </a>
        
        <div class="nav">
          <ul>
            <li>
            <i class="closebtn fad fa-times-circle fa-2x" onclick="closeMenu()"></i>
              <a href="./index.php">Home</a>
              <a href="./about.php">About</a>
              <a class="active" href="./contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <div class="container">
        <div class="contact">
            <div class="gitintro">
                <p>
                    Hello,<br />
                    I'm Chirag, a prospective developer. <br />
                    I try to create exciting Webapps. <br />
                    All of my projects are Open-Source, So Enjoy! <br />
                </p>
                <a href="https://github.com/ChiragChrg/ARMS" target="_blank">
                    <i class="fab fa-github fa-2x"></i>
                    <h2>&nbsp;GitHub</h2>
                </a>
            </div>

            <div class="devintro">
                <?php echo "<p>Check all of my other projects on</p>"; ?>
                <div class="devlink">
                    <a href="https://devbase.netlify.app/"><i class="fas fa-code"></i>&nbsp;DevBase</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <!-- <div class="social">
          <a href="https://www.facebook.com/ChiragChrg" id="f" target="_blank">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a href="https://www.instagram.com/chiragchrg/" id="i" target="_blank">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
          <a href="https://twitter.com/ChiragChrg1" id="t" target="_blank">
            <i class="fab fa-twitter fa-2x"></i>
          </a>
        </div> -->
        <p>&#169; Copyright 2021 ChiragChrg</p>
    </footer>
    <script src="./js/nav.js"></script>
  </body>
</html>