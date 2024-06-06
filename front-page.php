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
            <div class="featured-container">
                <div class="featured_left">
                    <img src="/wp-content/themes/aco-child/src/img/00014.56.15.jpg">
                </div>
                <div class="featured-right">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="false"
                        data-bs-pause="hover">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner"><!--The Carousel Container-->

                            <div class="carousel-item carousel-item-1 active"><!--The Carousel item 1-->
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/unpaired-red-nike-sneaker-164_6wVEHfI"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">Nike</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$800.00</small>
                                                </div>

                                            </div>
                                        </div><!--[end of card]-->
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/white-adidas-low-top-sneakers-JM-qKEd1GMI"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">Adidas</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$600.00</small>
                                                </div>
                                            </div>
                                        </div><!--[end of card]-->
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/white-and-black-nike-air-force-1-low-XZ3EmAIWuz0"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">Slat Sole Show</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$500.00</small>
                                                </div>

                                            </div>
                                        </div><!--[end of card]-->
                                    </div>
                                </div><!--[End of Carousel Item 1]-->
                            </div>

                            <!-- Carousel Item 2 -->
                            <div class="carousel-item carousel-item-2">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/flatlay-photography-of-wireless-headphones-PDX_a_82obo"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">Black Glass Headset</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$200.00</small>
                                                </div>

                                            </div>
                                        </div><!--[end of card]-->
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/gray-and-brown-corded-headphones-GI6L2pkiZgQ"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">Nano Stripe Headset</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$300.00</small>
                                                </div>

                                            </div>
                                        </div><!--[end of card]-->
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/black-and-silver-sony-headphones-aiWjNA46Urc"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">Steelseries</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$500.00</small>
                                                </div>
                                            </div>
                                        </div><!--[end of card]-->
                                    </div>
                                </div>
                            </div> <!--[carousel-item-2]-->

                            <!-- Carousel Item 3 -->
                            <div class="carousel-item carousel-item-2">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/space-gray-iphone-x-with-box-K1MxhTd6SKo"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <p class="card-text">iPhone 15</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$2000.00</small>
                                                </div>

                                            </div>
                                        </div><!--[end of card]-->
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/silver-iphone-6-on-silver-macbook-gQ6NlDvRngU"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">iPhone 14 Pro Max</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$1500.00</small>
                                                </div>

                                            </div>
                                        </div><!--[end of card]-->
                                    </div>

                                    <div class="col">
                                        <div class="card shadow-sm mx-8 my-5">
                                            <small class="text-bg-warning px-5 rounded text-bg-light new">new</small>
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">
                                                <image
                                                    href="https://source.unsplash.com/black-iphone-7-with-white-and-black-dice-YLNMXzXk8zs"
                                                    height="100%" width="100%" />
                                            </svg>
                                            <div class="card-body">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                                <p class="card-text">iPhone 14</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-sm btn-outline-warning">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-warning"><i
                                                                class="fa-solid fa-cart-shopping"></i></button>
                                                    </div>
                                                    <small class="text-bg-warning px-2 rounded">$1200.00</small>
                                                </div>
                                            </div>
                                        </div><!--[end of card]-->
                                    </div>
                                </div>
                            </div> <!--[carousel-item-3]-->
                        </div><!--[End of Container]-->

                        <div class="control-btn">
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <i class="fa-solid fa-arrow-right"></i>

                                <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                                <i class="fa-solid fa-arrow-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

<div class="container"><?php get_footer(); ?></div>