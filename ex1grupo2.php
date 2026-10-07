<?php
function inverter($string)
{
    $tamanho=strlen($string);
    for($i=$tamanho-1;$i>=0;$i--)
        {
            echo $string[$i];
        }
}
inverter("Irchad Meneses");
echo ("<br>");
echo strrev ("Jayson");
?>