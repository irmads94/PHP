<?php
#Los arreglos se crean utilizando el operador array()
#pueden contener cualquier tipo de date_offset_get

$arreglo = array('cadena',1234,3.1416,true,false,'otro');
#Tambien se puede escribir como en js
#$arreglo = ['cadena',1234,3.1416,true,false,'otro'];

sort($arreglo);
for($i = 0; $i < count($arreglo); $i++){
    echo $arreglo[$i]."<br>";
}

rsort($arreglo);
echo '<ul>';
foreach($arreglo as $elem){
    echo '<li>'.$elem .'</li>';
}
echo '</ul>';
?>