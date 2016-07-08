
<?php
	
		$host = "mysql.cba.pl"; //nazwa hosta
	$db_user = "mysql.cba.pl"; //nazwa użytkownika
	$db_password = "ciasteczko123"; //hasło do serwera
	$db_name = "ciasto123_cba_pl"; //nazwa bazy danych

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name); //połącz z bazą danych
	
	if ($polaczenie->connect_errno!=0){ //jeśli podczas próby połączenia wystąpił błąd
		echo "Error: ".$polaczenie->connect_errno; //wypisz na ekranie informację o błędzie
	}
	else{ 
		$name = $_POST['name']; //przypisz do zmiennych lokalnych dane z formularza
		$date = $_POST['date'];
		$time = $_POST['time'];
		
		$zapytanie  = "INSERT INTO `cakes`(`name`, `date`, `time`) VALUES ('$name', '$date', '$time')";
		$wykonaj = mysql_query('$zapytanie');

	
		$polaczenie->close(); //zamknij połączenie z bazą danych
	}
	header('index.php');
?>

