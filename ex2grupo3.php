<?php
    $chave=array();
    for($i=0;$i<=5;$i++)
    {
        $num=rand(1,50);
        $aux=in_array($num,$chave);
        if($aux==false){
            $chave[$i]=$num;
            echo "$num<br>";
        }
        else{
            $i--;
        }
    }
    
?>