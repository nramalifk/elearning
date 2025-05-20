<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Benkyo - Nihon-go Club</title>

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/reset.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/site.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/container.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/grid.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/image.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/menu.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/divider.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/list.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/segment.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/icon.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/transition.css">

  <script src="assets/library/jquery.min.js"></script>
  <script src="http://localhost/elearning/components/transition.js"></script>
  <script src="http://localhost/elearning/components/dropdown.js"></script>
  <script src="http://localhost/elearning/components/visibility.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix main menu to page on passing
      $('.main.menu').visibility({
        type: 'fixed'
      });
      $('.overlay').visibility({
        type: 'fixed',
        offset: 80
      });

      // lazy load images
      $('.image').visibility({
        type: 'image',
        transition: 'vertical flip in',
        duration: 500
      });

      // show dropdown on hover
      $('.main.menu  .ui.dropdown').dropdown({
        on: 'hover'
      });
    })
  ;
  </script>

  <style type="text/css">

  body {
    background-color: #FFFFFF;
  }
  .main.container {
    margin-top: 2em;
  }

  .main.menu {
    margin-top: 4em;
    border-radius: 0;
    border: none;
    box-shadow: none;
    transition:
      box-shadow 0.5s ease,
      padding 0.5s ease
    ;
  }
  .main.menu .item img.logo {
    margin-right: 1.5em;
  }

  .overlay {
    float: left;
    margin: 0em 3em 1em 0em;
  }
  .overlay .menu {
    position: relative;
    left: 0;
    transition: left 0.5s ease;
  }

  .main.menu.fixed {
    background-color: #FFFFFF;
    border: 1px solid #DDD;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  }
  .overlay.fixed .menu {
    left: 800px;
  }

  .text.container .left.floated.image {
    margin: 2em 2em 2em -4em;
  }
  .text.container .right.floated.image {
    margin: 2em -4em 2em 2em;
  }

  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  .ui.menu .itemright {
    margin: 0 auto;
    margin-top: 1em;
    margin-right: 1.5em;
    color: white;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>

<body>

<div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item"> <img class="logo" src="<?= base_url('assets/web-image/logo.jpg?v=2') ?>" /></a> 
      <a href="<?= base_url('crud'); ?>" class="item">Materi</a>
      <a href="<?= base_url('crud/huruf'); ?>" class="item">Huruf Jepang</a>
      <a href="<?= base_url('crud/logout'); ?>" class="itemright">Logout</a>
    </div>
  </div>

  <?php if (!empty($list_materi)): ?>
  <?php foreach($list_materi as $data): ?>
    <div class="ui main text container">
      <h1 class="ui header"><?= $data->judul; ?></h1>

      <?php if($this->session->level == "administrator"): ?>
        <p><a class="ui primary button" href="<?= base_url("/crud/tulis_materi"); ?>">Tulis Materi</a></p>
      <?php endif; ?>

      <?php if($this->session->level == "administrator"): ?>
        <p><a class="ui primary button" href="<?= base_url("/crud/upload_file"); ?>">Upload File</a></p>
      <?php endif; ?>

      <?php if($this->session->level == "siswa"): ?>
        <p><a class="ui primary button" href="<?= base_url("/crud/upload_file"); ?>">Download File</a></p>
      <?php endif; ?>

      <div class="overlay">
        <div class="ui labeled icon vertical menu">
          <p><img src="<?= base_url("assets/upload/image/".$data->sampul); ?>" width="300" height="300"></p>
        </div>
      </div>

      <!-- konten materi di sini -->
      <p>Materi belum ada senpai!</p>
    </div>
  <?php endforeach; ?>
<?php else: ?>  
<?php endif; ?>
</body>

</html>
