<?php get_header(); ?>
 

<div class="container row"> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
 
<div class="artigo">
<div class="imagem-posts"><?php the_post_thumbnail( 'full' ); ?> </div>

<div class="titulo-posts">  <span><i class="fa-solid fa-user"></i> postado por:  <?php the_author(); ?>  </span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
 
</div>

  
 <div class="artigo-text">   <p><?php the_content(); ?></p>  </div>

<div class="footer-p">   <?php get_template_part( 'share' ); ?> </div>
 
   
   
<?php endwhile?>
<?php else: ?>
Nada Encontrado
<p>Lamentamos mas não foram encontrados artigos.</p>
<?php endif; ?> 
 

 
</div>
  
 <?php get_sidebar(); ?> 



 </div> </div></div>
 
  

<?php get_footer(); ?> 