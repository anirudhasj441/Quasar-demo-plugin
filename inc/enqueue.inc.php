<?php

function enqueue_func(){
    wp_enqueue_style( 'quasar_style', 'https://cdn.jsdelivr.net/npm/quasar@2.0.0/dist/quasar.prod.css' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons|Material+Icons+Outlined' );
    wp_enqueue_style('animate_style', 'https://cdn.jsdelivr.net/npm/animate.css@^4.0.0/animate.min.css');

    wp_enqueue_script( 'plotly', 'https://cdn.plot.ly/plotly-2.1.0.min.js' );


    // wp_register_script( 'quasar',  'https://cdn.jsdelivr.net/npm/quasar@2.0.0/dist/quasar.umd.prod.js');
    // wp_register_script( 'vue', 'https://unpkg.com/vue@next');
    // wp_register_script( 'app-js', plugin_dir_url( __FILE__ ) . '../js/app.js', $in_footer=true);

    // wp_enqueue_script( 'quasar');
    // wp_enqueue_script('vue');
    // wp_enqueue_script( 'app-js' );
}

?>