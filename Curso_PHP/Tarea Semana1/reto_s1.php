<?php
    $usuarios = array(
        array(
            "nombre" => "Juan",
            "edad" => 17,
            "genero" => "M"
        ),
        array(
            "nombre" => "María",
            "edad" => 18,
            "genero" => "F"
        ),
        array(
            "nombre" => "Carlos",
            "edad" => 45,
            "genero" => "M"
        )
    );
    /* También se puede hacer así:
    $usuarios = [
        [
            "nombre" => "Juan",
            "edad" => 17,
            "genero" => "M"
        ],
        [
            "nombre" => "María",
            "edad" => 18,
            "genero" => "F"
        ],
        [
            "nombre" => "Carlos",
            "edad" => 45,
            "genero" => "M"
        ]
    ];
    */

    $horaActual = date("H");

    foreach($usuarios as $usuario){
        if($horaActual >=6 && $horaActual <= 12){
            $saludo = "Buenos días";
        } else if($horaActual >= 13 && $horaActual <= 20){
            $saludo = "Buenas tardes";
        } else  if($horaActual >= 21 || $horaActual <= 5){
            $saludo = "Buenas noches";
        }

        if($usuario['edad']<18){
            $permiso = "Acceso restringido: Contenido para adultos";
        } else {
            $permiso = "Acceso total: Bienvenido al panel de control";
        }
        echo $saludo . ", " . $usuario["nombre"] . " - " . $permiso . "<br>";
    }

?>