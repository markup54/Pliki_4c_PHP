<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formularze w php cd.</h3>
    <form action="" method="post">
    <p>Jaki jest twój ulubiony kolor</p>
    <input type="radio" name="kolor" id="" value="czerwony">czerwony <br>
    <input type="radio" name="kolor" id="" value="zielony">zielony <br>
    <input type="radio" name="kolor" id="" value="niebieski">niebieski <br>
    <input type="radio" name="kolor" id="" value="czarny">czarny <br>
    <input type="radio" name="kolor" id="" value="zółty">żółty <br>
    <input type="submit" value="Przepisz">
    </form>
    <?php
if(isset($_POST['kolor'])){
    $kolor = $_POST['kolor'];
    echo "Wybrałaś/eś $kolor kolor";
}

?>
<form action="" method="post">
    Jakie kolory tolerujesz? <br>
    <input type="checkbox" name="kolor2[]" id="" value="czerwony">czerwony <br>
    <input type="checkbox" name="kolor2[]" id="" value="zielony">zielony <br>
    <input type="checkbox" name="kolor2[]" id="" value="niebieski">niebieski <br>
    <input type="checkbox" name="kolor2[]" id="" value="czarny">czarny <br>
    <input type="checkbox" name="kolor2[]" id="" value="zółty">żółty <br>
    <input type="submit" value="Przpisz poniżej">
</form>
<?php
if(isset($_POST['kolor2'])){
    $kolorki = $_POST['kolor2'];
    print_r($kolorki);
    echo "<br>Twoimi kolorami są  ";
    echo "<ul>";
    for($i=0;$i<count($kolorki);$i++){
        echo "<li>$kolorki[$i]</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>