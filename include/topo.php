 
<?php $my_query = new WP_Query('category_name=destaques&posts_per_page=1'); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

<div class="content-topo"> 
<div class="imagem-d"> <?php the_post_thumbnail( 'full' ); ?> 
<div class="container flex"> 
      <div class="titulo-topo"> 
           <p><?php the_field('tipo'); ?> </p>
           <h2> <?php the_title(); ?> </h2>
           <a href="<?php the_permalink(); ?>"> <i class="fa-solid fa-play"></i> Assistir  </a>
           <a class="btn-topo-mais-infos" href="<?php the_permalink(); ?>">  <i class="fa-solid fa-info"></i> Mais informações  </a>

           

      </div>
</div>
</div>
  
  


 </div>
 
<?php endwhile; ?> 
 