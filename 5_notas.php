<?php

print "\n Digite a primeira nota: \n";
$n1 = (float) fgets(STDIN);

print "\n Digite a segunda nota: \n";
$n2 = (float) fgets(STDIN);

$media=$n1+$n2/2;

if ($media>=7) {

    if ($media >=7 and $media <10)
     print "/n  Parabens você foi aprovado !";

     elseif ($media==10) 
     print "/n  Parabens você foi aprovado com distinção !";

}

else { 
Print "Voce foi reprovado !";
}
