<?php
    echo '<div id="vypocty2">';
        
      echo '<div class="column2" id="last">
            <input type="checkbox" id="IkonaventilaceBond" disabled="disabled" onclick="calculate(nabijeni, Ikonanabijak, nabijak, zmena);calculate(zamerovani, Ikonazamerovak, zamerovak, zmena);calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena);calculate2(dohled, Ikonabino, bino, 0.25, zmena);calculateTotal4()" />
            <label for="IkonaventilaceBond" class="bond" title="Lepší ventilace"><img src="gallery/improvedEquipment.png"/></label>
            </div>
            
            <div class="column2">
            <input type="checkbox" id="IkonaoptikaBond" disabled="disabled" onclick="calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena)"/>
            <label for="IkonaoptikaBond" class="bond" title="Lepší optika"><img src="gallery/improvedEquipment.png"/></label>
            </div>
        
      
            <div class="column2">
            <input type="checkbox" id="IkonazamerovakBond" disabled="disabled" onclick="calculate(zamerovani, Ikonazamerovak, zamerovak, zmena)" />
            <label for="IkonazamerovakBond" class="bond" title="Lepší zaměřovák"><img src="gallery/improvedEquipment.png"/></label>
            </div>
        
            <div class="column2">
            <input type="checkbox" id="IkonanabijakBond" disabled="disabled" onclick="calculate(nabijeni, Ikonanabijak, nabijak, zmena)" />
            <label for="IkonanabijakBond" class="bond" title="Lepší nabiják"><img src="gallery/improvedEquipment.png"/></label>
            </div>';
    echo '</div>';