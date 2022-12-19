<?php get_header(); ?>

<div class="container flex">
   
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 
<div class="box home todosposts">
           <a href="<?php the_permalink(); ?>" class="imgbox-home"> 
                <?php the_post_thumbnail( 'banner-home' ); ?> 
                </a>
                       <div class="mais-infos-box-home">
                           <a href="<?php the_permalink(); ?>"><span> <?php the_title(); ?> </span></a>
                             <a href="<?php the_permalink(); ?>"> <i class="fa-solid fa-circle-play"></i>  </a>
                             <p><?php the_field('duracao_do_filme'); ?> </p>
                             <p class="genero-e-ano"><?php the_field(' generos_e_ano'); ?>  </p>        
                       </div>
                  
               </div>  
           </div>

<?php endwhile?>
<?php else: ?>

  <div class="error-nada"> 
Nada Encontrado
<p>Lamentamos mas não foram encontrados artigos.</p></div>
<?php endif; ?> 
  
 
<div class="navegacao"><?php wordpress_pagination(); ?></div>
 
 
</div>
</div></div>
<?php get_footer(); ?>