<header>
 <div class="nav-mob-linhas" id="btnresponsivo">
    <span></span>
    <span></span>
    <span></span>
 </div>
 
  <div class="nav" id="nav">
  <div class="container flex"> 
  <div class="logo">
    <h2>SERIEFLIX</h2>
    <p>Assista filmes e séries </p>
     
  </div>
    <ul>
      <li>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'my-custom-menu',
        'container_class' => 'menu-topo' ) );
    ?>
      </li>
    </ul>

  </div></div>
</header>