<?php
    function datediff($dt1,$dt2){
        $d1 = new DateTime($dt1);
        $d2 = new DateTime($dt2);
        $diff = $d1->diff($d2);
        return $diff->format('%a');
    }
    echo datediff('2012-01-01','2012-01-02');
?>