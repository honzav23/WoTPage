<?php

function getEquipment(...$icons) {
    echo '<div id="vypocty">';
    foreach ($icons as $icon) {
        if ($icon == "bratri") {
            echo '<div class="column">
            <input type="checkbox" id="Ikonabratri" onclick="calculate(nabijeni, Ikonanabijak, nabijak, zmena);calculate(zamerovani, Ikonazamerovak, zamerovak, zmena);calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena);calculate2(dohled, Ikonabino, bino, 0.25, zmena);calculateTotal4();" />
            <label for="Ikonabratri" class="nonBond"><img src="gallery/BIA.png"/></label>
            </div>';
        }
        if ($icon == "ventilace") {
            echo '<div class="column">
            <input type="checkbox" id="Ikonaventilace" onclick="calculate(nabijeni, Ikonanabijak, nabijak, zmena);calculate(zamerovani, Ikonazamerovak, zamerovak, zmena);calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena);calculate2(dohled, Ikonabino, bino, 0.25, zmena);calculateTotal4();changeFilter(IkonaventilaceBond, 0, Ikonaventilace)" />
            <label for="Ikonaventilace" class="nonBond"><img src="gallery/ventilace.png"/></label>
            </div>';
        }
        if ($icon == "bino") {
            echo '<div class="column">
            <input type="checkbox" id="Ikonabino" onclick="calculate2(dohled, Ikonabino, bino, 0.25, zmena)">
            <label for="Ikonabino" class="nonBond"><img src="gallery/bino.png"/></label>
            </div>';
        }
        if ($icon == "optika") {
            echo '
            <div class="column">
            <input type="checkbox" id="Ikonaoptika" onclick="calculate2(dohled, Ikonaoptika, binoOp, 0.1, zmena);changeFilter(IkonaoptikaBond, 1, Ikonaoptika)"/>
            <label for="Ikonaoptika" class="nonBond"><img src="gallery/optika.png"/></label>
            </div>';
        }
        if ($icon == "zamerovak") {
            echo '
            <div class="column">
            <input type="checkbox" id="Ikonazamerovak" onclick="calculate(zamerovani, Ikonazamerovak, zamerovak, zmena);changeFilter(IkonazamerovakBond, 2, Ikonazamerovak)" />
            <label for="Ikonazamerovak" class="nonBond"><img src="gallery/zamerovak.png"/></label>
            </div>';
        }
        if ($icon == "nabijak") {
            echo '
            <div class="column">
            <input type="checkbox" id="Ikonanabijak" onclick="calculate(nabijeni, Ikonanabijak, nabijak, zmena);changeFilter(IkonanabijakBond, 3, Ikonanabijak)" />
            <label for="Ikonanabijak" class="nonBond"><img src="gallery/nabijak.png"/></label>
            </div>';
        }
    }
    echo '</div>';
}
?>