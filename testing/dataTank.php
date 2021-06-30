<?php
     include 'connect.php';
     $query = "SELECT * FROM tank WHERE Nazev = '$nazev'";
     $result = mysqli_query($connect, $query);
     
     if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {    $naboj1 = $row['Naboj1'];
                $naboj2 = $row['Naboj2'];
                $naboj3 = $row['Naboj3'];
                $prubojnost1 = $row['Prubojnost1'];
                $prubojnost2 = $row['Prubojnost2'];
                $prubojnost3 = $row['Prubojnost3'];
                $poskozeni1 = $row['Poskozeni1'];
                $poskozeni2 = $row['Poskozeni2'];
                $poskozeni3 = $row['Poskozeni3'];
                $nabijeni = $row['Nabijeni']; 
                $zamereni = $row['Zamereni'];
                $presnost = $row['Presnost'];
                $rychlost = $row['Rychlost'];
                $couvani = $row['Couvani'];
                $vykon = $row['Vykon'];
                $konetuna = $row['KoneTuna'];
                $otacenivez = $row['OtaceniVez'];
                $otacenikorba = $row['OtaceniKorba'];
                $elevace = $row['Elevace'];
                $deprese = $row['Deprese'];
                $korbapred = $row['Korbapred'];
                $korbabok = $row['Korbabok'];
                $korbazad = $row['Korbazad'];
                $vezpred = $row['Vezpred'];
                $vezbok = $row['Vezbok'];
                $vezzad = $row['Vezzad'];
                $zivoty = $row['Zivoty'];
                $naklad = $row['Naklad'];
                $hmotnost = $row['Hmotnost'];
                $dohled = $row['Dohled'];
                $cena = $row['Cena'];
                $vyzkum = $row['Vyzkum'];
                $meziNabijeni = $row['MeziNabijeni'];
                $pocetRan = $row['PocetRan'];
                $nabijeni2 = $row['Nabijeni2'];
                $nabijeni3 = $row['Nabijeni3'];
                $nabijeni4 = $row['Nabijeni4'];
                
                
           }  
          }
    ?>   
