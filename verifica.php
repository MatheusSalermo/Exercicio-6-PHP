<?php


$num = $_GET['txtNum'];
$primo=0;

for($i=1;$i<=$num;$i++){
    $resultado=$num%$i;

    if($resultado==0){
        $primo++;
    }
}

if($primo==2){
    echo("O número é primo");
}

else{
    echo("O número NÃO é primo");
}
?>