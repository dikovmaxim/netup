<?php
$accesskey = '123';
include './config.php';
include './pages.php';
?>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/style.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>

<?php
if($header == "true"){
include './objects/header.php';
}
?>

<?php
$page = $_GET['page'];
$attempts = 0;
$pagetoload = $notfound;


foreach($pages AS $pagename => $pageurl) {
	//$attempts ++;
	if (!isset($page)) {
  	  header("Location: /?page=Home");
	}
	
	if($page == $pagename){
		$pagetoload = "./pages/".$pageurl;
	}

}
include $pagetoload;

?>

<?php
if($footer == "true"){
include './objects/footer.php';
}
?>
<style>
*{
	font-family: 'Arial';
}
</style>