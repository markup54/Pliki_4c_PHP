<p>się udało</p>
<?php
if(!empty($_POST['liczba'])){
    $liczba=$_POST['liczba'];
    echo $liczba;
    if($liczba%2 == 0)
    echo "parzysta";
    else
    echo "nieparzysta";
}

?>