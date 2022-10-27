<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//https://egzamin-ee09.blogspot.com/2021/04/arkusz-ee09-01-2101-sg.html
$polaczenie = mysqli_connect("localhost","root","","egzamin");
//skrypt1
$zapytanie="SELECT `zespol1`, `zespol2`, `wynik`, `data_rozgrywki` FROM `rozgrywka` WHERE `zespol1` LIKE 'EVG'";
$wynik=mysqli_query($polaczenie,$zapytanie);
while($rekord=mysqli_fetch_array($wynik)){
    echo "<div>";
    echo "<h3>$rekord[0] - $rekord[1]</h3>";
    echo "<h4>$rekord[2]</h4>";
    echo "<p>w dniu $rekord[3]</p>";
    echo "</div>";
}

//skrypt2

?>
<p>Podaj pozycję zawodników (1 - bramkarze, 2 - obrońcy, 3 - pomocnicy, 4 - napastnicy)</p>
<form action="" method="post">
    <input type="number" name="numer" id="">
    <input type="submit" value="Sprawdź">
</form>
<ul>
    <?php
        if(isset($_POST['numer'])){
            $numer= $_POST['numer'];
            $zapytanie = "SELECT `imie`, `nazwisko` FROM `zawodnik` WHERE `pozycja_id` = '$numer'";
            $wynik=mysqli_query($polaczenie,$zapytanie);
            while($rekord=mysqli_fetch_array($wynik)){
                echo "<li>$rekord[0] $rekord[1]</li>";
            }
            
        }
        mysqli_close($polaczenie);
    ?>
</ul>
</body>
</html>