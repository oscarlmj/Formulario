<?php
$fichero="./datosformulariooscar.txt";
$gestor=fopen($fichero,"r");
$cont=fread($gestor,filesize($fichero));
fclose($gestor);
$splitcont=explode(",",$cont);
$valores=array();

print_r($splitcont);

for($i=0;$i<=count($splitcont)-1;$i++)
{
    
}
?>