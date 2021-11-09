<?php
    function convert($seconds){
        $dt1 = new DateTime("@0");
        $dt2 = new DateTime("@$seconds");
        return $dt1->diff($dt2)->format('%a days %h hours %i minutes %s seconds');

    }
    echo convert(20000);
?>