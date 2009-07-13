<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Site Name Here</title>
<?= html_css_link('style')?>
<?= html_js_link('jquery')?>
<?= html_js_link('framework')?>
<?= html_js_link('application')?>
</head>

<body>
<div id="masthead">
<h1 id="sitename">Site name</h1>
</div>

<!-- CONTENT -->
<div id="content">
  <?
  $flash = get_flash();
  if(!empty($flash))
    echo '<div id="flash">'.implode('<br/>', $flash)."</div>";
  ?>
	<? include $view; ?>
</div>    
</body>
</html>
