
<?php
$a = 1 + "12.8";
$b = 1 + "15";
$c = 1 + "1.5e3";
$d = 1 + "12curso";
$e = 1 + " 134curso";

try {
    $f = 1 + "+A10testes";
} catch (TypeError $erro) {
    $f = "Erro: string nao numerica";
}

$g = 3.9;
$h = (int)$g;

echo "a = " . $a . "<br>";
echo "b = " . $b . "<br>";
echo "c = " . $c . "<br>";
echo "d = " . $d . "<br>";
echo "e = " . $e . "<br>";
echo "f = " . $f . "<br>";
echo "g = " . $g . "<br>";
echo "h = " . $h . "<br>";
?>
