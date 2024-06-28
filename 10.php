<?php    
echo" Now we are explain Function in Php <br>";


function sumofarr($marks){
    $sum=0;
    foreach($marks as $value){
        $sum+=$value;
        return $sum;
    }
}

$arbabmarks=[10,10,30,20,10];
$arbab=sumofarr($arbabmarks);
echo" TOTAL MARKS OF ARBAB IS  $arbab <br>";

?>