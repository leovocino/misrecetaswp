<article class="mb-3">
                <h2 class="head-strong mb-05 fnt-xl2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="grid">

                    <div class="col-desk-4 col-tab-5">
                        <?php the_post_thumbnail('medium-large'); ?>
                    </div>

                    <div class="col-desk-8 col-tab-7">
                        <div class="head-strong mb-1"><?php echo get_the_date(); ?> | <?php the_author(); ?></div>
                        <div class="mb-2 line-normal">
                            <?php the_excerpt(); ?>
                        </div>
                        <a class="lnk-nm" href="<?php the_permalink(); ?>">Ver receta</a>
                    </div>

                </div>

            </article>