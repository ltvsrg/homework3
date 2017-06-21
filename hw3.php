<?php

$q=[];
$z=[];
$dd=[];
$tr=[];
$rt=[];
$op=[];

$a=['Africa'=>['Panthera leo', 'Diceros bicornis', 'Acinonyx jubatus', 'Giraffa camelopardalis', 'Loxodonta'],
    'Australia'=>['Macropus', 'Ornithorhynchus anatinus', 'Phascolarctos cinereus', 'Dromaius novaehollandiae', 'Vombatidae'],
    'South America'=>['Eunectes murinus', 'Pygocentrus nattereri', 'Chrysocyon brachyurus', 'Lama glama', 'Cingulata']
];

foreach ($a as $id =>$n){
    foreach ($n as $ii=>$f) {
        if(count($s=explode(" ", $f))==2) {
            $q[] = $s[0];
            $z[] = $s[1];
        }
    }
}

shuffle($q);
shuffle($z);

foreach($a as $id=>$ss) {
    foreach ($ss as $gty => $gf) {
        for ($i = 0; $i < count($q); $i++) {
            for ($i = 0; $i < count($z); $i++) {
                if ((strncmp($q[$i], $gf, 4) == 0)) {
                    if ($id == 'Africa') {
                        $tr[] = $q[$i]." ".$z[$i];
                    } else if ($id == 'Australia') {
                        $rt[] = $q[$i]." ".$z[$i];
                    } else {
                        $op[] = $q[$i]." ".$z[$i];
                    }
                }
            }
        }
    }
    if($id=='Africa') {
        echo '<h2>', $id, '</h2>', implode(', ', $tr), '<br>';
    }
    else if ($id == 'Australia') {
        echo '<h2>', $id, '</h2>', implode(', ', $rt), '<br>';
    }
    else {
        echo '<h2>', $id, '</h2>', implode(', ', $op), '<br>';
    }
}
