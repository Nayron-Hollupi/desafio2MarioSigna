<?php



$t = $_GET['numero'];


if($t > 0 && $t <= 8){
for($i = 1; $i <= $t; $i+= 1){
    for($k = $t; $k > $i; $k-=1){
        for($p = 0 ; $p < 3; $p++){
            print_r("&nbsp;");
         }
    
    }
    for($j = 0; $j < $i ; $j++){
        print_r("#");
    }
 for($p = 0 ; $p < 3; $p++){
    print_r("&nbsp;");
 }
    for ($j=$i; $j>0; $j--){
        print_r("#");
    }
    print_r("<br>");
    
}
}else {
    echo "Ops, Favor digitar um numero de 1 a 8!!!";
}