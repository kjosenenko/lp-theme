<?php

//add dynamic navigation
function pompeii_setup() {
    register_nav_menus(
        array(
            "primary" => __("Primary Menu", "pompeii" )
        )
    );
}

add_action("after_setup_theme", "pompeii_setup" );

?>