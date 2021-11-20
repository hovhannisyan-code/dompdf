<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css" />
  <!-- Script -->
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <!-- Document title -->
  <title>Gruppenreisen</title>
</head>
<body>
  <?php 
  $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") ."://".$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']);
  ?>
   <div id="wrapper" class="wrapper">
    <style>
    *{ font-family: DejaVu Serif;}
      .wrapper {
        margin: 0 auto;
        max-width: 770px;
      }
      h1, h2, h3,
      h4, h5, h6 {
        margin: 0;
      }
      .section--intro .intro {
        position: relative;
        width: 100%;
      }
      .section--intro .intro .logo {
        position: absolute;
        top: 0px;
        left: 50%;
        padding: 5px 15px;
        max-width: 170px;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        background-color: #ba5a31;
      }
      .section--intro .intro .logo img {
        width: 100%;
        cursor: pointer;
      }
      .section--intro .intro__image {
        height: auto;
      }
      .section--intro .intro__image img {
        width: 100%;
        height: auto;
        max-height: 437px;
        display: table-cell;
        cursor: pointer;
      }
      .section--intro .intro__content {
        height: 570px;
        padding: 30px 0;
        font-size: 20px;
        text-align: center;
        letter-spacing: 1px;
        color: #fafaf6;
        background-color: #ba5a31;
        max-width: 100%; 
        height: auto; 
        display: block;
      }
      .section--intro .intro__content > div:nth-child(1), .section--intro .intro__content > div:nth-child(2) {
        margin-bottom: 80px;
      }
      .section--intro .intro__content h1 {
        font-size: 32px;
        margin-bottom: 10px;
      }
      .section--intro .intro__content span:not(:last-child) {
        margin-bottom: 10px;
      }
      .section--intro .intro__content .intro__author .author__image {
        width: 120px;
        height: 120px;
        margin: 0 auto;
        margin-bottom: 15px;
        overflow: hidden;
        border-radius:  60px;
      }
      .section--intro .intro__content .intro__author .author__image img {
        -o-object-fit: cover;
           object-fit: cover;
        -o-object-position: top;
           object-position: top;
        width: 100%;
        height: auto;
        min-height: 120px;
        display: inline-block;
        cursor: pointer;
      }
      .section--intro .intro__content .intro__author .author__info {
        display: block;
        font-size: 14px;
        letter-spacing: 1;
      }
    </style>
    <div class="section section--intro">
      <div class="intro" style="max-width: 100%; height: auto; display: block;position: relative;">
        <div class="logo">
          <img onclick="importImg(this)" src="<?php echo $link;?>/assets/img/logo.png" alt="Logo">
        </div>
        <div class="intro__image" >
          <img onclick="importImg(this)" src="<?php echo $link;?>/assets/img/background.jpg" alt="Background">
        </div>
        <div class="intro__content">
          <div>
            <div contenteditable="true">MAROKKO-GRUPPENREISE</div>
            <div contenteditable="true">2-12 Personen</div>
          </div>
          <div>
            <h1 contenteditable="true">MAROKKOS CHARME</h1>
            <div contenteditable="true">11-tägige Erlebnisreise</div>
          </div>
          <div class="intro__author">
            <div class="author__image">
              <img onclick="importImg(this)" src="<?php echo $link;?>/assets/img/author.jpg"  alt="Author">
            </div>
            <div class="author__info">
              <div contenteditable="true">Reiseberater: Mostafa Benzouaa</div>
              <div contenteditable="true">E-Mail: m.benzouaa@dein-marokko.de</div>
              <div contenteditable="true">Tel.: +49 341 92713615</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form id="hidden_form" name="" action="html-to-pdf.php" method="POST">
    <input type="hidden" id="html" name="html" value=""/>
    <button class="export-btn" onclick="submitAction()" >
      <span class="loader"></span>
      Export to PDF
    </button>
  </form>
</body>
</html>