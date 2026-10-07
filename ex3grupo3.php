<?php
    $cavalos=array("Cavalo1"=>88,"Cavalo2"=>18,"Cavalo3"=>120,"Cavalo4"=>50,"Cavalo5"=>2);
    asort($cavalos);
    $a=1;
    foreach($cavalos as $c=>$v)
        {
            echo "$c ganhou com velocidade $v <br>";
            $a++
            if($a==4)
                break;
        }
?>