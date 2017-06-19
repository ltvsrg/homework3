<?php

$d=[];
$q=[];
$z=[];
$dd=[];

$a=['Africa'=>['Panthera leo', 'Diceros bicornis', 'Acinonyx jubatus', 'Giraffa camelopardalis', 'Loxodonta'],
    'Australia'=>['Macropus', 'Ornithorhynchus anatinus', 'Phascolarctos cinereus', 'Dromaius novaehollandiae', 'Vombatidae'],
    'South America'=>['Eunectes murinus', 'Pygocentrus nattereri', 'Chrysocyon brachyurus', 'Lama glama', 'Cingulata']
];

foreach ($a as $n){
    foreach ($n as $f) {
        if(($s = explode(" ", $f)) && count($s)==2) {
                $q[] = $s[0];
                $z[] = $s[1];
        }
    }
}

$gt=shuffle($q);
$gth=shuffle($z);

for($i=0;$i<count($q);$i++) {
    for ($i = 0; $i < count($z); $i++) {
        $yy = $q[$i] . " " . $z[$i];
        $dd[]= $yy;
    }
}

foreach($a as $id=>$ss) {
    echo '<h2>', $id, '</h2>';
    foreach ($ss as $gty=>$gf) {
        for ($i=0;$i<count($dd);$i++) {
            if (strncmp($dd[$i], $gf, 4) == 0 ) {
                if($gty==3){
                    echo $dd[$i];
                }
                else {
                    echo $dd[$i], ', ';
                    break;
                }

            }
        }
    }
}
?>