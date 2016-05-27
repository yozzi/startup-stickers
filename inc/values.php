<?php
/////////////////////////////////////////////////////////////////////////////
//
// Valeurs des stickers et mise à jour
//
/////////////////////////////////////////////////////////////////////////////

    if(isset($_POST['update'])) {
        
        if(isset($_POST['row11'])) { $newrow11 = 1; } else { $newrow11 = 0; };
        if(isset($_POST['row12'])) { $newrow12 = 1; } else { $newrow12 = 0; };
        if(isset($_POST['row13'])) { $newrow13 = 1; } else { $newrow13 = 0; };
        if(isset($_POST['row14'])) { $newrow14 = 1; } else { $newrow14 = 0; };
        if(isset($_POST['row15'])) { $newrow15 = 1; } else { $newrow15 = 0; };
        if(isset($_POST['row16'])) { $newrow16 = 1; } else { $newrow16 = 0; };  
        if(isset($_POST['row17'])) { $newrow17 = 1; } else { $newrow17 = 0; };
        
        if(isset($_POST['row21'])) { $newrow21 = 1; } else { $newrow21 = 0; };
        if(isset($_POST['row22'])) { $newrow22 = 1; } else { $newrow22 = 0; };
        if(isset($_POST['row23'])) { $newrow23 = 1; } else { $newrow23 = 0; };
        if(isset($_POST['row24'])) { $newrow24 = 1; } else { $newrow24 = 0; };
        if(isset($_POST['row25'])) { $newrow25 = 1; } else { $newrow25 = 0; };
        if(isset($_POST['row26'])) { $newrow26 = 1; } else { $newrow26 = 0; };
        if(isset($_POST['row27'])) { $newrow27 = 1; } else { $newrow27 = 0; };
        
        if(isset($_POST['row31'])) { $newrow31 = 1; } else { $newrow31 = 0; };
        if(isset($_POST['row32'])) { $newrow32 = 1; } else { $newrow32 = 0; };
        if(isset($_POST['row33'])) { $newrow33 = 1; } else { $newrow33 = 0; };
        if(isset($_POST['row34'])) { $newrow34 = 1; } else { $newrow34 = 0; };
        if(isset($_POST['row35'])) { $newrow35 = 1; } else { $newrow35 = 0; };
        if(isset($_POST['row36'])) { $newrow36 = 1; } else { $newrow36 = 0; };
        if(isset($_POST['row37'])) { $newrow37 = 1; } else { $newrow37 = 0; };
        
        if(isset($_POST['row41'])) { $newrow41 = 1; } else { $newrow41 = 0; };
        if(isset($_POST['row42'])) { $newrow42 = 1; } else { $newrow42 = 0; };
        if(isset($_POST['row43'])) { $newrow43 = 1; } else { $newrow43 = 0; };
        if(isset($_POST['row44'])) { $newrow44 = 1; } else { $newrow44 = 0; };
        if(isset($_POST['row45'])) { $newrow45 = 1; } else { $newrow45 = 0; };
        if(isset($_POST['row46'])) { $newrow46 = 1; } else { $newrow46 = 0; };
        if(isset($_POST['row47'])) { $newrow47 = 1; } else { $newrow47 = 0; };
        
        if(isset($_POST['row51'])) { $newrow51 = 1; } else { $newrow51 = 0; };
        if(isset($_POST['row52'])) { $newrow52 = 1; } else { $newrow52 = 0; };
        if(isset($_POST['row53'])) { $newrow53 = 1; } else { $newrow53 = 0; };
        if(isset($_POST['row54'])) { $newrow54 = 1; } else { $newrow54 = 0; };
        if(isset($_POST['row55'])) { $newrow55 = 1; } else { $newrow55 = 0; };
        if(isset($_POST['row56'])) { $newrow56 = 1; } else { $newrow56 = 0; };
        if(isset($_POST['row57'])) { $newrow57 = 1; } else { $newrow57 = 0; };
        
        if(isset($_POST['row61'])) { $newrow61 = 1; } else { $newrow61 = 0; };
        if(isset($_POST['row62'])) { $newrow62 = 1; } else { $newrow62 = 0; };
        if(isset($_POST['row63'])) { $newrow63 = 1; } else { $newrow63 = 0; };
        if(isset($_POST['row64'])) { $newrow64 = 1; } else { $newrow64 = 0; };
        if(isset($_POST['row65'])) { $newrow65 = 1; } else { $newrow65 = 0; };
        if(isset($_POST['row66'])) { $newrow66 = 1; } else { $newrow66 = 0; };
        if(isset($_POST['row67'])) { $newrow67 = 1; } else { $newrow67 = 0; };
        
        if(isset($_POST['row71'])) { $newrow71 = 1; } else { $newrow71 = 0; };
        if(isset($_POST['row72'])) { $newrow72 = 1; } else { $newrow72 = 0; };
        if(isset($_POST['row73'])) { $newrow73 = 1; } else { $newrow73 = 0; };
        if(isset($_POST['row74'])) { $newrow74 = 1; } else { $newrow74 = 0; };
        if(isset($_POST['row75'])) { $newrow75 = 1; } else { $newrow75 = 0; };
        if(isset($_POST['row76'])) { $newrow76 = 1; } else { $newrow76 = 0; };
        if(isset($_POST['row77'])) { $newrow77 = 1; } else { $newrow77 = 0; };
        
        $data = array(
            '1' => array(
                '1' => $newrow11,
                '2' => $newrow12,
                '3' => $newrow13,
                '4' => $newrow14,
                '5' => $newrow15,
                '6' => $newrow16,
                '7' => $newrow17,
            ),
             '2' => array(
                '1' => $newrow21,
                '2' => $newrow22,
                '3' => $newrow23,
                '4' => $newrow24,
                '5' => $newrow25,
                '6' => $newrow26,
                '7' => $newrow27,
            ),
            '3' => array(
                '1' => $newrow31,
                '2' => $newrow32,
                '3' => $newrow33,
                '4' => $newrow34,
                '5' => $newrow35,
                '6' => $newrow36,
                '7' => $newrow37,
            ),
            '4' => array(
                '1' => $newrow41,
                '2' => $newrow42,
                '3' => $newrow43,
                '4' => $newrow44,
                '5' => $newrow45,
                '6' => $newrow46,
                '7' => $newrow47,
            ),
            '5' => array(
                '1' => $newrow51,
                '2' => $newrow52,
                '3' => $newrow53,
                '4' => $newrow54,
                '5' => $newrow55,
                '6' => $newrow56,
                '7' => $newrow57,
            ),
            '6' => array(
                '1' => $newrow61,
                '2' => $newrow62,
                '3' => $newrow63,
                '4' => $newrow64,
                '5' => $newrow65,
                '6' => $newrow66,
                '7' => $newrow67,
            ),
            '7' => array(
                '1' => $newrow71,
                '2' => $newrow72,
                '3' => $newrow73,
                '4' => $newrow74,
                '5' => $newrow75,
                '6' => $newrow76,
                '7' => $newrow77,
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
        
        $data1 = range(1,7); shuffle($data1);
        $data2 = range(1,7); shuffle($data2);
        $data3 = range(1,7); shuffle($data3);
        $data4 = range(1,7); shuffle($data4);
        $data5 = range(1,7); shuffle($data5);
        $data6 = range(1,7); shuffle($data6);
        $data7 = range(1,7); shuffle($data7);
        
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



    $values = unserialize(get_user_option( 'startup_stickers_values' ));
    $order =  unserialize(get_user_option( 'startup_stickers_order' ));