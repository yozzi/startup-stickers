
<?php require_once 'config.php' ?>




<?php //echo get_option( $option, $default ); ?> 
    

    <div id="page">
        <?php if ( isset( $_POST ) && DEBUG == TRUE ) { ?>
            <div id="debug" class="alert alert-info" role="alert">
                <div class="container">    
                    <div class="row">
                        <div class="col-xs-12">
                            POST : <?php if ( isset( $_POST ) ) {print_r($_POST); } ?>
                        </div>
                    </div>
                </div>    
            </div>
        <?php }  
            require_once 'values.php';
            require_once 'lib/Mobile_Detect.php';
            $detect = new Mobile_Detect;
        ?>
        <div class="container">
            <?php if ( is_user_logged_in() ) { ?>
            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                <div id="rewards" class="table-responsive logged">
                    <?php require_once 'table.php' ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div id="form-submition">
                            <button class="btn btn-default" type="submit" name="update">Mettre &agrave; jour</button>
                            <button class="btn btn-default" type="submit" name="reset" data-toggle="confirmation" data-placement="auto top">Mettre &agrave; z&eacute;ro</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="reset" />
            </form>
            <?php } else { ?>
            <form>
                <div id="rewards" class="table-responsive">
                    <?php require_once 'table.php' ?>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>