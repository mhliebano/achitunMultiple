<?php
    /*variables del sistema, no tocar*/
    global $estilo;
    global $titulo;
    global $inicio;
    global $ctrlIndex;
    global $script;
    global $datos;
    global $mascara;
    global $dep;
    global $traza;
    global $base;
    global $ns;
    /*Titulo Aplicacion*/
    $titulo=":-- APLICACION 1 --:";
    /*Modulo de Inicio*/
    $inicio="";
    /*ruta inicial*/
    $base="app1";
    /*Mi estilo personal afecta toda la aplicacion*/
    $estilo=array();

    /*Mi javascript personal afecta toda la aplicacion*/
    $script=array();
    
    /* Mostrar o no warning, errors, etc de php*/
    error_reporting(0);
    
    /*COnfiguracion de la conexion a la Base de datos*/
       
    $tipo="";
    $usuario="root";
    $clave="local";
    $servidor="localhost";
    $bd="";
    
    /*nombre de session*/
    $ns="achitun";

    /* habilitar el modo Desarrollo 1; 0 para desactivarlo*/
    $dep=1;
?>
