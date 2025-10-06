<?php

/*
    Tipo: Principal
    Proyecto 2.2 Cálculo Lanzamiento de Proyectiles
    Autor: Jaime Gómez Mesa
    Fecha: 2025/10/06
    Descripción: Crear un procedimiento PHP que permita resolver problemas de lanzamiento de proyectiles.,
    de forma que dada la velocidad inicial (VO) en (m/s) y el ángulo de elevación (A0) en grados, devuelva los siguientes cálculos ",
*/

define("G", 9.8);


$vo = isset($_POST['vo']) ? floatval($_POST['vo']) : 0;
$angulo = isset($_POST['angulo']) ? floatval($_POST['angulo']) : 0;

$anguloRad = deg2rad($angulo);

$vox = $vo * cos($anguloRad); 
$voy = $vo * sin($anguloRad); 
$xmax = ($vo ** 2 * sin(2 * $anguloRad)) / G;
$ymax = ($vo ** 2 * pow(sin($anguloRad), 2)) / (2 * G); 
$t = (2 * $vo * sin($anguloRad)) / G; 

?>