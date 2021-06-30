<?php
echo '
<form action="" id="vypocty" onsubmit="return false;">
<div>
    
        
        <p>
       <input type="checkbox" id="Ikonabratri" name="includecandles"  style="display:none" onclick="calculateTotal();calculateTotal1();calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena);calculate2(dohled, Ikonabino, bino, 0.25, zmena);calculateTotal4();prehozeni(nabijak , nabijeni );prehozeni(zamerovak , zamerovani);prehozeni(binoOp , dohled );prehozeni(bino , dohled );prehozeni(Presnost, presnost);prehozeni(nabijak2, nabijeni2);prehozeni(nabijak3, nabijeni3);prehozeni(nabijak4, nabijeni4)" />
       <label for="Ikonabratri"><img src="gallery/BIA.png"/></label>
       </p>
       
       <p>
        <input type="checkbox" id="Ikonaventilace" name="includeinscription" style="display:none" onclick="calculateTotal();calculateTotal1();calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena);calculate2(dohled, Ikonabino, bino, 0.25, zmena);calculateTotal4();prehozeni(nabijak , nabijeni );prehozeni(zamerovak , zamerovani );prehozeni(binoOp , dohled );prehozeni( bino ,  dohled );prehozeni( Presnost ,  presnost )" />
        <label for="Ikonaventilace"><img src="gallery/ventilace.png"/></label>
        </p>
        
        
        <p>
         <input type="checkbox" id="Ikonabino" name="includeinscription" style="display:none" onclick="calculate2(dohled, Ikonabino, bino, 0.25, zmena);prehozeni(bino, dohled)">
         <label for="Ikonabino"><img src="gallery/bino.png"/></label>
        </p>
       <p>
        <input type="checkbox" id="Ikonaoptika" name="optika" style="display:none" onclick="calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena);prehozeni(binoOp, dohled)"/>
        <label for="Ikonaoptika" ><img src="gallery/optika.png"/></label>
        </p>
       
        <p>
        <input type="checkbox" id="Ikonazamerovak" name="includeinscription" style="display:none" onclick="calculateTotal1();prehozeni(zamerovak, zamerovani )" />
        <label for="Ikonazamerovak" ><img src="gallery/zamerovak.png"/></label>
        </p>
        
        <p>
        <input type="checkbox" id="Ikonanabijak" name="BIA" style="display:none" onclick="calculateTotal();prehozeni(nabijak, nabijeni);" />
        <label for="Ikonanabijak"><img src="gallery/nabijak.png"/></label>
        </p>                                          
        
        </div>
        </form> '
?>