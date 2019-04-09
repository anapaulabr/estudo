<?php 
$n1=1;
$n2=0;

 for($i=0; $i<=14; $i++){
    $fibo=$n1+$n2;
    $n1=$n2;
    $n2=$fibo;
     
    print" $fibo \n ";

 } 