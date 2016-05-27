<?php require_once 'inc/config.php' ?>

<div id="page">
    <?php require_once 'inc/values.php' ?>
    <?php if ( DEBUG == TRUE ) { require_once 'inc/debug.php'; } ?>
    <div class="container">
        <?php if ( is_user_logged_in() ) { ?>
        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
            <div id="rewards" class="table-responsive logged">
                <?php require_once 'inc/table.php' ?>
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
                <?php require_once 'inc/table.php' ?>
            </div>
        </form>
        <?php } ?>
    </div>
</div>