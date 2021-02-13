<?php get_header(); ?>
   
   <main class="grid">
       <section class="col-desk-10 col-tab-8 col-mob-12">
          <div class="grid">
                <div class="col-desk-6 col-tab-6 col-mob-12 mb-2">
                    <h2 class="head-strong txt-center fnt-md mb-05">Pasta al pesto</h2>
                    <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pasta-al-pesto.jpg" alt="Pasta al pesto">
                </div>
                <div class="col-desk-6 col-tab-6 col-mob-12 mb-2">
                    <h2 class="head-strong txt-center fnt-md mb-05">Lomo Wellington</h2>
                    <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lomo-wellington.jpg" alt="Lomo Wellington">
                </div>
                <div class="col-desk-6 col-tab-6 col-mob-12 mb-2">
                    <h2 class="head-strong txt-center fnt-md mb-05">Asado negro</h2>
                    <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/asado-negro.jpg" alt="Asado Negro">
                </div>
                <div class="col-desk-6 col-tab-6 col-mob-12 mb-2">
                    <h2 class="head-strong txt-center fnt-md mb-05">Tiramisu</h2>
                    <img class="img-md" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiramisu2.jpg" alt="Tiramisu">
                </div>
                </div>
        </section>
       <aside class="col-desk-2 col-tab-4 col-mob-12">
           <h2 class="head-strong fnt-s txt-center mb-05">Menú del día</h2>
           <div class="bg-ligth pad-1 rounded">
                <ul class="grid">
                    <li class="col-mob-4 mb-1">
                        <h3 class="head-strong mb-05 fnt-s txt-center">Entrante</h3>
                        <img class="rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pasta-al-pesto.jpg" alt="Pasta al pesto">   
                    </li>
                    <li class="col-mob-4 mb-1">
                        <h3  class="head-strong mb-05 fnt-s txt-center">Principal</h3>
                    <img class="rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lomo-wellington.jpg" alt="Lomo wellington">   
                    </li>
                    <li class="col-mob-4 mb-1">
                        <h3 class="head-strong mb-05 fnt-s txt-center">Postre</h3>
                        <img class="rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiramisu2.jpg" alt="tiramisu">   
                   </li>
                </ul>
               
            </div>
       </aside>
   </main>
   
<?php get_footer(); ?>