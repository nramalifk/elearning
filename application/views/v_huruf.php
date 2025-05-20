<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Benkyo - Nihon-go Club</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/assets/css/semantic.min.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/reset.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/site.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/container.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/grid.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/image.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/menu.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/divider.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/list.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearningt/components/segment.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/icon.css">
  
  <script
  src="http://localhost/elearning/assets/js/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="http://localhost/elearning/assets/js/semantic.min.js"></script>

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .itemright {
    margin: 0 auto;
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
  .gambar {
    margin : 2em;
    padding: 3em 0em;
    width: 200px;
    height: auto;
  }
  </style>
  
</head>

<body>
  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item"> <img class="logo" src="<?= base_url('assets/web-image/logo.jpg?v=2') ?>" /></a> 
      <a href="<?= base_url('crud'); ?>" class="item">Materi</a>
      <a href="<?= base_url('crud/huruf'); ?>" class="item">Huruf Jepang</a>
      <a href="<?= base_url('crud/logout'); ?>" class="itemright"><br>Logout</a>
    </div>
  </div>

  <div class="ui main text container">
      <h1 class="ui header">Huruf Jepang</h1>
        <div class="gambar">
        <img src="<?= base_url('assets/web-image/hiragana.jpg?v=2') ?>" />
        <br><br>
        <img src="<?= base_url('assets/web-image/katakana.jpg?v=2') ?>" />
        <br><br>
        <img src="<?= base_url('assets/web-image/kanji.jpg?v=2') ?>" />
      </div>
  </div>