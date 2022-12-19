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
                        <p>
                        

                        <?php if( get_field('classificacao') == 'L' ): ?>
                                      <div class="classificacao livre"></div>	
                        <?php endif; ?>

                        <?php if( get_field('classificacao') == '10' ): ?>								
                              <div class="classificacao 10"></div>	
                              <?php endif; ?>				

                        <?php if( get_field('classificacao') == '12' ): ?>
                              <div class="classificacao 12"></div>									
                        <?php endif; ?>

                        <?php if( get_field('classificacao') == '16' ): ?>
                              <div class="classificacao 16"></div>									
                        <?php endif; ?>

                        <?php if( get_field('classificacao') == '18' ): ?>
                              <div class="classificacao 18"></div>									
                        <?php endif; ?>

                        <?php the_field('duracao_do_filme'); ?> <?php the_field('resolucao'); ?> </p>
                        <p class="genero"><?php the_field('generos'); ?>  </p>        
                  </div>
             
          </div>  
      </div>
 




<?php endwhile; ?> 
</div></div>