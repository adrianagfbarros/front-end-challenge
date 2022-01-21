<?php 

    get_header();

    while(have_posts()) {
        the_post(); ?>
        <main class="post__container">

            <article class="post__card">

                <h2 class="post__title" ><a class="post__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <p class="post__content"><?php the_content(); ?></p>


            </article>

        </main>

    <?php }

        get_footer();
?>