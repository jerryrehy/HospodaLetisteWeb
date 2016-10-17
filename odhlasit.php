<?php
  setcookie('logged', $logged, Time() - 3600);
  setcookie('adresa', $adresa, Time() - 3600);
	setcookie('jmeno', $jmeno, Time() - 3600);
  header('Location: index.php?page=login&navi=2');
?>
