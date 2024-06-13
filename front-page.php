<?php get_header(); ?>

<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false"
    data-bs-pause="hover">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php $fields = CFS()->get('slider'); ?>

        <?php if (!empty($fields)): ?>

            <?php $i = 0;
            foreach ($fields as $field): ?>
                <div class="carousel-item<?php if ($i === 0)
                    echo ' active'; ?>" data-bs-interval="10000">
                    <div class="main-slider_slide main-slider_slide--vint">
                        <div class="container slider-container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slider-text">
                                        <p class="text-h5"><?php echo $field['title']; ?></p>
                                        <a href="<?php echo $field['href']; ?>" class="main-slider_button catalog-button--blue">
                                            <span class="button-body">Подробнее</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-container"><img src="<?php echo $field['img']; ?>"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++;
            endforeach; ?>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="container-fluid container-background">
    <section class="container">
        <div class="row">
            <div class="section_headline">Каталог Бежецких компрессоров</div>
            <div class="col-md-6 col-sm-12">
                <div class="group-items">
                    <a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
                        <div class="group_item_name">
                            <p class="text-h5">Поршневые компрессоры</p>
                            <p class="description-text">Удобный, доступный и простой источник сжатого воздуха для
                                циклических работ</p>
                        </div>
                        <div class="group_item_image">
                            <img
                                src="https://asobezh-msk.ru/wp-content/themes/aco-child/src/img/cats-on-main/xporsh2.png.pagespeed.ic.tSX51ykQEG.webp">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="group-items">
                    <a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
                        <div class="group_item_name">
                            <p class="text-h5">Винтовые компрессоры</p>
                            <p class="description-text">Надежные установки для производства воздуха в промышленных
                                масштабах</p>
                        </div>
                        <div class="group_item_image">
                            <img
                                src="https://asobezh-msk.ru/wp-content/themes/aco-child/src/img/cats-on-main/xvint2.png.pagespeed.ic.Kjxv5JWINs.webp">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="group-items">
                    <a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
                        <div class="group_item_name">
                            <p class="text-h5">Подготовка воздуха</p>
                            <p class="description-text">Оптимальные и выгодные решения для очистки поверхностей любой
                                площади</p>
                        </div>
                        <div class="group_item_image">
                            <img
                                src="https://asobezh-msk.ru/wp-content/themes/aco-child/src/img/cats-on-main/xresiver2.png.pagespeed.ic.lnF0ZZM6Ta.webp">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="group-items">
                    <a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
                        <div class="group_item_name">
                            <p class="text-h5">Пескоструйное оборудование</p>
                            <p class="description-text">Удобный, доступный и простой источник сжатого воздуха для
                                циклических работ</p>
                        </div>
                        <div class="group_item_short-desc"></div>
                        <div class="group_item_image">
                            <img
                                src="https://asobezh-msk.ru/wp-content/themes/aco-child/src/img/cats-on-main/xpeskostruika2.png.pagespeed.ic.5aDltOxcj2.webp">
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
</section>
<section>
    <div class="container">
        <div class="section_headline section-advantage">Бежецкий завод АСО и его преимущества</div>
        <div class="row section-colums">
            <div class="col-lg-4 col-md-24 advantage_headline">
                НАШЕ главное ПРЕИМУЩЕСТВО - ВЕКОВЫЕ ТРАДИЦИИ КАЧЕСТВА!
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 advantage advantage--1">
                <div class="advantage_image">
                    <img src="/wp-content/themes/aco-child/src/img/icon-budgetary.png">
                </div>
                <p class="advantage_heading">Бюджетное</p>
                <p class="advantage_text"> ценообразование</p>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 advantage advantage--2">
                <div class="advantage_image">
                    <img src="/wp-content/themes/aco-child/src/img/icon-life.png">
                </div>
                <p class="advantage_heading">Большой срок</p>
                <p class="advantage_text"> эксплуатации</p>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 advantage advantage--3">
                <div class="advantage_image">
                    <img src="/wp-content/themes/aco-child/src/img/100.png">
                </div>
                <p class="advantage_heading">Столетняя традиция</p>
                <p class="advantage_text"> и инновации</p>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 advantage advantage--4">
                <div class="advantage_image">
                    <img src="/wp-content/themes/aco-child/src/img/icon-quality.png">
                </div>
                <p class="advantage_heading">Качество</p>
                <p class="advantage_text"> подтвержденное сертификатом ISO</p>
            </div>
        </div>
        <div class="benefits_text">
            <p>
                История Бежецкого завода "АСО" берет свое начало с сентября 1917 года. В 2017 году заводчане отметили
                юбилей завода — 100-летие со дня основания. А свой первый компрессор завод выпустил более 85 лет назад в
                1932 году. Все это время мы ведем постоянную работу над улучшением нашей продукции, внедряем новые
                технологические процессы, модернизируем станочный парк, разрабатываем новые энергоэффективные модели
                компрессоров.</p>
            <p>
                Мы понимаем важность качества и стабильности работы оборудования, поэтому ни один компрессор не уходит с
                завода без индивидуальной проверки. Репутация нашего завода основана на надежности и качестве продукции,
                работающей в различных областях промышленности. Успех, в первую очередь, обусловлен собственной
                инженерно-проектной базой и безукоризненными стандартами контроля производства. А словосочетание
                “Бежецкий компрессор”, является синонимом качества и надежности.
            </p>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid container-background">
        <div class="container">
            <div class="section_headline featured-after">Рекомендуем</div>
            <div class="featured-container">
                <div class="featured_left">
                    <img src="/wp-content/themes/aco-child/src/img/00014.56.15.jpg">
                </div>
                <div class="featured-right">

                    <div id="carouselExampleControls" class="carousel carousel-dark" data-bs-ride="carousel">
                        <?php
                        $loop = new WP_Query(
                            array(
                                'post_type' => 'product',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_visibility',
                                        'field' => 'name',
                                        'terms' => 'featured',
                                    ),
                                ),
                                'posts_per_page' => 4,
                                'orderby' => 'menu_order',
                                'order' => 'ASC',
                            )
                        );
                        ?>
                        <div class="carousel-inner">
                            <?php
                            while ($loop->have_posts()):
                                $loop->the_post(); ?>
                                <div class="carousel-item active">
                                    <div class="card">
                                        <div class="img-wrapper">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="card-body">

                                            <span href="<?php the_permalink(); ?>" class="product_block_name">
                                                <?php the_title(); ?>
                                            </span>

                                            <ul class="product_block_props">
                                                <li>Производительность: <?php the_field('production'); ?> л/мин.</li>
                                                <li>Давление: <?php the_field('pressure'); ?> бар</li>
                                                <li>Мощность: <?php the_field('power'); ?> кВт</li>
                                            </ul>

                                            <?php

                                            if ($price = $product->get_price_html()) {
                                                echo '<div class="product_block_price">
    <div class="price_value">
    <span class="actual_price">' . $price = $product->get_price_html() . '</span>
    <a href="#order-form_pop" class="product_block_get-discount">
    <span class="button-body">Запросить скидку</span>
    </a>
    </div>
    </div>';
                                                echo '<a href="/product/kompressor-aso-vk-37-8-2/" class="product_block_button">
        <span class="button-icon--left br-white">
            <span class="fa-stack fa-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
            <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
          </svg>
            </span>
        </span>
        <span class="button-body">Подробнее</span>
    </a>';
                                            } else {
                                                echo '<div class="price_value">
    <span class="no_price">Цена по запросу</span>
    </div>';
                                                echo '<a href="/product/kompressor-aso-vk-37-8-2/" class="product_block_button">
    <span class="button-icon--left br-white">
        <span class="fa-stack fa-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
        <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
      </svg>
        </span>
    </span>
    <span class="button-body">Подробнее</span>
</a>';
                                            }

                                            ?>


                                        </div>
                                    </div>
                                </div>

                            <?php endwhile;
                            wp_reset_postdata();
                            ?>
                            <!-- <div class="carousel-item active">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 1</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 2</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 3</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 4</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 5</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 6</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 7</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 8</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img
                                            src="https://codingyaar.com/wp-content/uploads/multiple-items-carousel-slide-1-card-2.jpg"
                                            class="d-block w-100" alt="..."> </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title 9</h5>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <i class="bi bi-star-fill text-warning pe-1"></i>
                                        <p class="card-text">"Some dummy text you don't need to read.
                                            Since you have decided to read, do like, share, comment and
                                            subscribe to Coding Yaar."</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>


                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>




                    </div>

                </div>
            </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="section_headline section_headline_news">Новости компании</div>
            <div class="col-24 section section_news">
                <div class="section_left">
                    <img src="/wp-content/themes/aco-child/src/img/brand-bej-image-02-s.jpg">
                </div>
                <div class="section_right">


                    <div class="section_content--column">
                        <?php query_posts('cat=1&posts_per_page=3');
                        while (have_posts()):
                            the_post(); ?>
                            <div class="main-page_news">
                                <div class="main-page_news_content">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="my-thumb-class"
                                        alt="Image forНовинки Бежецкого завода АСО">
                                    <div class="main-page_news_content_text">
                                        <p class="main-page_news_content_headline"><a href="<?php the_permalink(); ?>"
                                                class="content_header"><?php the_title(); ?></a></p>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container"><?php get_footer(); ?></div>