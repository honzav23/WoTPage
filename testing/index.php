<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <title>Wotkopedie</title>
    
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styly-index.css"/>
 
    <?php
    header('Access-Control-Allow-Origin: null');
include 'connect.php';
?>
  </head>
 
  
 
  <body>
  <h1>WOTKOPEDIE</h1>    
 
  <div class="narody">
     <input class="filtr narod" type="checkbox" id="nemecko" value="nemecko">
    <label for="nemecko"><img src="images/nemecko.png"></label>                                  
    
    <input class="filtr narod" type="checkbox" id="sssr" value="sssr">
    <label for="sssr"><img src="images/rusko.png"></label>
    
    <input class="filtr narod" type="checkbox" id="usa" value="usa">
    <label for="usa"><img src="images/usa.png"></label>
    
    <input class="filtr narod" type="checkbox" id="francie" value="francie">
    <label for="francie"><img src="images/francie.png"></label>                                  
    
    <input class="filtr narod" type="checkbox" id="britanie" value="britanie">
    <label for="britanie"><img src="images/vb.png"></label>
    
    <input class="filtr narod" type="checkbox" id="cina" value="cina">
    <label for="cina"><img src="images/cina.png"></label>
    
    <input class="filtr narod" type="checkbox" id="japonsko" value="japonsko">
    <label for="japonsko"><img src="images/japonsko.png"></label>                                  
    
    <input class="filtr narod" type="checkbox" id="cesko" value="cesko">
    <label for="cesko"><img src="images/cz.png"></label>
    
    <input class="filtr narod" type="checkbox" id="svedsko" value="svedsko">
    <label for="svedsko"><img src="images/svedsko.png"></label>
    
    <input class="filtr narod" type="checkbox" id="polsko" value="polsko">
    <label for="polsko"><img src="images/polsko.png"></label>                                  
    
    <input class="filtr narod" type="checkbox" id="italie" value="italie">
    <label for="italie"><img src="images/italie.png"></label>

   
     </div>
        <div class="form-group tiery">
    <input type="checkbox" class="filtr tier" id="jedna" value="I">     
    <label for="jedna"><p>I</p></label> 
    
    <input type="checkbox" class="filtr tier" id="dva" value="II">
    <label for="dva"><p>II</p></label> 
    
    <input type="checkbox" class="filtr tier" id="tri" value="III">
    <label for="tri"><p>III</p></label> 
    
     <input type="checkbox" class="filtr tier" id="ctyri" value="IV">                           
    <label for="ctyri"><p>IV</p></label> 
    
    <input type="checkbox" class="filtr tier" id="pet" value="V">
    <label for="pet"><p>V</p></label>
    
    <input type="checkbox" class="filtr tier" id="sest" value="VI" >
    <label for="sest"><p>VI</p></label>
    
    <input type="checkbox" class="filtr tier" id="sedm" value="VII">
    <label for="sedm"><p>VII</p></label>
    
    <input type="checkbox" class="filtr tier" id="osm" value="VIII">
    <label for="osm"><p>VIII</p></label>
    
    <input type="checkbox" class="filtr tier" id="devet" value="IX">
    <label for="devet"><p>IX</p></label> 
    
    <input type="checkbox" class="filtr tier" id="deset" value="X">
    <label for="deset"><p>X</p></label>
    
    <input type="checkbox" class="filtr premko" id="prem" value="premko">
    <label for="prem"><p id="premium">Premko</p></label>
   </div>

   
   
   <?php
include 'vyhledavani2.php';
   ?>
 <div id="vsechnyt">
   <div class="container">
<div class="row d-flex justify-content-center">
       <div class="col-xs-6 kontejner">      
    <div class="lehke">
    </div>
</div>
    <div class="col-xs-6 kontejner">   
    <div class="stredni"></div>
</div>
     <div class="col-xs-6 kontejner">    
    <div class="tezke"></div>
    </div>

<div class="col-xs-6 kontejner">    
    <div class="tdcka"></div>
    </div>
<div class="col-xs-6 kontejner">    
    <div class="artyny"></div>
    </div>
</div>
</div>
  
    <script>
$(document).ready(function(){
    filter_data('fetch_data_tank', 'fetch_data_tank.php','.lehke', 'lehke', 'Lehké tanky');
    filter_data('fetch_data_tank', 'fetch_data_tank.php','.stredni', 'stredni', 'Střední tanky');
    filter_data('fetch_data_tank', 'fetch_data_tank.php', '.tezke', 'tezke', 'Těžké tanky');
    filter_data('fetch_data_tank', 'fetch_data_tank.php', '.tdcka', 'stihace', 'Stíhače tanků');
    filter_data('fetch_data_tank', 'fetch_data_tank.php', '.artyny', 'artyny', 'Dělostřelectvo');
    function filter_data(stranka, php, trida, kategorie, nadpis) {
        var action = stranka;
        var narod = get_filter('narod');
        var tier = get_filter('tier');
        var premko = get_filter('premko');
        $.ajax({
            url:php,
            method:"POST",
            data:{action:action, narod:narod, tier:tier, premko:premko, kategorie:kategorie, nadpis:nadpis, trida:trida},
            success:function(data){
              $(trida).html(data);   
            }
        });
    }

    function get_filter(class_name) {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.filtr').click(function(){
        filter_data('fetch_data_tank', 'fetch_data_tank.php','.lehke', 'lehke', 'Lehké tanky');
        filter_data('fetch_data_tank', 'fetch_data_tank.php','.stredni', 'stredni', 'Střední tanky');
        filter_data('fetch_data_tank', 'fetch_data_tank.php', '.tezke', 'tezke', 'Těžké tanky');
        filter_data('fetch_data_tank', 'fetch_data_tank.php', '.tdcka', 'stihace', 'Stíhače tanků');
        filter_data('fetch_data_tank', 'fetch_data_tank.php', '.artyny', 'artyny', 'Dělostřelectvo');
    });

    

});
function menu() {
   $(".narody").toggle();
   $(".tiery").toggle();
   $(".lupa").toggle();
   $("#vyhledat").toggle();   
}
function searching() {
    var input, filter, div, td, a, i;
    input = document.getElementById("vyhledat");
    filter = input.value.toUpperCase();
    div = document.getElementById("vsechnyt");
    td = div.getElementsByTagName("td");
    for (i = 0; i < td.length; i++) {
        a = td[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().search(filter) > -1) {
            td[i].style.display = "";
        } else {
            td[i].style.display = "none";
        }
    }
}
  
</script>
  </body>
</html>