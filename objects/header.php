<?php
include '/config.php';
?>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/style.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/header.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>
<ul>
 <?php

foreach($pages AS $pagename => $pageurl) {

	echo("<li><a href='/?page=".$pagename."'>".$pagename."</a></li>");
}
?> 
<li><a href='https://www.facebook.com/maxim.dikov.12935'>Contact me</a></li>
</ul> 
<div class="header" id="header">
	<div id = "logo" class="logo">
		<h2><?php echo($name);?></h2>
	</div>
</div>
<?php include $base_dir = __DIR__.'/modules/security.php';?>