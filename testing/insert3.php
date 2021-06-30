<?php
  include 'connect.php';
  if (!empty($_POST['q'])) {
    $x = $_POST['q'];
    $sql = "SELECT PocetRan FROM tank WHERE Nazev = '$x' AND Prubojnost1 != 10000";
    $res = $connect->query($sql);
    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_array($res)) {
        $pocetRan = $row['PocetRan'];
      }
    }
    $sql = "UPDATE tank SET Nazev='$x', PocetRan='$pocetRan' WHERE Prubojnost1 = '10000'";
    $connect->query($sql);
    mysqli_close($connect);
  }
?>

