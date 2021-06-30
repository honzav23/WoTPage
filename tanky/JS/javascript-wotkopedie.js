function prehozeni(ukaz, schovej) {
    var id1 = "#" + ukaz;
    var id2= "#" + schovej;
   // $(id1).show();
   // $(id2).hide();
}
var levelPosadky = 100;
window.Ikonanabijak;
window.Ikonaventilace;
window.Ikonabratri;
window.Ikonaoptika;
window.Ikonabino;
window.Ikonazamerovak;
window.nabijak;
window.nabijeni;
window.zamerovani;
window.zamerovak;
window.dohled;
window.binoOp;
window.bino;
window.presnost;
window.Presnost;
window.IkonanabijakBond;
window.IkonazamerovakBond;
window.IkonaventilaceBond;
window.IkonaoptikaBond;

function changeFilter(bondId, bondElementToShow, originalIcon) {
    $(bondId).removeAttr("disabled");
    $(".bond img").eq(bondElementToShow).css({WebkitFilter: "blur(2px)"});
    $(".bond img").eq(bondElementToShow).click(function(){
        if (!$(bondId).prop("checked")) {
            $(this).css({WebkitFilter: "blur(0px)"});
        }
        else {
            $(this).css({WebkitFilter: "blur(2px)"});
        }
    });
    if (!originalIcon.checked) {
        $(".bond img").eq(bondElementToShow).css({WebkitFilter: "blur(2px) grayscale(1)"});
        $(bondId).prop("checked", false);
    }
}

function getIfs(Ikona, Ikonaventilace, Ikonabratri) {
    var bondId = "#" + Ikona.id + "Bond";
    var bondElementToShow = $(bondId).parent().index();
    // Only icon
    if (Ikona.checked && !Ikonaventilace.checked && !Ikonabratri.checked) {
      //  changeFilter(bondId, bondElementToShow);
        return 1;
    }
    
    // Only ventilation or only BIA
    else if ((Ikonaventilace.checked && !Ikona.checked && !Ikonabratri.checked) || (!Ikonaventilace.checked && !Ikona.checked && Ikonabratri.checked)) {
        return 2;
    }
     // Ventilation and BIA
     else if (!Ikona.checked && Ikonaventilace.checked && Ikonabratri.checked) {
        return 3;
    }

    // Icon and only ventilation or only BIA
    else if (Ikona.checked && ((Ikonaventilace.checked && !Ikonabratri.checked) || (!Ikonaventilace.checked && Ikonabratri.checked))) {
        return 4;
    }
   
    // Everything
    else if (Ikona.checked && Ikonaventilace.checked && Ikonabratri.checked) {
        return 5;
    }
    // Nothing
    else {
        $(".bond img").eq(bondElementToShow).css({WebkitFilter: "blur(2px) grayscale(1)"});
        $(bondId).prop("checked", false);
        $(".bond img").eq(0).css({WebkitFilter: "blur(2px) grayscale(1)"});
        $(IkonaventilaceBond).prop("checked", false);
        return 0;
    }
}
function calculate(zdroj, Ikona, vystup, zmena) {
    zmena(vystup, Ikona);
    var zaklad = zdroj.innerHTML;
    var koeficient = 1;
    var vysledek;
    var getIf = getIfs(Ikona, Ikonaventilace, Ikonabratri);
    if (getIf == 1){
        koeficient = 0.1;
        if (IkonanabijakBond.checked || IkonazamerovakBond.checked) {
            koeficient = 0.135;
        }
        vysledek = (zaklad - (zaklad * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(2);
    }
    else if (getIf == 2) {
        levelPosadky = 105.3;
        if (IkonaventilaceBond.checked) {
            levelPosadky = 108.6;
        }
        vysledek = ((zaklad * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(2);
    }
    else if (getIf == 3) {
        levelPosadky = 110.6;
        if (IkonaventilaceBond.checked) {
            levelPosadky = 113.6;
        }
        vysledek = ((zaklad * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(2);
    } 
    else if (getIf == 4) {
        koeficient = 0.1;
        if (IkonanabijakBond.checked || IkonazamerovakBond.checked) {
            koeficient = 0.135;
        }
        levelPosadky = 105.3;
        if (IkonaventilaceBond.checked) {
            levelPosadky = 108.3;
        }
        var mezi = zaklad - (zaklad * 0.875) / (0.00375 * 100 + 0.5) * koeficient;
        vysledek = ((mezi * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); 
    }
    else if (getIf == 5) {
        levelPosadky = 110.6;
        koeficient = 0.1;
        if (IkonanabijakBond.checked || IkonazamerovakBond.checked) {
            koeficient = 0.135;
        }
        if (IkonaventilaceBond.checked) {
            levelPosadky = 113.6;
        }
        var mezi = zaklad - (zaklad * 0.875) / (0.00375 * 100 + 0.5) * koeficient;
        vysledek = ((mezi * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); }
    else if (getIf == 0) {
        vysledek = zaklad;
    }
vystup.innerHTML = vysledek;
}
function calculate2(zdroj, Ikona, vystup, ucinek, zmena) {
    zmena(vystup, Ikona);
    var zaklad = zdroj.innerHTML;
    zaklad = parseFloat(zaklad);
    var koeficient = 1;
    var vysledek;
    var getIf = getIfs(Ikona, Ikonaventilace, Ikonabratri);
    if (getIf == 1){
        koeficient = ucinek;
        if (IkonaoptikaBond.checked) {
            koeficient = 0.135;
        }
        vysledek = (zaklad + (zaklad / 0.875) * (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(0);
        }
    else if (getIf == 2) {
        levelPosadky = 105.3;
        if (IkonaventilaceBond.checked) {
            levelPosadky = 108.3;
        }
        vysledek = ((zaklad / 0.875) * (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(0);
        }
    else if (getIf == 3) {
        levelPosadky = 110.6;
        if (IkonaventilaceBond.checked) {
            levelPosadky = 113.6;
        }
        vysledek = ((zaklad / 0.875) * (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(0);
    }
    else if (getIf == 4) {
        levelPosadky = 105.3;
        koeficient = ucinek;
        if (IkonaoptikaBond.checked) {
            koeficient = 0.135;
        }
        if (IkonaventilaceBond.checked) {
            levelPosadky = 108.3;
        }
        var mezi = zaklad + (zaklad / 0.875) * (0.00375 * 100 + 0.5) * koeficient;
        vysledek = ((mezi / 0.875) * (0.00375 * levelPosadky + 0.5)).toFixed(0); 
    }
         
    else if (getIf == 5) {
        levelPosadky = 110.6;
        koeficient = ucinek;
        if (IkonaoptikaBond.checked) {
            koeficient = 0.135;
        }
        if (IkonaventilaceBond.checked) {
            levelPosadky = 113.6;
        }
        var mezi = zaklad + (zaklad / 0.875) * (0.00375 * 100 + 0.5) * koeficient;
        vysledek = ((mezi / 0.875) * (0.00375 * levelPosadky + 0.5)).toFixed(0); }
    else  {
        vysledek = zaklad;
    }
        vystup.innerHTML = vysledek;
 }

function calculateTotal4() {
    zmenaPresnosti();
    prevod = parseFloat(presnost.innerHTML);
    var vysledek;
    if (Ikonaventilace.checked == true && Ikonabratri.checked == true) {
        levelPosadky = 110.6;
        if (IkonaventilaceBond.checked) {
            levelPosadky = 113.6;
        }
        vysledek = ((prevod * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
    }
    else if ((Ikonaventilace.checked == false && Ikonabratri.checked == true) || (Ikonaventilace.checked == true && Ikonabratri.checked == false)) {
        levelPosadky = 105.3;
        if (IkonaventilaceBond.checked) {
            levelPosadky = 108.3;
        }
        vysledek = ((prevod * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
    }
    else  {
        vysledek = prevod;
    }  
    Presnost.innerHTML = vysledek;   
}

function zmena(argument, doplnek) {
    if ((Ikonaventilace.checked == true) || (Ikonabratri.checked == true) || (doplnek.checked == true)) {
        argument.style.backgroundColor = '#3eb943';
    }
    else {
        argument.style.backgroundColor = 'inherit';
    }
}

function zmenaPresnosti() {
    if ((Ikonaventilace.checked == true) || (Ikonabratri.checked == true) ) {
        Presnost.style.backgroundColor = '#3eb943';
    }
    else {
        Presnost.style.backgroundColor = 'inherit';
    }
 }
 
 
 

 
 
   

    

    
    
    
    



     


      
 
   

   
