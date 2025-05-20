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

<script src="https://cdn.tiny.cloud/1/nt0xymsb1v0z7fku9k9p0xgfxeveupwqxv2h8hk8lhl67z6e/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Jun 3, 2025:
      'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });
</script>
	
<form action="<?= base_url('crud/simpanMateri') ?>" method="post">
  <textarea name="isi">
    Douzo isi materinya senpai!
  </textarea>
  <br>
  <button class="ui primary button" type="submit">Simpan Materi</button>
</form>

</body>
</html>