<?php
	if(isset($_POST['jmeno']) || $_POST['heslo'])
	{
		$jmeno = sha1($_POST['jmeno']);
		$heslo = sha1($_POST['heslo']);	
		
    $connect = mysql_connect('wm31.wedos.net', 'w41347_dbs', '33f7VHpK');		
		mysql_select_db('d41347_dbs', $connect) or die(mysql_error());
		
		$query = "SELECT * FROM `user` WHERE `username` = '$jmeno' AND `password` = '$heslo' ";
		$vysledek = mysql_query($query) or die(mysql_error());
		
		$promena = sha1($_POST['jmeno']);
		$logged = 1;
    
		if(mysql_num_rows($vysledek) == 1)
		{
      setcookie('logged', $logged, Time() + 86400);
      setcookie('adresa', $adresa, Time() + 86400);
			setcookie('jmeno', $jmeno, Time() + 86400);
      header('Location: index.php?page=upload&navi=22'); 
		}
		else
		{
			header('Location: index.php?page=2&navi=2');
		}		
	}
?>