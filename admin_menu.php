<?php

function register_settings(){
    register_setting( 'settings-group', 'first-option' );
}



add_action( 'admin_init', 'register_settings' );



function menu_callback(){
    ?>

     <form action="options.php" method="post">
        <?php 
            
            settings_fields( 'settings-group' );

        ?>
        <input type="checkbox" id="only-admin" name="first-option" value="yes" <?php checked( get_option( 'first-option', 'yes' ),'yes' ) ?>>
        <label for="only-admin"> Email for only admin </label>
        <?php submit_button('Submit' ) ?>
     </form>

    <?php
}


function menu() {
    add_menu_page( 
        'Otto International', 
        'Otto International', 
        'administrator', 
        'otto-international', 
        'menu_callback');
}

add_action( 'admin_menu','menu' );
