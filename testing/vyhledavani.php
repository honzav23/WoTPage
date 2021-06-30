
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title>  
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
         #vyhledat {
     border:1px solid #000000;
      font-size:16px;
     padding:9px;
     outline:none;
     width:170px;
    border-left-style:none;
    z-index:2;
     
    
     border-top-right-radius:10px;
     border-bottom-right-radius:10px;
     position:fixed;
     top:250px;
     right:40px;
      }
      ul {list-style:none;z-index:2;margin-top:-595px;right:40px;position:absolute;
         
background-color: #fff;
padding: 0.1rem 0;
width: 204px;
border: 1px solid #666;
border-radius: 0.25rem;
z-index: 1;}
li:hover {background-color:#C9C9C9}
      li {padding:10px;z-index:1;}
     
      .lupa {background-image:url(images/rsz_search.png);
      background-repeat:no-repeat;
      background-position:left center;
      background-size:20px 20px;
      background-color:white;
      border:1px solid #000000;
      z-index:3;
     height:37px;
    width:21px;
     border-right-style:none;
     border-top-left-radius:10px;
     border-bottom-left-radius:10px;
     position:fixed;
     top:250px;
     right:223px;}   
a {text-decoration:none;color:black}
           </style>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:200px;margin-right:50px;margin-top:16px;">  
           <div class="lupa"></div><input type="text" name="country" id="vyhledat" placeholder="Např. Panther" />  
                <div id="tankList"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#vyhledat').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"vyhledavac.php",  
                     method:"POST",
                     
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#tankList').fadeIn(1);  
                          $('#tankList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#vyhledat').val($(this).text());  
           $('#tankList').fadeOut(1);  
      });  
 }); 
 window.onclick = function() {$('#tankList').fadeOut(1);} 
 </script>  