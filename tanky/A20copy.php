<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <?php
      include 'D:/wamp64/www/WoTPage/testing/insert3.php';
      include 'D:\wamp64\www\WoTPage\testing\connect.php';
      $question = "SELECT * FROM tank WHERE Prubojnost1 = '10000'";
      $res = mysqli_query($connect, $question);
      if(mysqli_num_rows($res) > 0) { 
        while($radek = mysqli_fetch_array($res)) {
          $name = $radek['Nazev'];
          $numberOfShots = $radek['PocetRan'];
        }  
      }
      $nazev = $name;
      include 'D:\wamp64\www\WoTPage\testing\connect.php';
      include 'dataTank.php';
      include 'insert.php';
    ?>   
    <title><?php echo $nazev ?></title>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   <script src="JS/javascript-wotkopedie"></script>
    <link rel="stylesheet" type="text/css" href="styly-tank.css">
  </head>
  <body>
  <p id="case"></p>
    <?php
    // Loads the equipment available for each tank type
    echo '<div class="obrazky">';
    include 'vybaveni.php';
    include 'bony.php';
    echo '</div>';
      if ($numberOfShots == 0) {
        getEquipment("bratri", "ventilace", "bino", "optika", "zamerovak", "nabijak");
      }
      else {
        getEquipment("bratri", "ventilace", "bino", "optika", "zamerovak");
      }
      $delo1 = false;
      $delo2 = false;
      if ($nazev == "Rhm.-Borsig Waffenträger") {
        $nazev = "Borsig";
      }

      // Show more guns if supported.
      $query= "SELECT Delo1, Delo2 FROM dela WHERE Nazev = '$nazev'";
      $result = mysqli_query($connect, $query);
      if(mysqli_num_rows($result) > 0) {  
        while($row= mysqli_fetch_array($result)) {
          $delo1 = $row['Delo1'];
          $delo2 = $row['Delo2'];
        } 
      }

      // Option form for choosing guns.
      echo "<form action=''>
        <select id='dela' class='vyber'>
        <option class='moznost' value='Delo1'>$delo1</option>
        <option class='moznost' value='Delo2'>$delo2</option>
        </select>
        </form>";
    echo "<h1>$name</h1>";
    echo "<p id='nabijeni'>$nabijeni</p>";
    echo "<p id='zamerovani'>$zamereni</p>";
    echo "<p id='presnost'>$presnost</p>";
    echo "<p id='dohled'>$dohled</p>";

      // Show firepower of a tank.
      if ($numberOfShots == 0) {
        include "palba.php";
      }
      else {
        include "palbaAuto.php";
      }

      // Show mobility of a tank.
      include "mobilita.php";

      // Show the rest.
      include "zbytek.php";
      
      include 'vyhledavani.php';
      
      echo '<a class="odkaz" href="http://testing/">←Zpět na úvodní stránku</a>'
    ?>
    <script>
      // Changes the values when a gun is changed.
      $(document).ready(function() {
        $("#dela").change(function(){
          var delo = document.getElementById("dela").value;
          var jmeno = "<?php echo $nazev?>"
          var gunNum;
          if (delo == "Delo2") {
            gunNum = "2";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("palba").innerHTML = this.responseText;
                var newReload = document.getElementById('nabijak').innerHTML;
                document.getElementById("nabijeni").innerHTML = newReload;
                var newAimTime = document.getElementById('zamerovak').innerHTML;
                document.getElementById("zamerovani").innerHTML = newAimTime;
                var newAccuracy = document.getElementById('Presnost').innerHTML;
                document.getElementById("presnost").innerHTML = newAccuracy;
              }
            };
            xmlhttp.open("GET", "insert.php?q="+gunNum+";"+jmeno, true);
            xmlhttp.send();
          }
          else if (delo == "Delo1") {
            gunNum = "1";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                location.reload();
              }
            };
            xmlhttp.open("GET", "insert.php?q="+gunNum+";"+jmeno, true);
            xmlhttp.send();
          }
        });
      });

      // Hide gun choice when tank does not have 2 guns to choose from.  
      var guns = "<?php echo $moreGuns ?>";
      var sel = document.getElementById("dela");
      if (!guns) {
        sel.style.display = "none";
      }
    </script>
  </body>
</html>
