<?php get_header(); ?>

<main>
    <div class="shop">
        <div class="shop__content">
            <?php woocommerce_content(); ?>
        </div>
        <div class="shop__filter">
            <?php echo do_shortcode('[wpf-filters id=1]'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>