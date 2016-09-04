<!DOCTYPE html>
<?php
	$code = "your code";
?>

<?php 
$nTitre = "";
$nTxt = "";
$h = "ADD";
if (isset($_POST['code'])){
	if ($_POST['code'] == $code){
		$content = 	"&#182;"
					. mb_convert_encoding($_POST['titre'], "UTF-8")
					."&#182;" 
					. time()
					."&#182;"
					. mb_convert_encoding($_POST['txt'], "UTF-8");
		$cacheFile = fopen("cache", "a+");
		if (! fwrite($cacheFile, $content)){
			$h ="Unable to write cache !";
		}
		fclose($cacheFile);
		$h = "Updated !";
	}else{
		$h = "Error wrong code";
		$nTitre = $_POST['titre'];
		$nTxt = $_POST['txt'];
	}
}
?>

<html>
<head>
	<title>ADD</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
	<div class="w3-container w3-blue-grey">
		<h2><?php echo $h; ?></h2>
	</div>
	<form class="w3-container w3-padding-32" action="add.php" method="POST">
		<input class="w3-input" type="password" name="code" id="code" placeholder="code" required><br>
		<input class="w3-input" type="text" name="titre" id="titre" placeholder="Title" value="<?php echo $nTitre; ?>"><br>
		<textarea class="w3-input" id="txt" name="txt" rows="5" placeholder="Text" ><?php echo $nTxt; ?></textarea><br>
		<input class="w3-btn w3-blue-grey" type="submit" value="Hop !" />
	</form>
</body>
</html>
