<?php

//Creamos la logica para calcular el perimetro del circulo//

$perimetro ="";
$error ="";

if(isset($_POST['submitc'])){
    if(!empty($_POST['radioc'])){
      areaCirculo($_POST['radioc']);
    }else {
        $error .= "Ingrese el radio porfavor";
    }
}

function areaCirculo($radio){

    global $perimetro;
    global $error;

    $pi = 3.1416;
    $pi2 = "";
    $perimetro = "";

    if(!empty($radio)){

        $pi2 = ($pi * 2);
        $perimetro = ($pi2 * $radio);
        
        return TRUE;

    }else{
         
        $error .= "Algo salio mal";
        return FALSE;
    }

}

//Finaliza la logica para calcular el perimetro del circulo//



//Creamos la logica para calcular el area del rectangulo//


$area = "";

if(isset($_POST['submitr'])){

    if(!empty($_POST['baser']) && !empty($_POST['alturar'])){
        areaRectangulo($_POST['baser'],$_POST['alturar']);
    }else{
        $error .= "Ingrese la base y la altura porfavor";
    }

}


function areaRectangulo($base, $altura){

    global $area;

    if(!empty($base) && !empty($altura)){

        $area = ($base * $altura);


        return TRUE;

    }else{
        
        $error = "Algo salio mal";
        return FALSE;

    }

}


//Finaliza la logica para calcular el area del rectangulo//



//Creamos la logica para calcular el area del cuadrado//

$ladoc = "";
$areac = "";

if(isset($_POST['submitcu'])){
    if(!empty($_POST['ladocu'])){
        areaCuadrado($_POST['ladocu']);

    }else{
        $error = "Ingrese el lado porfavor";
    }

}


function areaCuadrado($ladin){

    global $ladocu, $areac;

    $areac = ($ladin * $ladin);

    return TRUE;

}

//Finaliza la logica para calcular el area del cuadrado//

?>