<?php
/////////////////////////////////////////////////////////////////////////////
//
// Valeurs des stickers et mise à jour
//
/////////////////////////////////////////////////////////////////////////////

    if(isset($_POST['update'])) {
                
        $data = array(
            '1' => array(
                '1' => $_POST['value11'],
                '2' => $_POST['value12'],
                '3' => $_POST['value13'],
                '4' => $_POST['value14'],
                '5' => $_POST['value15'],
                '6' => $_POST['value16'],
                '7' => $_POST['value17'],
            ),
             '2' => array(
                '1' => $_POST['value21'],
                '2' => $_POST['value22'],
                '3' => $_POST['value23'],
                '4' => $_POST['value24'],
                '5' => $_POST['value25'],
                '6' => $_POST['value26'],
                '7' => $_POST['value27'],
            ),
            '3' => array(
                '1' => $_POST['value31'],
                '2' => $_POST['value32'],
                '3' => $_POST['value33'],
                '4' => $_POST['value34'],
                '5' => $_POST['value35'],
                '6' => $_POST['value36'],
                '7' => $_POST['value37'],
            ),
            '4' => array(
                '1' => $_POST['value41'],
                '2' => $_POST['value42'],
                '3' => $_POST['value43'],
                '4' => $_POST['value44'],
                '5' => $_POST['value45'],
                '6' => $_POST['value46'],
                '7' => $_POST['value47'],
            ),
            '5' => array(
                '1' => $_POST['value51'],
                '2' => $_POST['value52'],
                '3' => $_POST['value53'],
                '4' => $_POST['value54'],
                '5' => $_POST['value55'],
                '6' => $_POST['value56'],
                '7' => $_POST['value57'],
            ),
            '6' => array(
                '1' => $_POST['value61'],
                '2' => $_POST['value62'],
                '3' => $_POST['value63'],
                '4' => $_POST['value64'],
                '5' => $_POST['value65'],
                '6' => $_POST['value66'],
                '7' => $_POST['value67'],
            ),
            '7' => array(
                '1' => $_POST['value71'],
                '2' => $_POST['value72'],
                '3' => $_POST['value73'],
                '4' => $_POST['value74'],
                '5' => $_POST['value75'],
                '6' => $_POST['value76'],
                '7' => $_POST['value77'],
            ),
        );
        
        $data = serialize($data);
        $ret = update_user_option( get_current_user_id(), 'startup_stickers_values', $data);
        ?>
            
        <div id="messages" class="alert alert-success" role="alert">
            <div class="container">    
                <div class="row">
                    <div class="col-xs-12">Tableau mis &agrave; jour</div>
                </div>
            </div>    
        </div>
    <?php }

/////////////////////////////////////////////////////////////////////////////
//
// Ordre des stickers et reset data values
//
/////////////////////////////////////////////////////////////////////////////
    if(isset($_POST['reset']) && !isset($_POST['update']) ) {
        
        $data1 = range(1,7); shuffle($data1); array_unshift($data1,""); unset($data1[0]); //On commence le array à 1 au lieu de 0
        $data2 = range(1,7); shuffle($data2); array_unshift($data2,""); unset($data2[0]);
        $data3 = range(1,7); shuffle($data3); array_unshift($data3,""); unset($data3[0]);
        $data4 = range(1,7); shuffle($data4); array_unshift($data4,""); unset($data4[0]);
        $data5 = range(1,7); shuffle($data5); array_unshift($data5,""); unset($data5[0]);
        $data6 = range(1,7); shuffle($data6); array_unshift($data6,""); unset($data6[0]);
        $data7 = range(1,7); shuffle($data7); array_unshift($data7,""); unset($data7[0]);
        
        $data = array(
            '1' =>  $data1,
            '2' =>  $data2,
            '3' =>  $data3,
            '4' =>  $data4,
            '5' =>  $data5,
            '6' =>  $data6,
            '7' =>  $data7,
        );

        
        $data = serialize($data);
        $ret1 = update_user_option( get_current_user_id(), 'startup_stickers_order', $data);
        $ret2 = update_user_option( get_current_user_id(), 'startup_stickers_values', '');
        ?>
            
        <div id="messages" class="alert alert-success" role="alert">
            <div class="container">    
                <div class="row">
                    <div class="col-xs-12">Tableau mis &agrave; z&eacute;ro</div>
                </div>
            </div>    
        </div>

    <?php }
    

/////////////////////////////////////////////////////////////////////////////
//
// Récupérer les valeurs dans les flatfiles
//
/////////////////////////////////////////////////////////////////////////////



    $values = unserialize(get_user_option( 'startup_stickers_values', $user ));
    $order =  unserialize(get_user_option( 'startup_stickers_order', $user ));