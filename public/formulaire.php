<?php
include "../donnees.inc.php";
include "../Alouette.php";
$chanson = new Alouette($oiseau, $qualite, $action, $membres);
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/alouette.css" />
		<title>Composer ma chanson</title>
	</head>
	<body>
        <div id="app">
            <?php include "../header.inc.php"; ?>
            <?php include "../footer.inc.php"; ?>
            <?php include "../menu.inc.php"; ?>
    		<div class="body">
				<h1>Composer ma chanson</h1>
				<?php echo $chanson->form(); ?>
            </div>
        </div>
	</body>
</html>
