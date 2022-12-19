<?php /* Template Name: Inicial */ ?>

<?php get_header(); ?>

 

<?php get_template_part( 'include/header-menu' ); ?>
<?php get_template_part( 'include/topo' ); ?> 


<div class="container row">

<h2 class="titulo-categoria"> Adicionados recentemente </h2>

<div class="slider">
  
<?php $wp_query = new WP_Query(array('posts_per_page'=>20));
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

 
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
</div>

 
 


<h2 class="titulo-categoria"> <?php echo $GLOBALS['categoria1'] ?>  > </h2>
<?php get_template_part( 'include/categoria-1' ); ?>



<h2 class="titulo-categoria"> <?php echo $GLOBALS['categoria2'] ?> > </h2>
<?php get_template_part( 'include/categoria-2' ); ?>

<h2 class="titulo-categoria"> <?php echo $GLOBALS['categoria3'] ?> > </h2>
<?php get_template_part( 'include/categoria-3' ); ?>


<h2 class="titulo-categoria"> <?php echo $GLOBALS['categoria4'] ?> > </h2>
<?php get_template_part( 'include/categoria-4' ); ?>



<h2 class="titulo-categoria"> <?php echo $GLOBALS['categoria5'] ?> > </h2>
<?php get_template_part( 'include/categoria-5' ); ?>

</div>

 
 
  

<?php get_footer(); ?>