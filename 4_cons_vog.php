<?php 
 print " \n Informe um letra:";
 $letra = fgetc(STDIN);
 

 if ( $letra == "A" or  $letra=="E" or $letra=="I" or $letra=="O" or $letra=="U" or $letra == "a" or  $letra=="e" or $letra=="i" or $letra=="o" or $letra=="u" ) { 
    //if=se

    print " \n  A letra digitada é uma vogal. \n ";
                       }


else {
        //else=se não
    print " \n Letra digitada é uma consoante \n ";
}
