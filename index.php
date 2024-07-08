<?php get_header(); ?>


<main>

<div class="page-hero" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">

    <h1 class="page-hero__heading">
        <?php the_title(); ?>
    </h1>

</div>

<div class="posts__wrapper">
    <?php 
        if(have_posts()) {
            while(have_posts()) : the_post();
        ?>
            <div class="post">
                <div style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>);" class="post__image"></div>
                <h1 class="post__title">
                    <?php the_title(); ?>
                </h1>

                <div class="post__content">
                    <?php the_content(); ?>
                </div>

                <a href="<?php echo get_permalink(); ?>" class="post__button">Read more</a>
            </div>

        <?php


        endwhile;
        }
    ?>

</div>
</main>

<?php get_footer(); ?>