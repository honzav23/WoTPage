
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title>  
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
         #vyhledat {
     border:1px solid #000000;
      font-size:16px;
     height:35px;
     padding-left:30px;
     outline:none;
     width:170px;
    
    z-index:2;
     
    
    border-radius:10px;
     position:absolute;
     top:220px;
     right:40px;
      }
      .fa-search {position:absolute;
     z-index:3;
     top:229px;
     right:190px;}
     
     
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
     top:220px;
     right:223px;}   
a {text-decoration:none;color:black}
           </style>  
      </head>  
      <body> 
      <div style="width:200px;margin-right:50px;margin-top:95px;">  
        

             <div class="vyhledavani">
<i class="fa fa-search"></i><input type="text" id="vyhledat" name="search" placeholder="Např. Panther" onkeyup="searching()"> 
      </div>
     
               
           </div>  
      </body>  
 </html>  
 