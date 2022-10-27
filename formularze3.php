<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Wybierz miasto urodzenia
    <br>
    <select name="miasto" id="">
        <option value="Zabrze">Zabrze</option>
        <option value="Bytom">Bytom</option>
        <option value="Gliwice">Gliwice</option>
        <option value="Katowice">Katowice</option>
        <option value="Tarnowskie Góry">Tarnowskie Góry</option>
    </select>
    <br>
    Kiedy się urodziłeś
    <input type="date" name="data_ur" id="">
    <br>
    Jaka jest pora roku w Twoje urodziny
    <input type="radio" name="pora" value="wiosna" id=""> wiosna <br>
    <input type="radio" name="pora" value="lato" id="">lato <br>
    <input type="radio" name="pora" value="jesień" id="">jesień <br>
    <input type="radio" name="pora" value="zima" id="">zima <br>
    <br>
    Co chcesz dostać na urodziny?
    <input type="checkbox" name="prezent[]" value="ksiazka">książkę <br>
    <input type="checkbox" name="prezent[]" value="słodycze">słodycze <br>
    <input type="checkbox" name="prezent[]" value="klocki">klocki <br>
    <input type="checkbox" name="prezent[]" value="puzzle">puzzle <br>
    <input type="checkbox" name="prezent[]" value="gra">gra <br>
    <input type="submit" value="Przepisz">
    </form>
    <?php
    if(isset($_POST['miasto'])){
        $miasto = $_POST['miasto'];
        echo "Jesteś z miasta $miasto";
    }
    if(!empty($_POST['data_ur'])){
       // $data = $_POST['data_ur'];
        echo "<br> Urodziłeś się ".$_POST['data_ur'];
    }
    if(isset($_POST['pora'])){
        echo "<br> Pora roku to ".$_POST['pora'];
    }
    if(isset($_POST['prezent'])){
        $prezent = $_POST['prezent'];
        echo "<br> Twoje prezent: <ul>";
        for($i=0;$i<count($prezent);$i++){
            echo "<li> $prezent[$i] </li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>