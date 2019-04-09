<?php 

print " \n Digite o primeiro número:";
 $num1 = (int) fgets (STDIN);

 print " \n Digite o segundo número:";
 $num2 = (int) fgets (STDIN);

 print " \n Digite o terceiro número:";
 $num3 = (int) fgets (STDIN);

 print " \n Digite o quarto número:";
 $num4 = (int) fgets (STDIN);

 print " \n Digite o quinto número:";
 $num5 = (int) fgets (STDIN);

 $soma= $num1+$num2+$num3+$num4+$num5;
 $media=$soma/5;

 print " \n A soma dos 5 números foi de $soma com media $media \n ";