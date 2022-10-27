<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki futbollowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </div>
    <div id="mecze">
        <?php
            //divy generowane skryptem
            $polaczenie = mysqli_connect("localhost","root","","egzamin3");
            $zapytanie="SELECT `zespol1`, `zespol2`, `wynik`, `data_rozgrywki` FROM `rozgrywka` WHERE `zespol1` LIKE 'EVG'";
            $wynik=mysqli_query($polaczenie,$zapytanie);
            while($rekord=mysqli_fetch_array($wynik)){
                //https://pastebin.com/Unzfpr0B
                echo "<div id='meczyk'>";
                echo "<h3>$rekord[0] - $rekord[1]</h3>";
                echo "</div>";
            }

        ?>
    </div>
    <div id="glowny">
        <h2>Reprezentacja Polski</h2>
    </div>
    <div id="lewy">
        <p>Podaj pozycję zawodników (1-bramkarz, 2- obrońca, 3 - pomocnik, 4 - napstnik)</p>
        <form action="" method="post">
            <input type="number" name="pozycja" id="">
            <input type="submit" value="Sprawdź">
        </form>
        <ul>
            <?php
//skrypt2
//https://pastebin.com/Nn2wbMyg
mysqli_close($polaczenie);
            ?>
        </ul>
    </div>
    <div id="prawy">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor:0000000000000</p>
    </div>
</body>
</html>