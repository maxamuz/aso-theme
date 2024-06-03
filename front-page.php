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
                                    <div class="img-container"><?php echo $field['img']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; endforeach; ?>
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
            <div class="row featured-container">
                <div class="col-lg-3 featured_left">
                    <div class="featured_left">
                        <img src="/wp-content/themes/aco-child/src/img/00014.56.15.jpg">
                    </div>
                </div>
                <div class="col-lg-9 featured-right">
                    2
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container"><?php get_footer(); ?></div>