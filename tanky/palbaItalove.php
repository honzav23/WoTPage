<?php
$palba = '*'.$naboj1.'*'.$naboj2.'*'.$naboj3.'******
  Průbojnost:*'.$prubojnost1.' mm*'.$prubojnost2.' mm*'.$prubojnost3.' mm******
  Poškození:*'.$poskozeni1.'*'.$poskozeni2.'*'.$poskozeni3.'********
  Počet ran v zásobníku:*'.$pocetRan.'*********
  Nabíjení mezi ranami:*'.$meziNabijeni.' s********
  Čas nabití jednotlivých ran:*'.$nabijeni.'*'.$nabijeni2.'*'.$nabijeni3.'*nabijak*'.$nabijeni4.'*nabijak2*nabijak3*nabijak4
Čas zaměření:*'.$zamereni.'***zamerovak****
Přesnost:*'.$presnost.'***Presnost****';



function PaintTable($arr) {
  
$lines = explode("\n", $arr);

echo '<table id="palba">';
echo '<tr><th colspan="5" id="vrsek">Palebná síla</th></tr>';
foreach ($lines as $line) {
  $cells = explode('*', $line);
  
 $tableLines = "<tr><th>$cells[0]</th><td id=$cells[4]>$cells[1]</td><td id=$cells[6]>$cells[2]</td><td id=$cells[7]>$cells[3]</td><td id=$cells[8]>$cells[5]</td>";
          
echo $tableLines;
}

echo '</table>';
}



 
  PaintTable($palba);
 
 
?>