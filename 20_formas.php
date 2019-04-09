<?php 
$n1=1;
$n2=0;

 for($i=0; $i<=7; $i++){
    $fibo=$n1+$n2;
    $n1=$n2;
    $n2=$fibo;
     
    print"  \n * * * * * * * *  ";

 } 

    print"  \n ===============\n  ";
 


    for($i=0; $i<9; $i++){
        
      for ($l=0; $l<$i; $l++){ 
        print" * " ;
      }
      print"\n" ;
       
   } 

    print "  \n ===============\n";

  
  
  
    for($i=0; $i<9; $i++){
        
      for ($l=0; $l<9-$i; $l++){ 
        print"   " ;
      }

      for ($l=0; $l<$i; $l++){ 
         print" * " ;
      }

      print"\n" ;
       
   } 

    print "  \n ===============\n";

    