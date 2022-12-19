<?php 
 
 // Aqui estão as categorias que aparecerão no site. ALTERE DE ACORDO COM A ORDEM QUE APARECEM!
 $categoria1 = "Destaques";
 $categoria2 = "Destaques";
 $categoria3 = "Destaques";
 $categoria4 = "Destaques";
 $categoria5 = "Destaques";



 function new_menu() {
  register_nav_menu('m-menu',__( 'Topo Menu' ));
}
add_action( 'init', 'new_menu' );


function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}



function category_in_post_class($classes) {
  global $post;
  foreach((get_the_category($post->ID)) as $category) $classes [] = 'cat-' . $category->cat_ID;
  return $classes;
}
add_filter('post_class', 'category_in_post_class');



function wordpress_pagination() {
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }



 function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
    add_image_size('banner-home', 400, 300, true);
}

add_action('after_setup_theme','add_suport_theme');



 
function wp_responsivo_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
   
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );

 

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name'              => 'Categorias',
        'id'                => 'categorias',
        'description'       => 'Não adicionar muitas para que não polua ou desconfigure',
        'before_widget'     => '<div class="txt">',
        'after_widget'      => '</div> ',
     ));
}			if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_634b218d0e740',
    'title' => 'Informações',
    'fields' => array(
      array(
        'key' => 'field_634b219c48ecc',
        'label' => 'Duração do filme/Serie',
        'name' => 'duracao_do_filme',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Exemplo: 1h 55m | Se for série adicione: 2 temporadas',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_634b234539235448ed1',
        'label' => 'Generos',
        'name' => 'generos',
        'type' => 'taxonomy',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'taxonomy' => 'category',
        'field_type' => 'checkbox',
        'add_term' => 1,
        'save_terms' => 1,
        'load_terms' => 0,
        'return_format' => 'label',
        'multiple' => 0,
        'allow_null' => 0,
      ),
      array(
        'key' => 'field_634b23e548ed2',
        'label' => 'Sinopse',
        'name' => 'sinopse',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => 'wpautop',
      ),
      array(
        'key' => 'field_634b23e66666548ed2',
        'label' => 'Resolucao',
        'name' => 'resolucao',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => 'wpautop',
      ),
      array(
        'key' => 'field_634b279ddfde9',
        'label' => 'tipo',
        'name' => 'tipo',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Ex: "Série" OU "Vídeo" OUU "Clipe"',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_634b53785dc8f',
        'label' => 'Imagem para o background da pagina do video',
        'name' => 'imagem_para_o_background_da_pagina_do_video',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'full',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => 'Preecha apenas se esse post for um filme',
    'show_in_rest' => 0,
  ));
  
  endif;		




  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_63a09410eac8a',
      'title' => 'Classificação',
      'fields' => array(
        array(
          'key' => 'field_63a0941d159dc',
          'label' => 'classificacao',
          'name' => 'Classificação',
          'type' => 'select',
          'instructions' => '',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'choices' => array(
            'Livre' => 'Livre',
            10 => '10',
            12 => '12',
            16 => '16',
            18 => '18',
          ),
          'default_value' => false,
          'allow_null' => 0,
          'multiple' => 0,
          'ui' => 0,
          'return_format' => 'value',
          'ajax' => 0,
          'placeholder' => '',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));
    
    endif;		
?>