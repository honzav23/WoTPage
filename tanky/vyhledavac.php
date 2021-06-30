<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

 <?php 
  
 include 'D:\wamp64\www\testing\connect.php';
 if(isset($_POST["query"]))  
 {  
     
      $output = '';  
      $query = "SELECT * FROM tank WHERE Nazev LIKE '%".$_POST['query']."%' AND Prubojnost1 != 10000 LIMIT 15";  
      echo $query;
      $result = mysqli_query($connect, $query);  
      $output = '<ul>';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                if ($row['MeziNabijeni'] > 0 && $row['Nabijeni2'] != 0) {
                    $output .= '<a href="http://tanky/Progettocopy"><li class="link">'.$row['Nazev'].'</li></a>';
                }
                else {
                    $output .= '<a href="http://tanky/A20copy"><li class="link">'.$row['Nazev'].'</li></a>';
                }
           }  
      }  
    $output .= '</ul>';  
      echo ($output);  
 }  
 ?> 
 <script>
    function updateTable() {
        var nazev = $(this).html();
        $.ajax({
            type : "POST",
            url : "insert3.php",
            dataType : "json",
            data : {q:nazev},
            success: function() {alert("OK");}
        });
    }
  $(".link").click(updateTable);
</script>  