<?php


 $day = date("d");   
 $month = date("n");

 Echo "Vandaag is het :${day} / ${month}".PHP_EOL;

function seizoen ($day, $month){
   /*  lente: 21 maart 3 t.e.m. 20 juni 6;
    zomer: 21 juni 6 t.e.m. 20 september 9;
    herfst: 21 september t.e.m. 20 december;
    winter: 21 december t.e.m. 20 maart. */

    if (($month >= 3 && $day >= 21) || $month == 4 || $month ==5 ||($month <= 6 && $day <= 20)){
        return "het is lente";
    }
    elseif (($month >= 6 && $day >= 21) || $month == 7 || $month == 8 ||($month <= 9 && $day <= 20)){
        return "het is zomer";
    }elseif (($month >= 9 && $day >= 21) || $month == 10 || $month == 11 ||($month <= 12 && $day <= 20)){
        return "het is herfst";
    }elseif (($month >= 12 && $day >= 21) || $month == 1 || $month == 2 ||($month <= 3 && $day <= 20)){
        return "het is winter";
    }
    }

echo seizoen($day, $month);

