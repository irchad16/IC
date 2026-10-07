<?php
    $vetor=array(1,-2,3,4,5,6,7);
    echo ("o minimo do vetor é: " . min($vetor));
    echo "<br>A media é: ";
    echo (array_sum($vetor)/count($vetor));
    $somap=0;$soman=0;
    foreach($vetor as $valor)
    {
        if($valor>0)
            $somap+=$valor;
        if($valor<0)
            $soman+=$valor;

    }
    echo("<br> A soma dos positivos é $somap e a soma dos negativos é $soman");
?>