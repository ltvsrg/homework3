<?php

$d=[];
$q=[];
$z=[];
$dd=[];

$a=['Africa'=>['Panthera leo', 'Diceros bicornis', 'Acinonyx jubatus', 'Giraffa camelopardalis', 'Loxodonta'],
    'Australia'=>['Macropus', 'Ornithorhynchus anatinus', 'Phascolarctos cinereus', 'Dromaius novaehollandiae', 'Vombatidae'],
    'South America'=>['Eunectes murinus', 'Pygocentrus nattereri', 'Panthera onca', 'Lama glama', 'Cingulata']
];

foreach ($a as $n){
    foreach ($n as $f){
        if (strpos($f, ' ')==true){
            array_push($d,$f);
        }
    }
}

for($i=0;$i<count($d);$i++) {
    $s = explode(" ", $d[$i]);
    array_push($q,$s[0]);
    array_push($z,$s[1]);
}
$gt=shuffle($q);
$gth=shuffle($z);


for($i=0;$i<count($q);$i++) {
    for ($i = 0; $i < count($z); $i++) {
        $yy = $q[$i] . " " . $z[$i];
        array_push($dd, $yy);
    }
}


foreach($a as $id=>$ss){
    foreach ($ss as $gf) {
        for ($i = 0; $i < count($dd); $i++) {
            if (strncmp($dd[$i], $gf, 4)==0) {
                echo '<h2>',$id,'</h2>', $dd[$i];
                break;
            }
        }
    }
}
?>