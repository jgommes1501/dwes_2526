<?php

$V = isset($_POST['voltaje']) ? floatval($_POST['voltaje']) : 0;
$R = isset($_POST['resistencia']) ? floatval($_POST['resistencia']) : 0;

$I  = round(($R != 0 ? $V / $R : 0), 2);
$P  = round($V * $I, 2);
$E  = number_format($P * 3600, 2, ',', '.');
$Rp = round($R / 2, 2);

?>