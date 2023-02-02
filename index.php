*<?php

    function totalOvers($nbreballe) {
        $jeu = ceil($nbreballe/6) - 1;
        echo base_convert( $nbreballe + $jeu,10,7);
    }

    totalOvers(2400);
?>
