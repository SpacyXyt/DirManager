<?php 
//Settings
	$directory = "./chat/";
	$ignoreds = [".", "..", ".DS_Store", "assets"];
	$logo = "assets/dossier.png";
	$logoSize = "225x225";
	$title = "DirManager";
	$underlined = false;
	$buttonText = "Go";
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" type="image/png" sizes="<?php echo $logoSize; ?>" href="<?php echo $logo; ?>">
</head>
<body>
	<ul class="tilesWrap">
		<?php 

			$dirs = scandir($directory);
			$dirn = 0;
			foreach ($dirs as $dir) {
				if(!in_array($dir, $ignoreds)) {
					$dirn += 1;
					?>
					<a href="<?php echo $directory . $dir; ?>">
						<li class="li">
							<h2 class="<?php if ($underlined) { echo "underline"; } ?>">0<?php echo $dirn; ?></h2>
							<h3><?php echo $dir; ?></h3>
							<input type="button" class="redirect" value="<?php echo $buttonText; ?>"></input>
						</li>
					</a>
						
					<?php 
				}
			}	

		 ?>
	</ul>
</body>
</html>