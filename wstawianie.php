<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Wstaw ogłoszenie do bazy</h3>
    <form action="" method="post">
        Podaj tytuł ogłoszenia
        <input type="text" name="tytul" id="" placeholder="wpisz tytuł">
        <br>
        Podaj treść ogłoszenia
        <textarea name="tresc" id="" cols="30" rows="10">
        </textarea>
        <input type="submit" value="Dodaj do bazy">
    </form>
    <?php
    if(!empty($_POST['tytul']) && !empty($_POST['tresc'])){
        echo "chcesz wtawiać do bazy";
        $tytul = $_POST['tytul'];
        $tresc = $_POST['tresc'];
        $polaczenie= mysqli_connect("localhost","root","","ogloszenia");
        $zapytanie = "INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (NULL, '1', '1', '1', '$tytul', '$tresc');";
        mysqli_query($polaczenie,$zapytanie);



        mysqli_close($polaczenie);
    }

?>
<h2>Wszystkie ogłoszenia</h2>
<?php
$polaczenie = mysqli_connect("localhost","root","","ogloszenia");
$zapytanie = "SELECT `tytul`, `tresc` FROM `ogloszenie`";
$wynik = mysqli_query($polaczenie,$zapytanie);
while($rekord= mysqli_fetch_array($wynik)){
    echo "<h3>Tytuł : $rekord[0]</h3>";
    echo "<p><b>Treść: </b> $rekord[1]</p><hr>";
}



?>
<form action="" method="post">
    Podaj imię
    <input type="text" name="imie" id="">
    <br>
    Podaj nazwisko
    <input type="text" name="nazwisko" id="">
    <br>
    Podaj telefon
    <input type="tel" name="telefon" id="">
    <br>
    Podaj email 
    <input type="email" name="email" id="">
    <br>
    <input type="submit" value="dodaj użytkownika do bazy">
</form>
<?php
    if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['telefon']) && !empty($_POST['email']))
    {
        $imie=$_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
$zapytanie= "INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (NULL, '$imie', '$nazwisko', '$telefon', '$email');";
mysqli_query($polaczenie,$zapytanie);
    }
    mysqli_close($polaczenie);
?>
</body>
</html>