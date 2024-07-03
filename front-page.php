<?php get_header(); ?>

<section class="hero">
    <div class="hero__wrapper">
        <div class="wrapper">
            <div class="wrapper__heading">
                <span>THE NEW COLLECTION</span>
                <h1>Elegant & Luxury</h1>
                <a  href="/shop" class="button button-white">BROWSE COLLECTION</a>
            </div>
        </div>
</div>
</section>

<section class="standard-promo">

    <a href="/product-category/women/" class="promo-card promo-card--gray promo-card--women reveal">
        <div class="promo-card__titles">
            <h2 class="promo-card__heading">Shop Women</h2>
            <p class="promo-card__body">Women's new arrivals. It's time to explore your options.</p>
        </div>
    </a>

    <a href="/product-category/men/" class="promo-card promo-card--gray promo-card--men reveal">
        <div class="promo-card__titles">
            <h2 class="promo-card__heading">Shop Men</h2>
            <p class="promo-card__body">Mens's new arrivals. It's time to explore your options.</p>
        </div>
    </a>

</section>

<section class="shop-section">
    <h2 class="shop-section__heading">Women's Best Sellers</h2>
    <p class="shop-section__body">Our women's bestsellers. They are smooth and soft<br/> with adjustable elastic loop.</p>
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

            <form class="form" action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                <input class="form__email" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c12aafb941c4276911b0d5cd3_839b42c955" tabindex="-1" value=""></div>
                <input class="form__submit button" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
            </form>

    </section>

<?php get_footer(); ?>