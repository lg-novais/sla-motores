<?php 
    function registrar_areas_menu() {
        register_nav_menus(array(
            'menu-principal' => __('menu-principal', 'seu-tema'),
            // Adicione mais áreas de menu conforme necessário
        ));
    }
    add_action('after_setup_theme', 'registrar_areas_menu');

?>
