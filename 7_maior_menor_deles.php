<?php 

print " \n Digite o primeiro número:";
 $num1 = (int) fgets (STDIN);

 print " \n Digite o segundo número:";
 $num2 = (int) fgets (STDIN);

 print " \n Digite o terceiro número:";
 $num3 = (int) fgets (STDIN);

 if ($num1>$num2 and $num2>$num3){
    //if=se

    print " \n O número maior é $num1. \n ";
    print " \n O número menor é $num3. \n ";
                                }

        
 elseif ($num1>$num3 and $num3>$num2){
    //if=se

    print " \n O número maior é $num1. \n ";
    print " \n O número menor é $num2. \n ";
                                }           


 elseif ($num2>$num3 and $num3>$num1) { 
 
    print " \n O número maior é $num2. \n ";
    print " \n O número menor é $num1. \n ";
                                      }

elseif ($num2>$num3 and $num3<$num1){
                                       //if=se
 print " \n O número maior é $num2. \n ";
 print " \n O número menor é $num3. \n ";
                                    }

elseif ($num3>$num1 and $num1>$num2)    {  
 
    print " \n O número maior é $num3. \n ";
    print " \n O número menor é $num2. \n ";
                                        }

elseif ($num3>=$num2 and $num2>$num1)    {  
 
    print " \n O número maior é $num3. \n ";
    print " \n O número menor é $num1. \n ";
                                        }

elseif ($num3==$num2 and $num2==$num1)    { 

 print " \n Os números são iguais. \n ";

   }
                                          
                                      
                                                                           



                  
                                        
                                        

                                                
