<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Wszystkie samochody</h3>
    <?php
    $polaczenie = mysqli_connect("localhost","root","","egzamin2017");
    if($polaczenie){
        echo "Połączono z bazą danych";
        $wynik = mysqli_query($polaczenie,"SELECT `marka`, `model`, `kolor` FROM `samochody`");
        while($rekord=mysqli_fetch_array($wynik)){
            print_r($rekord);
            echo "<hr>";
        }
        mysqli_close($polaczenie);
    }

?>
</body>
</html>