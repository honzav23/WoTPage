<?php
if ($otacenivez == "Není věž") {
    $mobilita =
    'Maximální rychlost:*'.$rychlost.' km/h
    Couvání:*'.$couvani.' km/h
    Výkon:*'.$vykon.' koní
    Počet koní/tuna:*'.$konetuna.'
    Otáčení tanku:*'.$otacenikorba.' °/s
    Elevace:*'.$elevace.' °
    Deprese:*-'.$deprese.' °
    Otáčení věže:*'.$otacenivez;
}
else {
    $mobilita =
    'Maximální rychlost:*'.$rychlost.' km/h
    Couvání:*'.$couvani.' km/h
    Výkon:*'.$vykon.' koní
    Počet koní/tuna:*'.$konetuna.'
    Otáčení tanku:*'.$otacenikorba.' °/s
    Elevace:*'.$elevace.' °
    Deprese:*-'.$deprese.' °
    Otáčení věže:*'.$otacenivez. '°/s';
}


function PaintTable1($arr) {
  
$lines = explode("\n", $arr);

echo '<table id="mobilita">';
echo '<tr><th colspan="3" id="vrsek">Mobilita</th></tr>';
foreach ($lines as $radek) {
  $bunky = explode('*', $radek);
  
 $hlas = "<tr><th>$bunky[0]</th><td>$bunky[1]</td></tr>";
          
echo $hlas;
}

echo '</table>';
}

  PaintTable1($mobilita);
 
 
?>