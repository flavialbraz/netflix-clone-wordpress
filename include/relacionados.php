

 <?php
// Default arguments
$args = array(
	'posts_per_page' => 4,  
	'post__not_in'   => array( get_the_ID() ), 
	'no_found_rows'  => true,  
);

$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$cats_ids = array();  
foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id; 
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

 $wpex_query = new wp_query( $args );

foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
	
	<div class="relacionados-posts"> <div class="relacionados-foto"> 
		<?php the_post_thumbnail(); ?>
        <div class="todos-relacionado-tit"> 
	 
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
       
     </div></div>
</div>
<?php
// End loop
endforeach;

// Reset post data
wp_reset_postdata(); ?>