<div id="debug" class="alert alert-info" role="alert">
    <div class="container">    
        <div class="row">
            <div class="col-xs-12">
                POST: <?php if ( isset( $_POST ) ) {print_r($_POST); } ?><br>
                VALUES: <?php print_r(unserialize(get_user_option('startup_stickers_values'))) ?><br>
                ORDER: <?php print_r(unserialize(get_user_option('startup_stickers_order'))) ?><br>
            </div>
        </div>
    </div>    
</div>