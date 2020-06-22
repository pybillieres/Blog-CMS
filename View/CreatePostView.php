<?php
$this->_title = 'Nouvel article';
?>

<form method=post action='index.php'>
    <input type="text" name='title'><br/>
    <textarea id='test'  name="content" rows="10" cols="200">
    </textarea>
    <input type='hidden' name='date'>>
    <input type="hidden" name='action' value='sendCreate' > 
    <input type="hidden" name='controller' value='post'>
    <input type="submit" value="Creer le post">
</form>


<!-- TinyMCE -->
<script type="text/javascript" src="content/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    console.log('ok');
  tinyMCE.init({
	mode : "textareas",
	language : "fr",
  });
</script>