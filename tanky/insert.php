
    
    <?php
  
  include 'D:\wamp64\www\WoTPage\testing\connect.php';
  error_reporting (E_ALL ^ E_NOTICE); 
    $q = false;
    $q = $_GET['q'];
    $arr = explode(";", $q);
    if ($arr[0] == "2") {
      $x = $arr[0];
      $y = $arr[1];
      $sql ="SELECT Bullet, Naboj2, Naboj3, Penetrace1, Penetrace2, Penetrace3, Poskozeni1, Poskozeni2, Poskozeni3, Nabijeni, Zamereni, Presnost FROM dela WHERE Nazev = '$y'";
      $result = mysqli_query($connect, $sql);
      while(($row = mysqli_fetch_array($result))) {
        $palba2 = array();
        $palba2[] = array(
        'force' => '*'.$row['Bullet'].'*'.$row['Naboj2'].'*'.$row['Naboj3'].'**
          Průbojnost:*'.$row['Penetrace1'].' mm*'.$row['Penetrace2'].' mm*'.$row['Penetrace3'].' mm**
          Poškození:*'.$row['Poskozeni1'].'*'.$row['Poskozeni2'].'*'.$row['Poskozeni3'].'****
          Čas nabíjení:*'.$row['Nabijeni'].'***nabijak
          Čas zaměření:*'.$row['Zamereni'].'***zamerovak
          Přesnost:*'.$row['Presnost'].'***Presnost',
        );
        function PaintNextTable($text) {
          $data = explode("\n", $text);
          echo '<table id="palba2">';
          echo '<tr><th colspan="4" id="vrsek">Palebná síla</th></tr>';
          foreach ($data as $radek) {
            $bunky = explode('*', $radek);
            $hlas = "<tr><th>$bunky[0]</th><td id=$bunky[4]>$bunky[1]</td><td>$bunky[2]</td><td>$bunky[3]</td>";
            echo $hlas;
          }
        echo '</table>';
        }
        foreach ($palba2 as $tank) { 
          PaintNextTable($tank['force']);
        }
      }
    }
    ?>