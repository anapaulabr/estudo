<?php

print " \n Qual é o valor do primeiro produto?: \n " ;
$p1 = (float) fgets (STDIN) ;

print " \n Qual o valor do segundo produto?: \n " ;

$p2 = (float) fgets (STDIN) ;

print " \n Qual o valor do terceiro produto?: \n " ;
$p3 = (float) fgets (STDIN)  ;

if ($p1<$p2 and $p1<$p3){
    //if=se

    print " \n O produto mais indicado e com o menor preço é primeiro. \n ";
    
                        }

 elseif ($p1<=$p2 and $p1<=$p3){
                    
                
    print " \n Os três produtos tem o mesmo preço escolha o de sua preferência!. \n ";
    
                                       }



 elseif ($p2<$p1 and $p2<=$p3) { 
 
    print " \n O produto mais indicado e com o menor preço é o segundo. \n ";

                               }
                                       

elseif ($p3<$p1 and $p3<$p2)    {  
 
    print " \n O produto mais indicado e com o menor preço é o terceiro. \n ";

                                }
