<link rel="stylesheet" type="text/css" href="http://localhost/elearning/assets/css/semantic.min.css">
<script
  src="https://localhost/elearning/assets/js/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="http://localhost/elearning/assets/js/semantic.min.js"></script>
<center>
<h1>Tambah Gambar</h1><hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
<?php echo  form_open("crud/upgambar", array('enctype'=>'multipart/form-data')); ?> 
<table cellpadding="8">
  <div class="ui form">
    <div class="field">
      <label>Sampul</label>
      <input type="file" name="input_gambar"></td>
    </div>
  </div>
</table>
<hr>
<button class="ui submit button" name="submit" value="Simpan">Simpan</button>
<a href="<?php echo base_url(); ?>"><button class="ui submit button" value="Batal">Batal</button></a>
<?php echo form_close(); ?>