<?php
function formatearFecha($fecha)
{
    $dia=substr($fecha,8,2);
    $mes=substr($fecha,5,2);
    $anio=substr($fecha,0,4);
    $hora=substr($fecha,11,5);
    $fechaformateada=$dia."/".$mes."/".$anio."/".$hora;
    return $fechaformateada;
}

function UsuarioPassword($Cedula,$nombre,$Apaterno,$Amaterno)
{
    $inicial1=substr($nombre,0,1);
    $inicial2=substr($Apaterno,0,1);
    $inicial3=substr($Amaterno,0,1);
    $Username=$inicial1.$inicial2.$inicial3.$Cedula;
    return $Username;
}

function estado($nota){
    if($nota>=51)
    {
        $estado="APROBADO FELICIDADES";
    }else
    {
        $estado="REPROBADO A PONERLE MAS EMPEÑO";
    }
    return $estado;
}
?>