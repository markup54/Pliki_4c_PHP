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
        $polaczenie= mysqli_connect("localhost","root","","egzamin_miasta");
        $zapytanie = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia`";
        $wynik = mysqli_query($polaczenie,$zapytanie);
        while($rekord=mysqli_fetch_array($wynik)){
            echo "<img src='$rekord[0]' alt='$rekord[1]'>";
        }

        mysqli_close($polaczenie);

?>
</body>
</html>