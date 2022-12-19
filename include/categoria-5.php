<div class="all-slides-area"> 
<div class="slider">  
<?php $my_query = new WP_Query('category_name=destaques&posts_per_page=-1'); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

<div class="all-content">
     
<div class="box home">
      <a href="<?php the_permalink(); ?>" class="imgbox-home"> 
           <?php the_post_thumbnail( 'banner-home' ); ?> 
           </a>
                  <div class="mais-infos-box-home">
                        <a href="<?php the_permalink(); ?>"> <i class="fa-solid fa-circle-play"></i>  </a>
                        <p><?php the_field('duracao_do_filme'); ?> </p>
                        <p class="genero-e-ano"><?php the_field(' generos_e_ano'); ?>  </p>        
                  </div>
             
          </div>  
      </div>
 




<?php endwhile; ?> 
</div></div>