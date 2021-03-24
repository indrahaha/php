<?php

function luasSegitiga($alas,$tinggi){
    $segitiga= 1/2 *$alas *$tinggi;
    return $segitiga;
    echo "luas segitiga adalah";
}
function kelilingSegitiga($a, $b, $c){
    $kelSegitiga= $a + $b +$c;
    return $kelSegitiga;
}

function hitungluasLingkaran($r){
    $lingkaran= 3.14 * $r *$r;
    return $lingkaran;
}
function hitungkelilingLingkaran($r){
    $kelLing = 3.14 * 2 *$r;
    return $kelLing;
}
function luasjajargenjang($a, $t){
    $jajargenjang = $a * $t;
    return $jajargenjang;
}

function kelJajar($alas, $miring){
    $kelJajar = 2 * ($alas + $miring);
    return $kelJajar;
}

?>