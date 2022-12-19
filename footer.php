<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>
<script src="https://kit.fontawesome.com/830a4ac0c9.js" crossorigin="anonymous" async></script>


<script>

let btnresponsivo = document.getElementById('btnresponsivo');
let navmenu = document.getElementById('nav');

btnresponsivo.addEventListener('click', ()=> {
  navmenu.classList.toggle('active')
  btnresponsivo.classList.toggle('barras')
})


$(".slider").slick({
  dots: false,
  infinite: false,
  speed: 200,
  slidesToShow: 5,
  slidesToScroll: 2,
  autoplay: false,
  nextArrow: '<button class="seta-next"></button>',
  prevArrow: '<button class="seta-previous"></button>',
 
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 1,
      }
    }
  ]
});
  
</script>

</div>

 
 
 

<footer class="footer"><div class="container flex">
<div class="redes-site">
  <a href="#"><i class="fa-brands fa-instagram"></i></a>
  <a href="#"><i class="fa-brands fa-twitter"></i></a>
  </div>


  <div class="disclaimer">
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut ullam doloremque, id repellat nemo placeat sapiente blanditiis ipsa eos deserunt dolor libero, nulla temporibus, accusamus laboriosam? Itaque, maxime exercitationem.
    </p>
  </div>

  <div class="links-footer">
  <?php if ( is_active_sidebar( 'categorias' ) ) :		dynamic_sidebar( 'categorias' );	endif; ?> 

  </div>

  <div class="links-footer">
 
    <ul>
    <li> <a href="/"> Site principal </a> </li>
    <li> <a href="/galeria"> Galeria </a> </li>
    <li> <a href="/contato"> Contato </a> </li>
    </ul>

    <p class="creditos">  x </p> 

  </div>


   

</footer>
 

 

<?php wp_footer(); ?>

</body>
</html>