<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title><?= $title ?></title>
  <link href="content/style.css" rel="stylesheet" />
  <link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="content/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
      <ul class="navbar-nav flex-column-sm ">
        <li class="nav-item navbar-left"><a class="nav-link" href="index.php?controller=post">Accueil</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href="index.php?controller=connection">Connexion</a></li>
      </ul>
    </nav>
    <?= $content ?>
  </div>
  
</body>

<!-- TinyMCE -->
<script type="text/javascript" src="content/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    console.log('ok');
  tinyMCE.init({
  mode : "specific_textareas",
  editor_selector : "mceEditor",
	language : "fr",
  });
</script>

</html>