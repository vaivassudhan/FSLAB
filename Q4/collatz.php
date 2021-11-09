<?php
    function collatz($n){
        $res=[$n];
        if($n<1){
            return [];
        }
        while($n !=1){
            if($n % 2 ==0){
                $n = $n/2;
            }
            else{
                $n = 3*$n+1;
            }
            array_push($res,$n);
        }
        return $res;
    }
    print_r(collatz(5));
    echo "<br>";
    print_r(collatz(12));

?>