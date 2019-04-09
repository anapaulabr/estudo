<?php
print " \n Informe o primeiro número: \n " ;
$n1 = (float) fgets (STDIN) ;

print " \n Informe o segundo número: \n " ;
$n2 = (float) fgets (STDIN) ;

print " \n Informe o terceiro número: \n " ;
$n3 = (float) fgets(STDIN);

print "========Decrescente========";
$num= array ($n1, $n2 , $n3);

rsort ($num);
foreach ($num as $decrescente) {
 print " \n $decrescente \n ";
                               }

