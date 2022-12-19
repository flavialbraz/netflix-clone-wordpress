<?php get_header(); ?>
 
<?php get_template_part( 'include/header-menu' ); ?>

<div class="container-show flex"> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 

<div class="content-show">

<div class="imagem-post">
    <a href="/flix" class="closebtn">x</a>
    <?php the_post_thumbnail( 'full' ); ?>
    <div class="titulo-posts">
        <h1>    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h1> 
        <a class="btn"> <i class="fa-solid fa-play"></i> Assista agora!  </a>
    </div>
</div>

<div class="mais-infos-post">
     <span><?php the_field('duracao_do_filme'); ?> </span> <span> <?php the_field(' generos_e_ano'); ?>   </span>
     
</div>
<div class="sinopse-text"> <?php the_field('sinopse'); ?></div>
 
<div class="content-text">   <p><?php the_content(); ?></p>  </div>


<div class="relacionados row"> <div class="tag-rela">relacionados</div> <div class="clear"></div> <?php get_template_part( 'include/relacionados' ); ?></div>
</div>


<div class="footer-p">   <?php get_template_part( 'share' ); ?> </div>
 
   
   </div>   
   
   <div class="back-body"> <?php if( get_field('imagem_para_o_background_da_pagina_do_video') ): ?>
    <img src="<?php the_field('imagem_para_o_background_da_pagina_do_video'); ?>" />
<?php endif; ?></div>

<?php endwhile?>
<?php else: ?>
 
<?php endif; ?> 
 

 
  
 



 </div></div>
 
  

<?php get_footer(); ?> 