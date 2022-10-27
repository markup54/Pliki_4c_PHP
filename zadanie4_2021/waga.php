<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="baner"><h2>Oblicz wskaźnik BMI</h2></div>
    <div id="logo"><img src="wzor.png" alt="liczymy BMI"></div>
    <div id="lewy"><img src="rys1.png" alt="zrzuć kalorie!"></div>
    <div id="prawy"><h1>Podaj dane</h1>
    <form method="post">
    Waga <input type="number" name="waga"><br>
    Wzrost [cm]: <input type="number" name="cm"><br>
    <input type="submit" value="Licz BMI i zapisz wynik">
    </form>
    <?php
// skrypt1
$polaczenie = mysqli_connect("localhost","root","","egzamin4");
if(!empty($_POST['waga']) && !empty($_POST['cm'])){
    $waga = $_POST['waga'];
    $cm = $_POST['cm'];
    $wynik = $waga / ($cm * $cm) * 10000;
    echo "Twoja waga: $waga; Twój wzrost: $cm<br>BMI wynosi: $wynik";

    if($wynik<19){
        $kategoria = 1;
    }else if($wynik<26){
        $kategoria = 2;
    }else if($wynik<31){
        $kategoria = 3;
    }else{
        $kategoria = 4;
    }
    $zapytanie = "INSERT INTO `wynik` (`id`, `bmi_id`, `data_pomiaru`, `wynik`) VALUES (NULL, '$kategoria', '2020-05-20', '$wynik');";
    mysqli_query($polaczenie, $zapytanie);
}

mysqli_close($polaczenie);
    ?>

    </form>
</div>
    <div id="glowny">
    <table>
    <tr>
            <th>lp.</th>
            <th>Interpretacja</th>
            <th>zaczyna się od...</th>
        </tr>
        
        <?php
        //skrypt2
        $polaczenie = mysqli_connect("localhost","root","","egzamin4");
        $zapytanie = "SELECT `id`, `wart_min`, `informacja` FROM `bmi`";
        $wynik = mysqli_query($polaczenie, $zapytanie);
        while($rekord=mysqli_fetch_array($wynik)){
            echo "<tr><td>$rekord[0]</td><td>$rekord[1]</td><td>$rekord[2]</td></tr>";
        }
        mysqli_close($polaczenie);
        ?>
    </table>    
    </div>
    <div id="stopka">Autor: 12345678910
        <a href="kw2.jpg">Wynik działania kewrendy 2</a>
    </div>
</body>
</html>