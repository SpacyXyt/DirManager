<?php 
//Settings
	$dir = "./";
	$ignoreds = [".", "..", ".DS_Store"];

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dir Manager</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<ul class="tilesWrap">
		<?php 

			$dirs = scandir($dir);
			$dirn = 0;
			foreach ($dirs as $dir) {
				if(!in_array($dir, $ignoreds)) {
					$dirn += 1;
					?>
						<a href="./<?php echo $dir; ?>">
							<li>
								<h2>0<?php echo $dirn; ?></h2>
								<h3><?php echo $dir; ?></h3>
								<button>Go</button>
							</li>
						</a>
					<?php 
				}
			}	

		 ?>
	</ul>
</body>
</html>