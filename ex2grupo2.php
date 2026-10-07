<?php
function trocar($a, $b)
{
    echo "Antes da troca A=$a e B=$b<br>";
    $c=$a;
    $a=$b;
    $b=$c;
    echo "Depois de trocar A=$a e B=$b";

}
trocar(5,7);
?>