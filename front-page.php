<?php get_header(); ?>

<section class="hero">
    <div class="tiny-slider">
            <div class="my-slide">
                <?php
                $args = array(
                    'post_type'      => 'hero-slide',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        $image = get_field('hero_image');
                        if( !empty( $image ) ): ?>
                            <div class="slide">
                                <div class="image" style="background-image: url(<?php echo esc_url($image['url']); ?>);" alt="image"></div>
                            </div>
                        <?php endif;
                    }
                } 
                wp_reset_postdata();
                ?>
            </div>
    </div>
    <div class="hero__wrapper">
        <div class="wrapper">
            <div class="wrapper__heading">
                <span>THE NEW COLLECTION</span>
                <h1>Elegant & Luxury</h1>
                <a href="/shop" class="button button-white">BROWSE COLLECTION</a>
            </div>
        </div>
    </div>
</section>

<section class="standard-promo">

    <a href="/product-category/women/" class="promo-card promo-card--gray promo-card--women">
        <div class="promo-card__titles reveal">
            <h2 class="promo-card__heading">Shop Women</h2>
            <p class="promo-card__body">Women's new arrivals. It's time to explore your options.</p>
        </div>
    </a>

    <a href="/product-category/men/" class="promo-card promo-card--gray promo-card--men">
        <div class="promo-card__titles reveal">
            <h2 class="promo-card__heading">Shop Men</h2>
            <p class="promo-card__body">Mens's new arrivals. It's time to explore your options.</p>
        </div>
    </a>

</section>

<section class="shop-section">
    <h2 class="shop-section__heading">Best Sellers</h2>
    <p class="shop-section__body">Our bestsellers. They are smooth and soft<br/> with adjustable elastic loop.</p>
    <div class="items reveal">
        <?php echo do_shortcode('[best_selling_products limit="4"]'); ?>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">New Arrivals</h2>
    <p class="shop-section__body">New arrivals. Updated every<br/> day. It's time to explore.</p>
    <div class="items reveal">
        <?php echo do_shortcode('[products limit="4" orderbyid="id" order="DESC"]'); ?>
    </div>
</section>

<section class="newsletter">

        <h1 class="newsletter__heading">Sign up to Smartshop newsletter and
            get updates about our latest arrivals
            and exclusive sales.</h1>

            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="a6db1ca" title="Contact form 1"]'); ?>
            </div>

    </section>

<?php get_footer(); ?>