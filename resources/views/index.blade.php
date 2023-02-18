<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wynnsoft-KH</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    @vite(['resources/css/index.css', 'resources/scss/index.scss', 'resources/js/index.js'])
</head>

<body>
    <header>
        <div class="header" id="header">
            <div class="header-top">
                <div class="header-top-group">
                    <div class="header-top-group-contact">
                        <div class="header-top-group-contact-box">
                            <figure>
                                <img src="/img/index/header/phone.png" alt="">
                            </figure>
                            <p>Tel: 123-456-7890</p>
                        </div>
                        <div class="header-top-group-contact-box">
                            <figure>
                                <img src="/img/index/header/fax.png" alt="">
                            </figure>
                            <p>Fax: 123-456-7890</p>
                        </div>
                    </div>
                    <div class="header-top-group-logo">
                        <figure>
                            <img src="/img/index/header/logo.png" alt="">
                        </figure>
                    </div>
                    <div class="header-top-group-social">
                        <figure>
                            <img src="/img/index/header/facebook.png" alt="">
                        </figure>
                        <figure>
                            <img src="/img/index/header/instagram.png" alt="">
                        </figure>
                        <figure>
                            <img src="/img/index/header/twitter.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <nav class="header-bot">
                <ul class="header-bot-nav">
                    <li class="header-bot-nav-link active"><a href="">หน้าหลัก</a></li>
                    <li class="header-bot-nav-link"><a href="">เราให้บริการใคร</a></li>
                    <li class="header-bot-nav-link"><a href="">บริการของเรา</a></li>
                    <li class="header-bot-nav-link"><a href="">แบรนด์ในเครือ</a></li>
                    <li class="header-bot-nav-link"><a href="">ข่าวสาร/โปรโมชั่น</a></li>
                    <li class="header-bot-nav-link"><a href="">มานามิเฟรนไชร์</a></li>
                    <li class="header-bot-nav-link"><a href="">ผลงานของเรา</a></li>
                    <li class="header-bot-nav-link"><a href="">ติดต่อเรา</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="indexBanner">
            <div class="banner">
                <figure class="banner-floatingimg-1">
                    <img src="/img/index/banner/backgroundbotright1.png" alt="">
                </figure>
                <figure class="banner-floatingimg-2">
                    <img src="/img/index/banner/backgroundbotright2.png" alt="">
                </figure>
                <figure class="banner-floatingimg-3">
                    <img src="/img/index/banner/mouse.png" alt="">
                </figure>
                <div class="banner-swiper">
                    <div class="swiper" id="bannerSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="banner-swiper-group">
                                    <div class="banner-swiper-group-left">
                                        <figure>
                                            <img src="/img/index/banner/presenter.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="banner-swiper-group-right">
                                        <div class="banner-swiper-group-right-title">
                                            <p>Lorem ipsum dolor sit amet,
                                                consectetur
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-description">
                                            <p>Lorem ipsum dolor sit amet consectetur. Et vitae amet scelerisque
                                                pharetra
                                                viverra fermentum sagittis nisl sit. Quam urna velit potenti a fermentum
                                                molestie curabitur lacus. Nunc eu tellus donec non sagittis ut sed
                                                curabitur.
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-detail">
                                            <button type="button">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-swiper-group">
                                    <div class="banner-swiper-group-left">
                                        <figure>
                                            <img src="/img/index/banner/presenter.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="banner-swiper-group-right">
                                        <div class="banner-swiper-group-right-title">
                                            <p>Lorem ipsum dolor sit amet,
                                                consectetur
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-description">
                                            <p>Lorem ipsum dolor sit amet consectetur. Et vitae amet scelerisque
                                                pharetra
                                                viverra fermentum sagittis nisl sit. Quam urna velit potenti a fermentum
                                                molestie curabitur lacus. Nunc eu tellus donec non sagittis ut sed
                                                curabitur.
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-detail">
                                            <button type="button">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-swiper-group">
                                    <div class="banner-swiper-group-left">
                                        <figure>
                                            <img src="/img/index/banner/presenter.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="banner-swiper-group-right">
                                        <div class="banner-swiper-group-right-title">
                                            <p>Lorem ipsum dolor sit amet,
                                                consectetur
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-description">
                                            <p>Lorem ipsum dolor sit amet consectetur. Et vitae amet scelerisque
                                                pharetra
                                                viverra fermentum sagittis nisl sit. Quam urna velit potenti a fermentum
                                                molestie curabitur lacus. Nunc eu tellus donec non sagittis ut sed
                                                curabitur.
                                            </p>
                                        </div>
                                        <div class="banner-swiper-group-right-detail">
                                            <button type="button">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="bannerPagination"></div>
                    <div class="swiper-button-prev" id="bannerBtnPrev"></div>
                    <div class="swiper-button-next" id="bannerBtnNext"></div>
                </div>
            </div>
        </section>
        <section id="indexProduct">
            <div class="product">
                <figure class="product-floatingimg">
                    <img src="/img/index/product/bgbotright.png" alt="">
                </figure>
                <div class="product-header">
                    <div class="product-header-title">
                        <p>Product ของเรามีอะไรบ้าง</p>
                    </div>
                    <div class="product-header-description">
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper product-wrapper">
                        <div class="swiper-slide product-slide">
                            <div class="product-swiper-group">
                                <figure class="product-swiper-group-floatingimg-1">
                                    <img src="/img/index/product/shirt.png" alt="">
                                </figure>
                                <figure class="product-swiper-group-floatingimg-2">
                                    <img src="/img/index/product/pant.png" alt="">
                                </figure>
                                <figure class="product-swiper-group-image">
                                    <img src="/img/index/product/product1.png" alt="">
                                </figure>
                                <div class="product-swiper-group-title">
                                    <p>ออกแบบเว็บไซส์</p>
                                </div>
                                <div class="product-swiper-group-line"></div>
                                <div class="product-swiper-group-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus vel morbi
                                        venenatis tortor. Vestibulum</p>
                                </div>
                                <div class="product-swiper-group-detail">
                                    <button type="button">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-slide">
                            <div class="product-swiper-group">
                                <figure class="product-swiper-group-floatingimg-1">
                                    <img src="/img/index/product/shirt.png" alt="">
                                </figure>
                                <figure class="product-swiper-group-floatingimg-2">
                                    <img src="/img/index/product/pant.png" alt="">
                                </figure>
                                <figure class="product-swiper-group-image">
                                    <img src="/img/index/product/product2.png" alt="">
                                </figure>
                                <div class="product-swiper-group-title">
                                    <p>นำเข้าจัดจำหน่ายเครื่องซักผ้า</p>
                                </div>
                                <div class="product-swiper-group-line"></div>
                                <div class="product-swiper-group-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus vel morbi
                                        venenatis tortor. Vestibulum</p>
                                </div>
                                <div class="product-swiper-group-detail">
                                    <button type="button">Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-slide">
                            <div class="product-swiper-group">
                                <figure class="product-swiper-group-floatingimg-1">
                                    <img src="/img/index/product/shirt.png" alt="">
                                </figure>
                                <figure class="product-swiper-group-floatingimg-2">
                                    <img src="/img/index/product/pant.png" alt="">
                                </figure>
                                <figure class="product-swiper-group-image">
                                    <img src="/img/index/product/product3.png" alt="">
                                </figure>
                                <div class="product-swiper-group-title">
                                    <p>นำเข้าจัดจำหน่ายเครื่องเวนดิ่ง</p>
                                </div>
                                <div class="product-swiper-group-line"></div>
                                <div class="product-swiper-group-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus vel morbi
                                        venenatis tortor. Vestibulum</p>
                                </div>
                                <div class="product-swiper-group-detail">
                                    <button type="button">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="productPagination"></div>
                </div>
                <div class="product-illustration">
                    <figure>
                        <img src="/img/index/product/illustration.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section id="indexStory">
            <div class="story">
                <div class="story-top">
                    <figure class="story-top-floatingimg-1">
                        <img src="/img/index/story/topfloatingimg1.png" alt="">
                    </figure>
                    <figure class="story-top-floatingimg-2">
                        <img src="/img/index/story/topfloatingimg2.png" alt="">
                    </figure>
                    <div class="story-top-group">
                        <div class="story-top-group-title">
                            <p>Story องค์กร (จุดเริ่มต้นการก่อตั้ง)</p>
                        </div>
                        <div class="story-top-group-line"></div>
                        <div class="story-top-group-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec augue quis vitae mi enim.
                                Nunc
                                nec volutpat dui neque. Ornare et varius vitae sit non. Facilisi tristique nulla proin
                                non
                                ut pellentesque eget. Turpis interdum urna sagittis, id vestibulum in. Suscipit lectus
                                bibendum arcu sit orci.
                                Blandit ut sit id lectus sit amet, elementum. Egestas pellentesque diam duis molestie
                                sit.
                                Ornare interdum interdum facilisi tellus. Magna morbi magna nunc in dignissim lobortis
                                imperdiet lobortis turpis. In massa ipsum in nulla at scelerisque. Eget praesent
                                sollicitudin netus condimentum maecenas at lorem. Nam magna quis tellus fusce pretium
                                quis
                                diam dictum. Sit turpis tristique ut faucibus. Nulla sagittis, mattis elementum diam
                                malesuada nam ultricies dictum. Magna neque lacus, orci lacinia leo elementum.
                                Arcu fermentum velit velit morbi pellentesque lacus, sollicitudin. Nunc, purus
                                consequat,
                                odio sed in elementum laoreet. Eu ipsum praesent a felis mauris ornare. Fusce vitae dui
                                nec
                                sed eget proin ornare. Sit facilisis nibh nunc et eu scelerisque pharetra nulla.
                                Facilisis
                                duis a.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="story-mid">
                    <figure class="story-mid-floatingimg-1">
                        <img src="/img/index/story/midfloatingimg1.png" alt="">
                    </figure>
                    <figure class="story-mid-floatingimg-2">
                        <img src="/img/index/story/midfloatingimg2.png" alt="">
                    </figure>
                    <div class="story-mid-group">
                        <div class="story-mid-group-left">
                            <div class="story-mid-group-left-title">
                                <p>Wynnsoft solution</p>
                            </div>
                            <div class="story-mid-group-left-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec augue quis vitae mi
                                    enim. Nunc nec volutpat dui neque. Ornare et varius vitae sit non. Facilisi
                                    tristique nulla proin non ut pellentesque eget. Turpis interdum urna sagittis, id
                                    vestibulum in. Suscipit lectus bibendum arcu sit orci.
                                    Blandit ut sit id lectus sit amet, elementum. Egestas pellentesque diam duis
                                    molestie sit. Ornare interdum interdum facilisi tellus. Magna morbi magna nunc in
                                    dignissim lobortis imperdiet lobortis turpis. In massa ipsum in nulla at
                                    scelerisque. Eget praesent sollicitudin netus condimentum maecenas at lorem. Nam
                                    magna quis tellus fusce pretium quis diam dictum. Sit turpis tristique ut faucibus.
                                    Nulla sagittis,
                                </p>
                            </div>
                        </div>
                        <div class="story-mid-group-right">
                            <iframe src="https://www.youtube.com/embed/4SvNZ8QCPZ8" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="story-bot">
                    <figure class="story-bot-floatingimg-1">
                        <img src="/img/index/story/botfloatingimg1.png" alt="">
                    </figure>
                    <figure class="story-bot-floatingimg-2">
                        <img src="/img/index/story/botfloatingimg2.png" alt="">
                    </figure>
                    <div class="story-bot-group">
                        <div class="story-bot-group-title">
                            <p>แบนในเครือ วินน์ซอฟต์</p>
                        </div>
                        <div class="story-bot-group-description">
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <div class="story-bot-group-brand">
                            <figure>
                                <img src="/img/index/story/brand1.png" alt="">
                                <img src="/img/index/story/shadow.png" alt="">
                            </figure>
                            <figure>
                                <img src="/img/index/story/brand2.png" alt="">
                                <img src="/img/index/story/shadow.png" alt="">
                            </figure>
                            <figure>
                                <img src="/img/index/story/brand3.png" alt="">
                                <img src="/img/index/story/shadow.png" alt="">
                            </figure>
                            <figure>
                                <img src="/img/index/story/brand4.png" alt="">
                                <img src="/img/index/story/shadow.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="indexService">
            <div class="service">
                <div class="service-top">
                    <figure class="service-top-floatingimg-1">
                        <img src="/img/index/service/topbgtopleft.png" alt="">
                    </figure>
                    <figure class="service-top-floatingimg-2">
                        <img src="/img/index/service/topbgbotleft.png" alt="">
                    </figure>
                    <div class="service-top-header">
                        <div class="service-top-header-title">
                            <p>บริการที่เหมาะกับกับคุณ หรือ องค์กร</p>
                        </div>
                        <div class="service-top-header-description">
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="swiper service-top-swiper">
                        <div class="swiper-wrapper service-top-wrapper">
                            <div class="swiper-slide service-top-slide">
                                <div class="service-top-swiper-group">
                                    <figure class="service-top-swiper-group-floatingimg-1">
                                        <img src="/img/index/service/laundry.png" alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-floatingimg-2">
                                        <img src="/img/index/service/vending.png" alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-image">
                                        <img src="/img/index/service/service1.png" alt="">
                                    </figure>
                                    <div class="service-top-swiper-group-title">
                                        <p>นักลงทุน</p>
                                    </div>
                                    <div class="service-top-swiper-group-line"></div>
                                    <div class="service-top-swiper-group-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus vel morbi
                                            venenatis tortor. Vestibulum</p>
                                    </div>
                                    <div class="service-top-swiper-group-detail">
                                        <button type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide service-top-slide">
                                <div class="service-top-swiper-group">
                                    <figure class="service-top-swiper-group-floatingimg-1">
                                        <img src="/img/index/service/laundry.png" alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-floatingimg-2">
                                        <img src="/img/index/service/vending.png" alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-image">
                                        <img src="/img/index/service/service1.png"alt="">
                                    </figure>
                                    <div class="service-top-swiper-group-title">
                                        <p>เจ้าของธุรกิจ</p>
                                    </div>
                                    <div class="service-top-swiper-group-line"></div>
                                    <div class="service-top-swiper-group-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus vel morbi
                                            venenatis tortor. Vestibulum</p>
                                    </div>
                                    <div class="service-top-swiper-group-detail">
                                        <button type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide service-top-slide">
                                <div class="service-top-swiper-group">
                                    <figure class="service-top-swiper-group-floatingimg-1">
                                        <img src="/img/index/service/laundry.png" alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-floatingimg-2">
                                        <img src="/img/index/service/vending.png" alt="">
                                    </figure>
                                    <figure class="service-top-swiper-group-image">
                                        <img src="/img/index/service/service1.png" alt="">
                                    </figure>
                                    <div class="service-top-swiper-group-title">
                                        <p>ตัวแทนจำหน่าย</p>
                                    </div>
                                    <div class="service-top-swiper-group-line"></div>
                                    <div class="service-top-swiper-group-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus vel morbi
                                            venenatis tortor. Vestibulum</p>
                                    </div>
                                    <div class="service-top-swiper-group-detail">
                                        <button type="button">Detail</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination" id="servicePagination"></div>
                    </div>
                </div>
                <div class="service-bot">
                    <figure class="service-bot-floatingimg-1">
                        <img src="/img/index/service/botbgtopleft.png" alt="">
                    </figure>
                    <figure class="service-bot-floatingimg-2">
                        <img src="/img/index/service/botbgbotright.png" alt="">
                    </figure>
                    <div class="service-bot-group">
                        <div class="service-bot-group-left">
                            <div class="service-bot-group-left-title">
                                <p>ลงทุนในแฟรนไชส์มานามิ</p>
                            </div>
                            <div class="service-bot-group-left-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec augue quis vitae mi
                                    enim.
                                    Nunc nec volutpat dui neque. Ornare et varius vitae sit non. Facilisi tristique
                                    nulla
                                    proin non ut pellentesque eget. Turpis interdum urna sagittis, id vestibulum in.
                                    Suscipit lectus bibendum arcu sit orci.
                                </p>
                            </div>
                            <div class="service-bot-group-left-detail">
                                <button type="button">Detail</button>
                            </div>
                        </div>
                        <figure class="service-bot-group-right">
                            <img src="/img/index/service/manami.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section id="indexAbout">
            <div class="about">
                <div class="about-top">
                    <figure class="about-top-floatingimg">
                        <img src="/img/index/about/topbgtopright.png" alt="">
                    </figure>
                    <div class="about-top-header">
                        <div class="about-top-header-title">
                            <p>ทำไมต้องเลือกเรา</p>
                        </div>
                        <div class="about-top-header-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales morbi semper
                                semper pellentesque vulputate</p>
                        </div>
                    </div>
                    <div class="about-top-group">
                        <div class="about-top-group-left">
                            <div class="about-top-group-left-box">
                                <figure>
                                    <img src="/img/index/about/about1.png" alt="">
                                </figure>
                                <div class="about-top-group-left-box-title">
                                    <p>มีผู้ให้คำปรึกษาตั้งแต่เริ่ม</p>
                                </div>
                                <div class="about-top-group-left-box-line"></div>
                                <div class="about-top-group-left-box-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam </p>
                                </div>
                            </div>
                            <div class="about-top-group-left-box">
                                <figure>
                                    <img src="/img/index/about/about1.png" alt="">
                                </figure>
                                <div class="about-top-group-left-box-title">
                                    <p>มีผู้ให้คำปรึกษาตั้งแต่เริ่ม</p>
                                </div>
                                <div class="about-top-group-left-box-line"></div>
                                <div class="about-top-group-left-box-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam </p>
                                </div>
                            </div>
                            <div class="about-top-group-left-box">
                                <figure>
                                    <img src="/img/index/about/about1.png" alt="">
                                </figure>
                                <div class="about-top-group-left-box-title">
                                    <p>มีผู้ให้คำปรึกษาตั้งแต่เริ่ม</p>
                                </div>
                                <div class="about-top-group-left-box-line"></div>
                                <div class="about-top-group-left-box-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam </p>
                                </div>
                            </div>
                            <div class="about-top-group-left-box">
                                <figure>
                                    <img src="/img/index/about/about1.png" alt="">
                                </figure>
                                <div class="about-top-group-left-box-title">
                                    <p>มีผู้ให้คำปรึกษาตั้งแต่เริ่ม</p>
                                </div>
                                <div class="about-top-group-left-box-line"></div>
                                <div class="about-top-group-left-box-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam </p>
                                </div>
                            </div>
                        </div>
                        <figure class="about-top-group-right">
                            <img src="/img/index/about/presenter.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="about-bot">
                    <figure class="about-bot-floatingimg">
                        <img src="/img/index/about/botbgleft.png" alt="">
                    </figure>
                    <div class="about-bot-header">
                        <div class="about-bot-header-title">
                            <p>ทีมงานมืออาชีพ</p>
                        </div>
                        <div class="about-bot-header-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                    <div class="about-bot-group">
                        <div class="about-bot-group-box">
                            <figure>
                                <img src="/img/index/about/pro1.png" alt="">
                            </figure>
                            <div class="about-bot-group-box-title">
                                <p>Mr.Tanakar sugkato</p>
                            </div>
                            <div class="about-bot-group-box-description">
                                <p>Project manager</p>
                            </div>
                        </div>
                        <div class="about-bot-group-box">
                            <figure>
                                <img src="/img/index/about/pro2.png" alt="">
                            </figure>
                            <div class="about-bot-group-box-title">
                                <p>Mr.Kailuck pukawat</p>
                            </div>
                            <div class="about-bot-group-box-description">
                                <p>Developerr</p>
                            </div>
                        </div>
                        <div class="about-bot-group-box">
                            <figure>
                                <img src="/img/index/about/pro3.png" alt="">
                            </figure>
                            <div class="about-bot-group-box-title">
                                <p>Mr.Gantakai lajitama</p>
                            </div>
                            <div class="about-bot-group-box-description">
                                <p>SEO Reader</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="indexNews">
            <div class="news">
                <div class="news-top">
                    <div class="news-top-header">
                        <div class="news-top-header-title">
                            <p>ข่าวสารและโปรโมชั่น</p>
                        </div>
                        <div class="news-top-header-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                    <div class="news-top-group">
                        <div class="news-top-group-box">
                            <div class="news-top-group-box-top">
                                <div class="news-top-group-box-top-date">
                                    <p>26 June 22</p>
                                </div>
                                <figure>
                                    <img src="/img/index/news/share.png" alt="">
                                </figure>
                            </div>
                            <div class="news-top-group-box-bot">
                                <div class="news-top-group-box-bot-title">
                                    <p>Vulputate odio eniba scelerisque</p>
                                </div>
                                <div class="news-top-group-box-bot-description">
                                    <p>Lorem ipsum dolor siamet... </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-top-group-box">
                            <div class="news-top-group-box-top">
                                <div class="news-top-group-box-top-date">
                                    <p>26 June 22</p>
                                </div>
                                <figure>
                                    <img src="/img/index/news/share.png" alt="">
                                </figure>
                            </div>
                            <div class="news-top-group-box-bot">
                                <div class="news-top-group-box-bot-title">
                                    <p>Vulputate odio eniba scelerisque</p>
                                </div>
                                <div class="news-top-group-box-bot-description">
                                    <p>Lorem ipsum dolor siamet... </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-top-group-box">
                            <div class="news-top-group-box-top">
                                <div class="news-top-group-box-top-date">
                                    <p>26 June 22</p>
                                </div>
                                <figure>
                                    <img src="/img/index/news/share.png" alt="">
                                </figure>
                            </div>
                            <div class="news-top-group-box-bot">
                                <div class="news-top-group-box-bot-title">
                                    <p>Vulputate odio eniba scelerisque</p>
                                </div>
                                <div class="news-top-group-box-bot-description">
                                    <p>Lorem ipsum dolor siamet... </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-top-group-box">
                            <div class="news-top-group-box-top">
                                <div class="news-top-group-box-top-date">
                                    <p>26 June 22</p>
                                </div>
                                <figure>
                                    <img src="/img/index/news/share.png" alt="">
                                </figure>
                            </div>
                            <div class="news-top-group-box-bot">
                                <div class="news-top-group-box-bot-title">
                                    <p>Vulputate odio eniba scelerisque</p>
                                </div>
                                <div class="news-top-group-box-bot-description">
                                    <p>Lorem ipsum dolor siamet... </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-top-group-box">
                            <div class="news-top-group-box-top">
                                <div class="news-top-group-box-top-date">
                                    <p>26 June 22</p>
                                </div>
                                <figure>
                                    <img src="/img/index/news/share.png" alt="">
                                </figure>
                            </div>
                            <div class="news-top-group-box-bot">
                                <div class="news-top-group-box-bot-title">
                                    <p>Vulputate odio eniba scelerisque</p>
                                </div>
                                <div class="news-top-group-box-bot-description">
                                    <p>Lorem ipsum dolor siamet... </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-top-group-box">
                            <div class="news-top-group-box-top">
                                <div class="news-top-group-box-top-date">
                                    <p>26 June 22</p>
                                </div>
                                <figure>
                                    <img src="/img/index/news/share.png" alt="">
                                </figure>
                            </div>
                            <div class="news-top-group-box-bot">
                                <div class="news-top-group-box-bot-title">
                                    <p>Vulputate odio eniba scelerisque</p>
                                </div>
                                <div class="news-top-group-box-bot-description">
                                    <p>Lorem ipsum dolor siamet... </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-top-detail">
                        <button type="button">More</button>
                    </div>
                </div>
                <div class="news-bot">
                    <figure class="news-bot-floatingimg-1">
                        <img src="/img/index/news/botbgtopleft.png" alt="">
                    </figure>
                    <figure class="news-bot-floatingimg-2">
                        <img src="/img/index/news/botbgbotright.png" alt="">
                    </figure>
                    <div class="news-bot-header">
                        <div class="news-bot-header-title">
                            <p>สินค้าในแบรนด์</p>
                        </div>
                        <div class="news-bot-header-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit nunc consequat cursus.
                                Sapien sed amet nisi, venenatis nunc fermentum. Aliquam, non leo orci netus risus. At
                                facilisi nec quis elit leo quam scelerisque.
                            </p>
                        </div>
                    </div>
                    <div class="swiper news-bot-swiper">
                        <div class="swiper-wrapper news-bot-swiper-wrapper">
                            <div class="swiper-slide news-bot-swiper-slide">
                                <div class="news-bot-swiper-group">
                                    <figure class="news-bot-swiper-group-floatingimg-1">
                                        <img src="/img/index/news/pbotbgtopleft.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-2">
                                        <img src="/img/index/news/pbotbgbotright.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-3">
                                        <img src="/img/index/news/banner.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-image">
                                        <img src="/img/index/news/product.png" alt="">
                                    </figure>
                                    <div class="news-bot-swiper-group-box">
                                        <div class="news-bot-swiper-group-box-title">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="news-bot-swiper-group-box-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales
                                                morbi semper semper pellentesque vulputate</p>
                                        </div>
                                        <div class="news-bot-swiper-group-box-detail">
                                            <button type="button">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide news-bot-swiper-slide">
                                <div class="news-bot-swiper-group">
                                    <figure class="news-bot-swiper-group-floatingimg-1">
                                        <img src="/img/index/news/pbotbgtopleft.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-2">
                                        <img src="/img/index/news/pbotbgbotright.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-3">
                                        <img src="/img/index/news/banner.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-image">
                                        <img src="/img/index/news/product.png" alt="">
                                    </figure>
                                    <div class="news-bot-swiper-group-box">
                                        <div class="news-bot-swiper-group-box-title">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="news-bot-swiper-group-box-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales
                                                morbi semper semper pellentesque vulputate</p>
                                        </div>
                                        <div class="news-bot-swiper-group-box-detail">
                                            <button type="button">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide news-bot-swiper-slide">
                                <div class="news-bot-swiper-group">
                                    <figure class="news-bot-swiper-group-floatingimg-1">
                                        <img src="/img/index/news/pbotbgtopleft.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-2">
                                        <img src="/img/index/news/pbotbgbotright.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-floatingimg-3">
                                        <img src="/img/index/news/banner.png" alt="">
                                    </figure>
                                    <figure class="news-bot-swiper-group-image">
                                        <img src="/img/index/news/product.png" alt="">
                                    </figure>
                                    <div class="news-bot-swiper-group-box">
                                        <div class="news-bot-swiper-group-box-title">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="news-bot-swiper-group-box-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales
                                                morbi semper semper pellentesque vulputate</p>
                                        </div>
                                        <div class="news-bot-swiper-group-box-detail">
                                            <button type="button">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>
