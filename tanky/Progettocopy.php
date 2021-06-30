<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <?php
 include 'D:/wamp64/www/testing/insert3.php';
 include 'D:\wamp64\www\testing\connect.php';
 $question = "SELECT * FROM tank WHERE Prubojnost1 = '10000'";
  $res4 = mysqli_query($connect, $question);
  
    if (mysqli_num_rows($res4) > 0)  {  
        while ($row = mysqli_fetch_array($res4))  {
            $name = $row['Nazev'];
        }  
    }
$nazev = $name;
    ?>

    <title><?php echo $name ?></title>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>     <script src="JS/italove.js"></script>
    <link rel="stylesheet" type="text/css" href="styly-tank.css">
    
    <?php
    include 'D:\wamp64\www\testing\connect.php';
    include 'dataTank.php';
    ?>
</head>
   <body>
   
<?php
include 'vybaveniItalove.php';

?>  

    <h1><?php echo $nazev ?></h1>
    <p id="nabijeni"><?php echo $nabijeni?></p>
    <p id="nabijeni2"><?php echo $nabijeni2?></p>
    <p id="nabijeni3"><?php echo $nabijeni3?></p>
    <p id="nabijeni4"><?php echo $nabijeni4?></p>
    <p id="zamerovani"><?php echo $zamereni?></p>
    <p id="presnost"><?php echo $presnost?></p>
    <p id="dohled"><?php echo $dohled?></p>
      
   <?php
 include "palbaItalove.php";
   
 include "mobilita.php";
  
 include "zbytek.php";
  
include 'vyhledavani.php';
echo '<a class="odkaz" href="http://testing/">←Zpět na úvodní stránku</a>'
  ?> 
   

  </body>
</html>
