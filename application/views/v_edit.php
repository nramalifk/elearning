<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Benkyo Nihon-go Club</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/assets/css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/reset.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/site.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/container.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/grid.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/image.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/menu.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/divider.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/segment.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/form.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/input.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/button.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/list.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/message.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/icon.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/elearning/components/dropdown.css">

  <script src="assets/library/jquery.min.js"></script>
  <script src="http://localhost/elearning/components/form.js"></script>
  <script src="http://localhost/elearning/components/transition.js"></script>

<link rel="stylesheet" type="text/css" href="http://localhost/elearning/assets/css/semantic.min.css">
<script
  src="http://localhost/elearning/assets/js/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="http://localhost/elearning/assets/js/semantic.min.js"></script>
  <style type="text/css">
    body {
      background : url(web-image/web-login-bg.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      
    }
    body > .grid {
      height: 100%;
      width: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>

</head>
<body>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">     
      <div class="content">
    <h3>Edit Materi</h3>
    <div class="ui large form">
        <div class="ui stacked segment">
    <!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
<?php foreach($list_materi as $m): ?>
<form action="<?= base_url('crud/update') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $m->materi_id ?>">
    <input type="hidden" name="old_image" value="<?= $m->sampul ?>">

    <div class="field">
        <label>Tanggal</label>
        <input type="date" name="tanggal" value="<?= $m->tanggal ?>">
    </div>

    <div class="field">
        <label>Kategori</label>
        <select name="kategori">
            <option value="Bunpou (Bahasa)" <?= ($m->kategori == 'Bunpou (Bahasa)') ? 'selected' : '' ?>>Bunpou (Bahasa)</option>
            <option value="Bunka (Budaya)" <?= ($m->kategori == 'Bunka (Budaya)') ? 'selected' : '' ?>>Bunka (Budaya)</option>
        </select>
    </div>

    <div class="field">
        <label>Judul</label>
        <input type="text" name="judul" value="<?= $m->judul ?>">
    </div>

    <div class="field">
        <label>Sampul</label>
        <input type="file" name="sampul">
    </div>

    <div class="field">
        <label>Pemateri</label>
        <input type="text" name="pemateri" value="<?= $m->pemateri ?>">
    </div>

    <input type="submit" value="Simpan" class="ui button primary">
    <a href="<?= base_url('crud') ?>" class="ui button">Batal</a>
</form>
<?php endforeach; ?>
