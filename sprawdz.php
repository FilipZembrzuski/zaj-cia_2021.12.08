<?php

$stanp = $_GET['stan'];
if($stanp==1){
    echo("Zmienna: ".$stanp);
}
else if($stanp==2){
    echo("zmienna inna: ".$stanp);
}
else{
    echo "brak danych do pobrania";
}


?>