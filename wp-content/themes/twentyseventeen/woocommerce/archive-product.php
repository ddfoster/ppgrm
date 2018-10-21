<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>


<div class="mainPage">

    <div class="mainPage_product-description">
        <div class="mainPage_product-description-welcome"></div>
        <div class="mainPage_product-description-about">
            <div class="container">
                <h1>Гаманці <span>PAPIRGAM</span></h1>
                <p>Гаманці виготовлені з матеріалу Tyvek. Це міцне, довговічне полотно яке складається на 100 % з поліетилену высокої щільності. Він тонкий, легкий, витривалий і водостійкий.</p>
                <div class="buttons">
                    <a href="#" class="buy">Придбати вже!</a>
                    <a href="#" class="video">Дивитись відео</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mainPage_carousel-description">
            <div class="single-item">
                <div class="single-item_block">
                    <img src="<?php bloginfo("template_url")?>/assets/img/dovgolitniy.png" alt="">
                    <h3>Довготривалий</h3>
                    <p>Tyvek складається на 100 % з поліетилену высокої щільності. Тому Papirgam служить тобі так само довгj як і шкіряний гаманець.</p>
                </div>
                <div class="single-item_block">
                    <img src="<?php bloginfo("template_url")?>/assets/img/dovgolitniy.png" alt="">
                    <h3>Довготривалий</h3>
                    <p>Tyvek складається на 100 % з поліетилену высокої щільності. Тому Papirgam служить тобі так само довго як і шкіряний гаманець.</p>
                </div>
                <div class="single-item_block">
                    <img src="<?php bloginfo("template_url")?>/assets/img/dovgolitniy.png" alt="">
                    <h3>Довготривалий</h3>
                    <p>Tyvek складається на 100 % з поліетилену высокої щільності. Тому Papirgam служить тобі так само довгj як і шкіряний гаманець.</p>
                </div>
                <div class="single-item_block">
                    <img src="<?php bloginfo("template_url")?>/assets/img/dovgolitniy.png" alt="">
                    <h3>Довготривалий</h3>
                    <p>Tyvek складається на 100 % з поліетилену высокої щільності. Тому Papirgam служить тобі так само довгj як і шкіряний гаманець.</p>
                </div>
            </div>
        </div>

        <div class="mainPage_small-description">
            <div class="info">
                <h4>Зручний і вмісткий!</h4>
                <p>Ми робимо Papirgam таким чином, щоб в
                    нього з легкістю поміщались купюры будь-яких країн світу. Ми хочемо, щоб тобі було зручно в подорожах.  Окрім двох відділень для грошей та чеків, гаманець має дві вмістких секціх для візиток та пластикових карт.</p>
                <img src="<?php bloginfo("template_url")?>/assets/img/111111111.PNG" alt="">
                <div class="block">
                    <div class="block-item">
                        <span>16 карток</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                    <div class="block-item">
                        <span>12 візиток</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                    <div class="block-item">
                        <span>20 купюр</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                    <div class="block-item">
                        <span>Чеки</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                </div>
            </div>
            <div class="image-top"></div>
        </div>

        <div class="mainPage_small-description">
            <div class="image-bottom"></div>
            <div class="info">
                <h4>Легкий, тонкий та компактний</h4>
                <p>Завдяки унікальному матеріалу та дизайну Papirgam - це дуже легкий компактний та тонкий гаманець, який  зручно носити в кишені. І він точно не додає зайвої ваги до твоєї сумки.</p>
                <div class="block">
                    <div class="block-item big">
                        <h5>Довжина</h5>
                        <span>10.5 см</span>
                    </div>
                    <div class="block-item big">
                        <h5>Висота</h5>
                        <span>8 см</span>
                    </div>
                    <div class="block-item big">
                        <h5>Ширина</h5>
                        <span>5 мм</span>
                    </div>
                    <div class="block-item big">
                        <h5>Вага</h5>
                        <span>15 гр</span>
                    </div>
                    <img src="<?php bloginfo("template_url")?>/assets/img/2222222222.PNG" alt="">
                </div>
            </div>
        </div>


        <?php do_action( 'woocommerce_archive_description' ); ?>

        <?php
        if ( woocommerce_product_loop() ) {

            woocommerce_product_loop_start();

            if ( wc_get_loop_prop( 'total' ) ) {
                while ( have_posts() ) {
                    the_post();

                    do_action( 'woocommerce_shop_loop' );

                    wc_get_template_part( 'content', 'product' );
                }
            }

            woocommerce_product_loop_end();

            do_action( 'woocommerce_after_shop_loop' );
        } else {

            do_action( 'woocommerce_no_products_found' );
        }


        do_action( 'woocommerce_sidebar' ); ?>

        <div class="reviews">
            <h2>Цим рєбяткам полюбились гаманці Papirgam</h2>
            <div class="reviews-block">
                <div class="image">
                    <img src="<?php bloginfo("template_url")?>/assets/img/404wallet.png" alt="">
                </div>
                <div class="comment">
                    <p>Когда я купила свой первый кастомный бумажный кошелёк Papirgam, моему счастью не было предела. Экологичный и компактный, уникальнейший дизайн, два удобных отделения для купюр и еще внутренние два отделения для кредиток. 5 лет носки, а состояние практически не изменилось. Спасибо Papirgam за супер крутой продукт !</p>
                    <h5>Даша. Продюсер. Київ</h5>
                </div>
            </div>
            <div class="reviews-block">
                <div class="image">
                    <img src="<?php bloginfo("template_url")?>/assets/img/111111111.PNG" alt="">
                </div>
                <div class="comment">
                    <p>Когда я купила свой первый кастомный бумажный кошелёк Papirgam, моему счастью не было предела. Экологичный и компактный, уникальнейший дизайн, два удобных отделения для купюр и еще внутренние два отделения для кредиток. 5 лет носки, а состояние практически не изменилось. Спасибо Papirgam за супер крутой продукт !</p>
                    <h5>Даша. Продюсер. Київ</h5>
                </div>
            </div>
            <div class="reviews-block">
                <div class="image">
                    <img src="<?php bloginfo("template_url")?>/assets/img/papigram-logo.png" alt="">
                </div>
                <div class="comment">
                    <p>Когда я купила свой первый кастомный бумажный кошелёк Papirgam, моему счастью не было предела. Экологичный и компактный, уникальнейший дизайн, два удобных отделения для купюр и еще внутренние два отделения для кредиток. 5 лет носки, а состояние практически не изменилось. Спасибо Papirgam за супер крутой продукт !</p>
                    <h5>Даша. Продюсер. Київ</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribe">
        <p>Підпишись, щоб не пропустити цікаві пропозиції новини і натхнення! </p>
        <div class="send-email">
            <form action="">
                <input class="email" type="email" name="email" placeholder="Твій e-mail">
                <input class="button" type="submit" value="Го!">
            </form>
        </div>
    </div>
</div>


<?php get_footer( 'shop' ); ?>

<!--<header class="woocommerce-products-header">-->
<!--	--><?php //if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<!--		<h1 class="woocommerce-products-header__title page-title">--><?php //woocommerce_page_title(); ?><!--</h1>-->
<!--	--><?php //endif; ?>

<!--	-->

