<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos</title>
</head>
<body>
    <ul>
        <?php
            $arreglo = array(
                array('cadena',1234),
                array(3.1416,true,false),
                array('otro')
            );

            for($i = 0; $i < count($arreglo); $i++){
                for($j = 0;$j < count($arreglo[$i]);$j++){
                    echo $arreglo[$i][$j].',';
                }
                echo '<br>';
            }

            foreach ($arreglo as $renglon){
                foreach($renglon as $elem){
                    echo $elem.',';
                }
                echo '<br>';
            }

           /* foreach($arreglo as $elem){
               echo '<li>'.$elem .'</li>';
            }*/
        ?>
    </ul>
<table>

    <?php
            $arreglo = array(
                array('cadena',1234),
                array(3.1416,true,false),
                array('otro')
            );

    
            foreach ($arreglo as $renglon){
                echo '<tr>';
                foreach($renglon as $elem){
                    echo '<td>'.$elem.'</td>';
                }
                echo '</tr>';
            }
      
    ?>
    </table>

</body>
</html>