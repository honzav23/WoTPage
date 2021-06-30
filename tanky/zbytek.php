<?php

$zbytek = 
'Pancíř korby:*'.$korbapred.' mm / '.$korbabok.' mm / '.$korbazad.' mm*
Pancíř věže:*'.$vezpred.' mm / '.$vezbok.' mm / '.$vezzad.' mm*
Počet životů:*'.$zivoty.'*
Maximální náklad:*'.$naklad.' kg*
Hmotnost:*'.$hmotnost.' kg*
Dohled:*'.$dohled.'*binoOp
Binokulární dalekohled s vybavením:**bino
Cena:*'.$cena.'*
Náklady na výzkum:*'.$vyzkum.'*';

function PaintTable2($arr) {
  
$lines = explode("\n", $arr);

echo '<table id="zbytek">';
echo '<tr><th colspan="3" id="vrsek">Zbytek</th></tr>';
foreach ($lines as $radek) {
  $bunky = explode('*', $radek);
  
 $hlas = "<tr><th>$bunky[0]</th><td id=$bunky[2]>$bunky[1]</td></tr>";
          
echo $hlas;
}

echo '</table>';
}

 PaintTable2($zbytek);
 
?>