
 
      
     function prehozeni(ukaz, schovej) {
      $('#' + ukaz).show();
      $('#' + schovej).hide();}
      var levelPosadky = 100;
      window.Ikonanabijak;
    window.Ikonaventilace;
    window.Ikonabratri;
    window.Ikonaoptika;
    window.Ikonabino;
    window.Ikonazamerovak;
     window.nabijak;
     window.nabijak2;
     window.nabijak3;
     window.nabijak4;
     window.nabijeni;
     window.nabijeni2;
     window.nabijeni3;
     window.nabijeni4;
     window.zamerovani;
     window.zamerovak;
     window.dohled;
     window.binoOp;
     window.bino;
     window.presnost;
     window.Presnost;
    
    
      
      function calculateTotal() {
   zmenaNabijeni();
         var zakladniNabijeni = nabijeni.innerHTML;
         var zakladniNabijeni2 = nabijeni2.innerHTML;
         var zakladniNabijeni3 = nabijeni3.innerHTML;
         var zakladniNabijeni4 = nabijeni4.innerHTML;
        
    
    var koeficientNabijeni = 1;
    var vysledek;

    if (Ikonanabijak.checked == true && Ikonaventilace.checked == false && Ikonabratri.checked == false){
    koeficientNabijeni = 0.1;
    vysledek = (zakladniNabijeni - (zakladniNabijeni * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
    vysledek2 = (zakladniNabijeni2 - (zakladniNabijeni2 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
    vysledek3 = (zakladniNabijeni3 - (zakladniNabijeni3 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
    vysledek4 = (zakladniNabijeni4 - (zakladniNabijeni4 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
    }
    else if ((Ikonaventilace.checked == true && Ikonanabijak.checked == false && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && Ikonanabijak.checked == false && Ikonabratri.checked == true)) {
     levelPosadky = 105.3;
     vysledek = ((zakladniNabijeni * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
     vysledek2 = ((zakladniNabijeni2 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
     vysledek3 = ((zakladniNabijeni3 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
     vysledek4 = ((zakladniNabijeni4 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
      }
     
       
      else if (Ikonanabijak.checked == true && ((Ikonaventilace.checked == true && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && Ikonabratri.checked == true))) {
       levelPosadky = 105.3;
       koeficientNabijeni = 0.1;
       var meziNabijeni = zakladniNabijeni - (zakladniNabijeni * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
       var meziNabijeni2 = zakladniNabijeni2 - (zakladniNabijeni2 * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
       var meziNabijeni3 = zakladniNabijeni3 - (zakladniNabijeni3 * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
       var meziNabijeni4 = zakladniNabijeni4 - (zakladniNabijeni4 * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
       vysledek = ((meziNabijeni * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
       vysledek2 = ((meziNabijeni2 * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
       vysledek3 = ((meziNabijeni3 * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
       vysledek4 = ((meziNabijeni4 * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); }
      
       else if (Ikonanabijak.checked == false && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
         levelPosadky = 110.6;
         vysledek = ((zakladniNabijeni * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
         vysledek2 = ((zakladniNabijeni2 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
         vysledek3 = ((zakladniNabijeni3 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
         vysledek4 = ((zakladniNabijeni4 * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientNabijeni).toFixed(2);
       } 
       else if (Ikonanabijak.checked == true && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
          levelPosadky = 110.6;
          koeficientNabijeni = 0.1;
          var meziNabijeni = zakladniNabijeni - (zakladniNabijeni * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
          var meziNabijeni2 = zakladniNabijeni2 - (zakladniNabijeni2 * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
          var meziNabijeni3 = zakladniNabijeni3 - (zakladniNabijeni3 * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
          var meziNabijeni4 = zakladniNabijeni4 - (zakladniNabijeni4 * 0.875) / (0.00375 * 100 + 0.5) * koeficientNabijeni;
       vysledek = ((meziNabijeni * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); 
       vysledek2 = ((meziNabijeni2 * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
       vysledek3 = ((meziNabijeni3 * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
       vysledek4 = ((meziNabijeni4 * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);}
       else  {
          vysledek = zakladniNabijeni;
          vysledek2 = zakladniNabijeni2;
          vysledek3 = zakladniNabijeni3;
          vysledek4 = zakladniNabijeni4;
       }
       
      
     document.getElementById("nabijak").innerHTML = vysledek;
     document.getElementById("nabijak2").innerHTML = vysledek2;
     document.getElementById("nabijak3").innerHTML = vysledek3;
     document.getElementById("nabijak4").innerHTML = vysledek4;
    
    
}
 
 
 function calculateTotal1() {
    
   var zakladniZamereni = zamerovani.innerHTML;
     var koeficientZamereni = 1;
     var vysledek;
 zmena(zamerovak, Ikonazamerovak);
     if (Ikonazamerovak.checked == true && Ikonaventilace.checked == false && Ikonabratri.checked == false){
     koeficientZamereni = 0.1;
     vysledek = (zakladniZamereni - (zakladniZamereni * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientZamereni).toFixed(2);
     }
     else if ((Ikonaventilace.checked == true && Ikonazamerovak.checked == false && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && Ikonazamerovak.checked == false && Ikonabratri.checked == true)) {
      levelPosadky = 105.3;
      vysledek = ((zakladniZamereni * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientZamereni).toFixed(2);
       }
       
       else if (Ikonazamerovak.checked == true && ((Ikonaventilace.checked == true && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && Ikonabratri.checked == true))) {
        levelPosadky = 105.3;
        koeficientZamereni = 0.1;
        var meziZamereni = zakladniZamereni - (zakladniZamereni * 0.875) / (0.00375 * 100 + 0.5) * koeficientZamereni;
        vysledek = ((meziZamereni * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); }
       
        else if (Ikonazamerovak.checked == false && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
          levelPosadky = 110.6;
          vysledek = ((zakladniZamereni * 0.875) / (0.00375 * levelPosadky + 0.5) * koeficientZamereni).toFixed(2);
        } 
        else if (Ikonazamerovak.checked == true && Ikonaventilace.checked == true && Ikonabratri.checked == true) {
           levelPosadky = 110.6;
           koeficientZamereni = 0.1;
           var meziZamereni = zakladniZamereni - (zakladniZamereni * 0.875) / (0.00375 * 100 + 0.5) * koeficientZamereni;
        vysledek = ((meziZamereni * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2); }
        else  {
           vysledek = zakladniZamereni;
        }
        
       
      document.getElementById("zamerovak").innerHTML = vysledek;
      $("#palba tr:nth-child(6) td:nth-child(2)").toggleClass("green");
 }
 function calculate2(zdroj, ikona, vystup, ucinek) {
  if ($('input[type="checkbox"]:checked').length > 3) {alert("Můžeš použít maximálně 3 doplňky najednou (jako ve hře)!");}
else {
 zmena(vystup, ikona)
 
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
  
  
  var zakladniPresnost = presnost.innerHTML;
  zakladniPresnost = parseFloat(zakladniPresnost);
  
  
  var vysledek; 

    if ((Ikonaventilace.checked == true && Ikonabratri.checked == false) || (Ikonaventilace.checked == false && Ikonabratri.checked == true)) {
       levelPosadky = 105.3;
       vysledek = ((zakladniPresnost * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
    }
    
    else if (Ikonaventilace.checked == true && Ikonabratri.checked == true) {
     levelPosadky = 110.6;
     vysledek = ((zakladniPresnost * 0.875) / (0.00375 * levelPosadky + 0.5)).toFixed(2);
    }
       else  {
          vysledek = zakladniPresnost;
       }
       
      
     Presnost.innerHTML = vysledek;
    
}
 function zmenaNabijeni() {
  
if ((Ikonaventilace.checked == true) || (Ikonabratri.checked == true) || (Ikonanabijak.checked == true)) {
   nabijak.style.backgroundColor = '#3eb943';
   nabijak2.style.backgroundColor = '#3eb943';
   nabijak3.style.backgroundColor = '#3eb943';
   nabijak4.style.backgroundColor = '#3eb943';
}
 else {nabijak.style.backgroundColor = 'inherit';
 nabijak2.style.backgroundColor = 'inherit';
 nabijak3.style.backgroundColor = 'inherit';
 nabijak4.style.backgroundColor = 'inherit';}
 }
 function zmena(argument, doplnek) {
  if ((Ikonaventilace.checked == true) || (Ikonabratri.checked == true) || (doplnek.checked == true)) {
     argument.style.backgroundColor = '#3eb943';
  }
   else {argument.style.backgroundColor = 'inherit'};
   }

   function zmenaPresnosti() {
    
    if ((Ikonaventilace.checked == true) || (Ikonabratri.checked == true) ) {
       Presnost.style.backgroundColor = '#3eb943';
    }
     else {Presnost.style.backgroundColor = 'inherit'};
     }
 
 
 
 
 
 

 
 
   

    

    
    
    
    



     


      
 
   

   
