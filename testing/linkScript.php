<script>
  $(".link").click(function() {
    var nazev = $(this).html();
    err = 1;
      $.ajax({
        type : "POST",
        url: "insert3.php", 
        dataType : "jsonp", 
        data: {q: nazev,
        },
        success: function() {echo("OK");},
        cache: false,
      }); 
  });
</script>