<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP Badword</title>
	</head>
	<body>
    <?php
		/*

		 - Creare una variabile con un paragrafo di
		 testo.
		 - Visualizzare a schermo il paragrafo con la
			relativa lunghezza e sostituire la
			badword passata in GET con tre *.

	 */
		?>
		<?php $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'; echo $text; ?>

		<h1>
			La lunghezza della stringa è di <?php echo strlen($text); ?> caratteri.
	  </h1>
    <h3>
     La badword inserita è: " <?php $badword = $_GET['badword']; echo $badword; ?> ".
	  </h3>
	  <h3>
     <?php $newtext = str_replace($badword, "***", $text); ?>
	  </h3>

	  <?php echo $newtext ?>

  	<h3>
     La lunghezza della nuova stringa è di <?php echo strlen($newtext); ?> caratteri.
  	</h3>

		<h3><em>Copiare <a href="#">http://localhost/?badword=</a> nella barra indirizzi per testare il programma,<br>poi inserire una parola dopo l'uguale.</em> </h3>

	</body>
</html>
