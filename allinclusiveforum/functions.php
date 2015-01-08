<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Register Menu
register_nav_menus( array(
    'primary' => __( 'Основное меню', 'allinclusive' ),
    'secondary' => __( 'Дополнительное меню', 'allinclusive' ),
) );




?>