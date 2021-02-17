<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="block-center-row mb-2 fnt-lg">
    <?php the_content();?>
   </main>

<?php endwhile;endif; ?>


   <?php get_footer();?>