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
                                        <p class="slider-text-header"><?php echo $field['title']; ?></p>
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
            <div class="col-6">
                <div class="group-items">
                    <a href="/product-category/porshnevye-kompressory/" class="group_item group_anime">
                        <div class="group_item_name">
                            Поршневые компрессоры
                            <p>Удобный, доступный и простой источник сжатого воздуха для циклических работ</p>
                        </div>
                        <div class="group_item_short-desc"></div>
                        <div class="group_item_image">
                            <img
                                src="https://asobezh-msk.ru/wp-content/themes/aco-child/src/img/cats-on-main/xporsh2.png.pagespeed.ic.tSX51ykQEG.webp">
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-6">2</div>
            <div class="col-6">3</div>
            <div class="col-6">4</div>
        </div>

    </section>
</section>

<div class="container"><?php get_footer(); ?></div>