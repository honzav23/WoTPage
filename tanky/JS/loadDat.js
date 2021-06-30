$(document).ready(function() {
        $("#dela").change(function(){
         var delo = document.getElementById("dela").value;
         if (delo == "delo2") {
            $.ajax({
                type : "POST",
                url: "insert2.php", //
                dataType : "json", 
               data: {cc : hodnota, cd : hodnota3,
                
                },
           success: function() {location.reload()}
              });
         }
         else {$.ajax({
                type : "POST",
                url: "insert2.php", //
                dataType : "json", 
               data: {cc : hodnota2, cd : hodnota4,
              
               },
          success: function() {location.reload()}
              });}
        });
    });
    
