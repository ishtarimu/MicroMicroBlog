<!DOCTYPE html>
<?php
	$Title = "your site title";
	$Links = array (
		"Yix" 		=> "http://yix.fr/",
		"GitHub" 	=> "https://github.com/ishtarimu",
		"Facebook"	=> "https://www.facebook.com/Helmut.Hybris.Stein"
	);
?>

<?php
$content = explode ("&#182;", file_get_contents("cache"));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $Title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif">
		<style>
			body,h1,h2,h3,h4,h5 {font-family: "Noto Serif", serif;}
			a {text-decoration:none;}
			p>a{ color:#607d8b;}
		</style>
<body class="w3-light-grey">
    </head>
    <body>
		<div  class="w3-content" style="max-width:1400px">
			<div class="w3-container w3-center w3-padding-32 w3-blue-grey">
				<h1><?php echo $Title; ?></h1>
			</div>
			<div class="w3-row">
				<?php
					$i = 1;
					while ($i < count($content)){
						echo "<a name =\"";
						echo $content[$i+1];
						echo "\"></a>";
						echo "<div class=\"w3-card-4 w3-margin w3-white\"><div class=\"w3-container  w3-padding-8\"><h2>";
						echo $content[$i++];
						echo "<a href=\"#";
						echo $content[$i];
						echo "\">";
						echo " <span class='w3-text-blue-grey w3-small'>";
						echo $content[$i++];
						echo "</span></a></h2></div><div class=\"w3-container\"><p>";
						echo $content[$i++];
						echo  "</p></div></div><hr>";
					}
				?>
			</div>
			<div class="w3-container w3-center w3-padding-32 w3-blue-grey">
				<?php
					echo "|";
					foreach ($Links as $text => $link){
						echo " <a href=\"$link\">$text</a> |";
					}
				?>
			</div>
		</div>
		
    </body>
</html>
