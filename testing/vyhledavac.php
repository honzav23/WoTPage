<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

 <?php 
  
 include 'connect.php';
 if(isset($_POST["query"]))  
 {  
     
      $output = '';  
      $query = "SELECT * FROM tank WHERE Nazev LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul>';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output += '<a href="http://tanky/A20copy"><li class="link">'.$row['Nazev'].'</li></a>';  
           }  
      }  
     
      $output += '</ul>';  
      echo ($output);  
 }  
 ?> 
<script>
  $(".link").click(function() {
    var nazev = $(this).html();
    //document.write(nazev);
    $.ajax({
      type : "POST",
      url: "insert3.php", //
      dataType : "json", 
      data: {q:nazev, 
      },
      success: function() {alert("OK");}
      });
  });
</script> 