<?php 

print " \n Digite um numero menor que 1000: \n " ;
$numero= (int) fgets (STDIN) ;

print"\n Seu número apresenta: \n" ;

$milhar = (int)($numero/1000);
print " $milhar milhar \n";
$numero = ($numero - ($milhar * 1000));

$centena = ((int)($numero/100));

if ($centena>1 or $centena<=0){ 

  print " $centena centenas \n"; 

$numero = ($numero - ($centena * 100));
 }

elseif ($centena<=1){ 

  print " $centena centena \n"; 

$numero = ($numero - ($centena * 100));

 }


 $dezena = ((int)($numero/10));


if ($dezena>1 or $dezena<=0){ 


print " $dezena dezenas \n";

$numero=($numero -($dezena*10));

}

elseif ($dezena<=1){ 

print " $dezena dezena \n";

$numero=($numero -($dezena*10));
}

$unidade =((int)($numero/1));

if ($unidade>1 or $unidade<=0){ 

print " $unidade unidades \n";

}

elseif ($unidade<=1){ 

    print " $unidade unidade \n";
    
    }


    


