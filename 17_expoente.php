<?php

print " \n Informe o número de base : \n ";
$base= (int) fgets (STDIN) ;

print " \n Informe o número do expoente: \n ";
$exp= (int) fgets  (STDIN) ;

$potencia= $base**$exp;

print "\n";
print $potencia;
print "\n";