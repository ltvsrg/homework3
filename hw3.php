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

for ($i = 0; $i < count($q); $i++) {
    for ($i = 0; $i < count($z); $i++) {
        $yy=$q[$i] . " " . $z[$i];
        $dd[]= $yy;
    }
}

foreach($a as $id=>$ss) {
    foreach ($ss as $gty => $gf) {
        for ($i=0;$i<count($dd);$i++) {
            if ((strncmp($dd[$i], $gf, 4) == 0)&& ($id=='Africa') ) {
                $tr[]=$dd[$i];
                if ($gty==3){
                    echo '<h2>', $id, '</h2>',implode(', ',$tr),'<br>';
                }
            }
            else if ((strncmp($dd[$i], $gf, 4) == 0)&& ($id=='Australia')){
                $rt[]=$dd[$i];
                if ($gty==3){
                    echo '<h2>', $id, '</h2>',implode(', ',$rt),'<br>';
                }
            }
             else if ((strncmp($dd[$i], $gf, 4) == 0)&& ($id=='South America')){
                $op[]=$dd[$i];
                 if ($gty==3){
                     echo '<h2>', $id, '</h2>', implode(', ',$op),'<br>';
                 }
            }
        }
    }
}
