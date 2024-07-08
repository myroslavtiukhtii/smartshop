<?php get_header(); ?>


<main class="single__post">

    <?php 
        if(have_posts()) {
            while(have_posts()) : the_post();
        ?>

        <div class="page-hero" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">

            <h1 class="single__post__heading">
                <?php the_title(); ?>
            </h1>

        </div>

            <div class="content">
                <?php the_content(); ?>
            </div>
        <?php


        endwhile;
        }
    ?>
</main>

<?php get_footer(); ?>