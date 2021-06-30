<!DOCTYPE html>  
 <html>  
<head>  
<title>Test filtrů</title>  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include 'connect.php';
?>
</head>

<body>
    <?php
        $query = "SELECT DISTINCT(narod) FROM tanky WHERE product_status = '1' ORDER BY narod DESC";
        $execution = mysqli_query($connect, $query);
        $total_row = mysqli_num_rows($execution);
        while ($row = mysqli_fetch_array($execution)) {
    ?>
        <label><input type="checkbox" class="filtr narod" value="<?php echo $row['narod']; ?>" > <?php echo $row['narod']; ?> </label>
    <?php    
        }
        $query = "SELECT DISTINCT(tier) FROM tanky WHERE product_status = '1' ORDER BY tier DESC";
        $execution = mysqli_query($connect, $query);
        $total_row = mysqli_num_rows($execution);
        while ($row = mysqli_fetch_array($execution)) {
    ?>
        <label><input type="checkbox" class="filtr tier" value="<?php echo $row['tier']; ?>"  > <?php echo $row['tier']; ?> </label>
    <?php
        }
    ?> 
        <br />
        <div class="stredni"></div>
        <div class="tezke"></div>
        <div class="stihac"></div>
<script>
   /* $(document).ready(function() {
        /*filter_data('fetch_data_stredni', 'fetch_data_stredni.php','.stredni');
        filter_data('fetch_data_tezke', 'fetch_data_tezke.php', '.tezke');
        filter_data('fetch_data_stihac', 'fetch_data_stihac.php', '.stihac');
        function filter_data(stranka, php, trida) {
            var action = stranka;
            var narod = get_filter('narod');
            var tier = get_filter('tier');
            $.ajax({
                url:php,
                method:"POST",
                data:{action:action, narod:narod, tier:tier},
                success:function(data){
                    $(trida).html(data);   
                }
            });
        }
        function get_filter(class_name) {
            var filter = [];
            $('.'+class_name+':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }
        $('.filtr').click(function(){
            filter_data('fetch_data_stredni', 'fetch_data_stredni.php', '.stredni');
            filter_data('fetch_data_tezke', 'fetch_data_tezke.php', '.tezke');
            filter_data('fetch_data_stihac', 'fetch_data_stihac.php', '.stihac');
        });
    });*/
</script>
</body>
</html>