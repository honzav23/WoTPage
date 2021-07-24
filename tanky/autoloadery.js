
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
    
     function calculate(zdroj, ikona, vystup, zmena) {
    if ($('input[type="checkbox"]:checked').length > 3) {alert("Můžeš použít maximálně 3 doplňky najednou (jako ve hře)!");}
    else {
    zmena(vystup, ikona);
    var zaklad = zdroj.innerHTML;
    var koeficient = 1;
var vysledek;

if (ikona.checked == true && Ikonaventilace.checked == false && Ikonabratri.checked == false){
koeficient = 0.1;
vysledek = (zaklad - (zaklad * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(2);
}
else if ((Ikonaventilace.checked == true && ikona.checked == false && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && ikona.checked == false && Ikonabratri.checked == true)) {
levelPosadky = 105.3;
vysledek = ((zaklad * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(2);
 }
 
 else if (ikona.checked == true && ((Ikonaventilace.checked == true && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && Ikonabratri.checked == true))) {
  levelPosadky = 105.3;
  koeficient = 0.1;
  var mezi = zaklad - (zaklad * 0.875) / (0.00375 * 100 + 0.5) * koeficient;
  vysledek = ((mezi * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); }
 
  else if (ikona.checked == false && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
    levelPosadky = 110.6;
    vysledek = ((zaklad * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(2);
  } 
  else if (ikona.checked == true && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
     levelPosadky = 110.6;
     koeficient = 0.1;
     var mezi = zaklad - (zaklad * 0.875) / (0.00375 * 100 + 0.5) * koeficient;
  vysledek = ((mezi * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); }
  else  {
     vysledek = zaklad;
  }
  
vystup.innerHTML = vysledek;

 }
}
   function calculate2(zdroj, ikona, vystup, ucinek, zmena) {
   if ($('input[type="checkbox"]:checked').length > 3) {alert("Můžeš použít maximálně 3 doplňky najednou (jako ve hře)!");}
 else {
   zmena(vystup, ikona);
  
   var zaklad = zdroj.innerHTML;
   zaklad = parseFloat(zaklad);
   var koeficient = 1;
   var vysledek;
 if (ikona.checked == true && Ikonaventilace.checked == false && Ikonabratri.checked == false){
     koeficient = ucinek;
     vysledek = (zaklad + (zaklad / 0.875) * (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(0);
     }
     else if ((Ikonaventilace.checked == true && ikona.checked == false && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && ikona.checked == false && Ikonabratri.checked == true)) {
      levelPosadky = 105.3;
      vysledek = ((zaklad / 0.875) * (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(0);
       }
      
        else if (ikona.checked == true && ((Ikonaventilace.checked == true && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && Ikonabratri.checked == true))) {
        levelPosadky = 105.3;
        koeficient = ucinek;
        var mezi = zaklad + (zaklad / 0.875) * (0.00375 * 100 + 0.5) * koeficient;
        vysledek = ((mezi / 0.875) * (0.00375 * levelPosadky + 0.5)).toFixed(0); }
       
        else if (ikona.checked == false && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
          levelPosadky = 110.6;
          vysledek = ((zaklad / 0.875) * (0.00375 * levelPosadky + 0.5) * koeficient).toFixed(0);
        } 
        else if (ikona.checked == true && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
           levelPosadky = 110.6;
           koeficient = ucinek;
           var mezi = zaklad + (zaklad / 0.875) * (0.00375 * 100 + 0.5) * koeficient;
        vysledek = ((mezi / 0.875) * (0.00375 * levelPosadky + 0.5)).toFixed(0); }
        else  {
           vysledek = zaklad;
        }
        vystup.innerHTML = vysledek;
      }
 }

 function calculateTotal4() {
   zmenaPresnosti();
    prevod = parseFloat(presnost.innerHTML);
   var vysledek; 
 
     if (Ikonaventilace.checked == true && Ikonabratri.checked == true) {
        levelPosadky = 110.6;
        vysledek = ((prevod * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
     }
     else if ((Ikonaventilace.checked == false && Ikonabratri.checked == true) || (Ikonaventilace.checked == true && Ikonabratri.checked == false)) {
      levelPosadky = 105.3;
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
 else {argument.style.backgroundColor = 'inherit'};
 }
 function zmenaPresnosti() {
   
var presnostBarva = document.getElementById('Presnost');

if ((Ikonaventilace.checked == true) || (Ikonabratri.checked == true) ) {
   presnostBarva.style.backgroundColor = '#3eb943';
}
 else {presnostBarva.style.backgroundColor = 'inherit'};
 }
 
      
        

    // JavaScript Document
