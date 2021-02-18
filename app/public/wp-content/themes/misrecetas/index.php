<?php get_header(); ?>
   
   <main class="grid">

    <?php
        $args = array (
            "posts_per_page" => 6,
            "post_status" => "publish",
            "post_type" => "post",
            //"paged" => $paged
        );
        $wp_query = new WP_Query($args);
    ?>
  
   <?php if ($wp_query->have_posts() ): ?>

       <section class="col-desk-10 col-tab-8 col-mob-12">
            <div class="grid">
            <?php while( $wp_query->have_posts() ): $wp_query->the_post(); ?>

                <div class="col-desk-6 col-tab-6 col-mob-12 mb-2">
                    <div class="mb-05">
                    <a href="<?php the_permalink(); ?>"><img class="img-md rounded img-link" src="<?php echo get_the_post_thumbnail_url(false,"medium_large");?>"></a>
                    </div>
                    <h2 class="head-strong txt-center fnt-md mb-05"><a class="lnk-nm" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                </div>
            <?php endwhile;wp_reset_postdata();?>
                
            </div>
        </section>

        <?php endif; ?>


       <aside class="col-desk-2 col-tab-4 col-mob-12">
           <h2 class="head-strong fnt-md txt-center mb-05">Menú del día</h2>
           <div class="pad-1 rounded mb-1 border-ligth">
                <div class="grid">
                <?php $menu_del_dia = get_field ('menu_del_dia', get_page_by_path('menu-del-dia')-> ID); ?>
                <?php if ($menu_del_dia): ?>
                    <?php foreach ($menu_del_dia as $post): setup_postdata($post); ?>

                        <div class="col-mob-4 mb-1">
                            <h4 class="fnt-s txt-ligth mb-05 txt-center"><?php the_category(); ?></h4>
                            <h3 class="fnt-md head-strong mb-05 txt-center"><a class="lnk-nm" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                            <img class="img-xs img-link" src="<?php echo get_the_post_thumbnail_url(false, 'medium_large'); ?>">
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?> 
                   
                </div>
               
            </div>
       </aside>
   </main>
   
<?php get_footer(); ?>