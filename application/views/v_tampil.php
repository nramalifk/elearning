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
  </style>
  
</head>

<body>
  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item"> <img class="logo" src="assets/web-image/logo.jpg"></a> 
      <a href="<?= base_url('crud'); ?>" class="item">Materi</a>
      <a href="<?= base_url('crud/huruf'); ?>" class="item">Huruf Jepang</a>
      <a href="<?= base_url('crud/logout'); ?>" class="itemright"><br>Logout</a>
    </div>
  </div>

  <div class="ui main text container">
      
    <h1 class="ui header">Materi Ekskul Nihon-go Club</h1>
    <p>Youkoso, <?= $this->session->username; ?>^^</p>
    <p>Kamu bisa <?php if($this->session->level == "administrator"){
        echo "menambahkan, mengedit, dan menghapus seluruh materi yang ada disinii";
    }
    else{
      echo "belajar dan download semua materi yang ada disinii";  
    }
    ?>
  </div>
    <br>
    <?php if($this->session->level == "administrator"){
        echo "<button><center>";
        ?>
    <a href="<?= base_url('crud/tambah'); ?>" class="ui fluid large teal submit button">Tambah Materi</a>
    <?php
        echo "</center></button>";
    }else{
        
    }
    ?>
      <table class="ui selectable inverted table">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kategori</th>
            <th>Sampul</th>
            <th>Judul</th>
            <th>Pemateri</th>
            <?php 
            if($this->session->level == "administrator"){
              echo "<th>Aksi</th>";    
            }else{
            }
            ?>
          </tr>
        </thead>
        <?php
          if( ! empty($list_materi)){
              foreach($list_materi as $u)
              {
              ?>
                <tr>
                  <td><?= $u->materi_id ?></td>
                  <td><?= $u->tanggal ?></td>
                  <td><?= $u->kategori ?></td>
                  <td><img src="<?= base_url('assets/upload/image/'.$u->sampul) ?>" height="70" width="64"</td>
                  <td><?= anchor(base_url('crud/buka_materi/').$u->materi_id,"$u->judul")?></td>
                  <td><?= $u->pemateri ?></td>
                <?php
                if($this->session->level == "administrator"){ 
                  echo "<td>";
                  ?>
                  <?= anchor('crud/edit/'.$u->materi_id,'Edit'); ?>
                  <?= anchor('crud/hapus_materi/'.$u->materi_id, 'Hapus', ['onclick' => "return confirm('Are, mau dihapus?')"]); ?>
                  <?php
                    echo "</td>";
                }else{
                    } ?>
                </tr>
                <?php }
                }?>
            </table>
    
    

  
  
</body>

</html>
