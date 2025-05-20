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
        <h1>Tambah Materi</h1>
        <div class="ui large form">
            <div class="ui stacked segment">
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
<form action="<?= base_url('crud/tambah') ?>" method="post" enctype="multipart/form-data">
<div class="ui form">
    <div class="field">
      <label>Tanggal</label>
      <input type="date" name="tanggal" value="<?php echo set_value('tanggal'); ?>" required>
    </div>
    <div class="field">
        <label>Kategori</label>       
          <select name="kategori" value="<?php echo set_value('kategori'); ?>" required>
            <option value="">Pilih Kategori</option>
            <option value="Bunpou (Bahasa)" <?= set_select('kategori', 'Bunpou (Bahasa)'); ?>>Bunpou (Bahasa)</option>
            <option value="Bunka (Budaya)" <?= set_select('kategori', 'Bunka (Budaya)'); ?>>Bunka (Budaya)</option>

          </select>
    </div>
    <div class="field">
      <label>Judul</label>
      <input type="text" name="judul" value="<?php echo set_value('judul'); ?>" required>
    </div>
    <div class="field">
      <label>Sampul</label>
      <input type="file" name="sampul">
    </div>
    <div class="field">
      <label>Pemateri</label>
      <input type="text" name="pemateri" value="<?php echo set_value('pemateri'); ?>">
    </div>
  </div>
        
    
  <hr>
  <input type="submit" name="submit" value="Simpan">
  <a href="<?php echo base_url('crud'); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>