<?php
 $connect = mysqli_connect("localhost", "root", "d6bovemi", "tanky");  
 mysqli_query($connect, "SET character_set_client=utf8");
 mysqli_query($connect, "SET character_set_connection=utf8");
 mysqli_query($connect, "SET character_set_results=utf8");
?>