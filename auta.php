<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis samochodowy</title>
</head>
<body>
    <h3>Wszystkie nasze samochody</h3>
    <?php
        $polaczenie = mysqli_connect("localhost","root","","egzamin2017");
        if($polaczenie){
            echo "się udało";
            $zapytanie = "SELECT `marka`, `model`, `rocznik`, `kolor`, `stan` FROM `samochody`";
            $wynik=mysqli_query($polaczenie,$zapytanie);
            while($rekord=mysqli_fetch_array($wynik)){
                echo "<hr> $rekord[0] model: $rekord[1], <br>rocznik $rekord[2] kolor:$rekord[3] stan: $rekord[4]";
            }
            mysqli_close($polaczenie);
        }

?>


<?php
//Zadanie 1 z zimy 2017
//https://egzamin-e14.blogspot.com/2017/05/arkusz-e14-01-1701.html
$polaczenie = mysqli_connect("localhost","root","","egzamin2017");

$zapytanie="SELECT `id`, `marka`, `model` FROM `samochody`";
$wynik = mysqli_query($polaczenie,$zapytanie);

echo "<h3>Wykaz samochodów</h3>";
echo "<ul>";
while($rekord = mysqli_fetch_array($wynik)){
echo "<li>$rekord[0] $rekord[1] $rekord[2]</li>";
}
echo "</ul>";

$zapytanie2="SELECT `Samochody_id`, `Klient` FROM `zamowienia`";
$wynik = mysqli_query($polaczenie,$zapytanie2);
echo "<ul>";
while($rekord = mysqli_fetch_array($wynik)){
echo "<li>$rekord[0] $rekord[1]</li>";
}
echo "</ul>";
echo "<hr>";
$zapytanie3="SELECT * FROM `samochody` WHERE `marka` LIKE 'Fiat'";
$wynik = mysqli_query($polaczenie,$zapytanie3);

while($rekord = mysqli_fetch_array($wynik)){
echo "$rekord[0] / $rekord[1] / $rekord[2] / $rekord[3] /$rekord[4] /$rekord[5] <br>";
}
mysqli_close($polaczenie);

?>
</body>
</html>