<?php get_header(); ?>


<main>

    <?php 
        if(have_posts()) {
            while(have_posts()) : the_post();
        ?>

        <div class="page-hero" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">

            <h1 class="page-hero__heading">
                <?php the_title(); ?>
            </h1>

        </div>

            <div class="reveal">
                <?php the_content(); ?>
            </div>
        <?php


        endwhile;
        }
    ?>
</main>

<?php get_footer(); ?>