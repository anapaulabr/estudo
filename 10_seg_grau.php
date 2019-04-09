<?php

print "\n Digite o primeiro valor (a): \n";
$a = (int) fgets(STDIN);

print "\n Digite o segundo valor (b): \n";
$b = (int) fgets(STDIN);

print "\n Digite o terceiro valor (c): \n";
$c = (int) fgets(STDIN);

$delta = pow($b,2)-4*$a*$c;

if ($a==0) {
    print" \n Sua equação não é de segundo grau \n " ;
}

elseif ($delta<0) {

    print " \n A equação não possui valores rais \n ";
    
                  } 

 elseif ($delta==0)  {             


print "\n O valor do delta desses três valores é $delta  tendo só uma raiz real (x1) \n";

$x1 = (-$b+sqrt($delta))/2*$a;

print "\n O valor da sua equação de segundo grau é de de x1 sendo $x1  \n"; 

 }


elseif ($delta>0) { 
  
print "\n O valor do delta desses três valores é $delta \n " ;

$x1 = (-$b+sqrt($delta))/2*$a;

$x2 = (-$b-sqrt($delta))/2*$a; 

print "\n O valor da sua equação de segundo grau é de de x1 sendo $x1 e x2 sendo $x2 \n";

                 }
  

