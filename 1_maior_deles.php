<?php 
 print " \n Digite o primeiro número:";
 $num1 = (int) fgets (STDIN);

 print " \n Digite o segundo número:";
 $num2 = (int) fgets (STDIN);

 if ($num1>$num2){
    //"!=" significa diferente de.
    //if=se

    print " \n O número maior é $num1. \n ";
                 }
elseif($num1==$num2) {
    print " \n Os números são de mesmo valor. \n ";
}


else {
    //else=se não

    print " \n O número maior é $num2. \n ";

     }



