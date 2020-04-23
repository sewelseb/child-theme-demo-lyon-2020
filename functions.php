 <?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'twentyseventeen-style'; // This is 'twentyseventeen-style' for the Twenty seventeen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentyseventeen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
} 

// function recipe_titles($title, $id=null){
//     if(in_category('recupes', $id)) {
//         $title = $title;
//     }
//     return $title;
// }

// add_filter('the_title', 'recipe_titles', 10, 2);