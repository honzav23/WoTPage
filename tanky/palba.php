<?php
$palba = 
  '*'.$naboj1.'*'.$naboj2.'*'.$naboj3.'**
  Průbojnost:*'.$prubojnost1.' mm*'.$prubojnost2.' mm*'.$prubojnost3.' mm**
  Poškození:*'.$poskozeni1.'*'.$poskozeni2.'*'.$poskozeni3.'****
  Čas nabíjení:*'.$nabijeni.'***nabijak
  Čas zaměření:*'.$zamereni.'***zamerovak
  Přesnost:*'.$presnost.'***Presnost';

function PaintTable($arr) {  
  $lines = explode("\n", $arr);
  echo '<table id="palba">';
  echo '<tr><th colspan="4" id="vrsek">Palebná síla</th></tr>';
  foreach ($lines as $line) {
    $cells = explode('*', $line);
    $tableLines = "<tr><th>$cells[0]</th><td id=$cells[4]>$cells[1]</td><td>$cells[2]</td><td>$cells[3]</td>";        
    echo $tableLines;
  }
  echo '</table>';
}
  PaintTable($palba);
?>