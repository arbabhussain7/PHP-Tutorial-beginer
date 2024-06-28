<?php


echo" Now We explain For Loop  <br><br>";
// echo " Print number 01 to 10 by using FOR loop<br><br> ";

// for($i =1 ;$i<=10;$i++){
    //     echo $i ;
    //     echo " <br>"; 
    // }
    
    
    echo" Now We explain Foreach Loop  <br><br>";

$arr=array(1,2,3,4,5,6);
// for($i =0 ;$i< count($arr);$i++){
// echo $arr[$i];
// echo ' ';
// }
                   //(OR)

foreach($arr as $value ){
    echo $value ;
    echo"   ";
}

?>