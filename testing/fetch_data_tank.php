<?php
include 'connect.php';


if(isset($_POST["action"]))
{
  $category = $_POST['kategorie'];
 $query = "
  SELECT * FROM tank WHERE Prubojnost1 != 10000 AND Kategorie = '".$category."'";
 if(isset($_POST["narod"]))
 {
  $narod_filter = implode("','", $_POST["narod"]);
  $query .= "
   AND narod IN('".$narod_filter."')
  ";
 }
 if(isset($_POST["tier"]))
 {
  $tier_filter = implode("','", $_POST["tier"]);
  $query .= "
   AND tier IN('".$tier_filter."')
  ";
 }
 if(isset($_POST["premko"]))
 {
  $premko_filter = implode("','", $_POST["premko"]);
  $query .= "
   AND status IN('".$premko_filter."')
  ";
 }

 $execution = mysqli_query($connect, $query);
 $total_row = mysqli_num_rows($execution);
 $output2 = '';
 if($total_row > 0) {
  while ($row = mysqli_fetch_array($execution)) {
    if ($row["Nabijeni2"] > 0) {
      if ($row["Status"] == "premko") {
        $output2 .= '<tr><td id="premko"><a href="http://tanky/Progettocopy" class="link">'.$row["Nazev"].' </a></td></tr>';
      }
      else {
        $output2 .= '<tr><td><a href="http://tanky/Progettocopy" class="link">'.$row["Nazev"].' </a></td></tr>';
      }
    }
    else {
      if ($row["Status"] == "premko") {
        $output2 .= '<tr><td id="premko"><a href="http://tanky/tank" class="link">'.$row["Nazev"].' </a></td></tr>';
      }
      else {
        $output2 .= '<tr><td><a href="http://tanky/tank" class="link">'.$row["Nazev"].' </a></td></tr>';
      }
    }
  }
}
 echo '<table class='.$_POST["trida"].'><th>'.$_POST["nadpis"].'</th>'.$output2. '</table>';
}
include 'linkScript.php';
?>