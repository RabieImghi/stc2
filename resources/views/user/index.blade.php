@extends('user.layout')
@section('title', 'Home')
@section('linksStyle')
    <link rel="stylesheet" href="./assets/index_files/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/index_files/aos.css">
    <link rel="stylesheet" href="./assets/index_files/all.min.css">
    <link rel="stylesheet" href="./assets/index_files/lightcase.css">
    <link rel="stylesheet" href="./assets/index_files/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/index_files/style.css">
@endsection

@section('content')
    <section id="home" class="banner banner--overlay" style="background-image: url(assets/images/banner/bg.jpg);">
        <div class="container">
            <div class="banner__wrapper">
                <div class="banner__content text-center aos-init aos-animate" data-aos="zoom-in"
                    data-aos-duration="900">
                    <h1>envato meetup 2023</h1>
                    <h3>12 Dec In New York</h3>
                    <div class="banner__bottom">
                        <ul class="countdown justify-content-center" data-date="July 25, 2023 21:14:01" id="countdown">
                            <li class="countdown__item">
                                <h3 class="countdown__number color--theme-color countdown__number-days">0</h3>
                                <p class="countdown__text">Days</p>
                            </li>
                            <li class="countdown__item">
                                <h3 class="countdown__number color--theme-color countdown__number-hours">0</h3>
                                <p class="countdown__text">Hours</p>
                            </li>
                            <li class="countdown__item">
                                <h3 class="countdown__number color--theme-color countdown__number-minutes">0</h3>
                                <p class="countdown__text">Min</p>
                            </li>
                            <li class="countdown__item">
                                <h3 class="countdown__number color--theme-color countdown__number-seconds">0</h3>
                                <p class="countdown__text">Sec</p>
                            </li>
                        </ul>
                    </div>
                    <a href="https://thetork.com/demos/html/uevent/index-single.html#"
                        class="default-btn move-right"><span>Get Ticket <svg class="svg-inline--fa fa-arrow-right"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="register register--uplifted aos-init aos-animate" data-aos="fade-up" data-aos-duration="900"
        id="register">
        <div class="container">
            <div class="register__wrapper">
                <form action="https://thetork.com/demos/html/uevent/index-single.html#" class="register__form">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-3 col-sm-6">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <input type="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="https://thetork.com/demos/html/uevent/signup.html"
                                class="default-btn  default-btn--secondary move-right"><span>Register
                                    <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="arrow-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="about padding-top padding-bottom">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="about__thumb aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <img src="./assets/index_files/1.png" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content aos-init" data-aos="fade-up" data-aos-duration="2000">
                            <p class="subtitle">The Story</p>
                            <h2>About Event</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quisquam ea
                                deserunt laboriosam officia minus alias ipsa, est hic ipsum labore vel soluta officiis
                                facilis nostrum quo cum itaque tempora? Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Vitae laborum earum perferendis. Voluptatum odit maxime non maiores
                                adipisci consequuntur quaerat?</p>

                            <div class="about__content-feature">
                                <h5>Event Features</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi odio iusto atque
                                    reiciendis iure consequatur quidem sapiente deleniti, exercitationem cumque aperiam
                                    vel provident sunt magni, ad facilis voluptatum nulla deserunt?</p>

                                <div class="btn-group">
                                    <a href="https://thetork.com/demos/html/uevent/index-single.html#"
                                        class="default-btn default-btn--secondary move-top"><span>Get
                                            Ticket</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature padding-top padding-bottom bg--white" id="feature">
        <div class="container">
            <div class="section-header text-center aos-init" data-aos="fade-up" data-aos-duration="900">
                <p class="subtitle">Features</p>
                <h2>What We Offer?</h2>
            </div>

            <div class="feature__wrapper">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature__item aos-init" data-aos="fade-up" data-aos-duration="900">
                            <div class="feature__item-inner">
                                <div class="feature__item-thumb">
                                    <div class="icon">
                                        <svg class="svg-inline--fa fa-microphone" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="microphone" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M192 352c53.03 0 96-42.97 96-96v-160c0-53.03-42.97-96-96-96s-96 42.97-96 96v160C96 309 138.1 352 192 352zM344 192C330.7 192 320 202.7 320 215.1V256c0 73.33-61.97 132.4-136.3 127.7c-66.08-4.169-119.7-66.59-119.7-132.8L64 215.1C64 202.7 53.25 192 40 192S16 202.7 16 215.1v32.15c0 89.66 63.97 169.6 152 181.7V464H128c-18.19 0-32.84 15.18-31.96 33.57C96.43 505.8 103.8 512 112 512h160c8.222 0 15.57-6.216 15.96-14.43C288.8 479.2 274.2 464 256 464h-40v-33.77C301.7 418.5 368 344.9 368 256V215.1C368 202.7 357.3 192 344 192z">
                                            </path>
                                        </svg><!-- <i class="fa-solid fa-microphone"></i> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                                <div class="feature__item-content text-center">
                                    <h4>Weclome Speech </h4>
                                    <div class="feature__item-text">
                                        <p>Lorem ipsum dolor siteryl amet, conseco tetur adip isic sing elit, sed domerx
                                            eius mod tempor </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature__item aos-init" data-aos="fade-up" data-aos-duration="900"
                            data-aos-delay="100">
                            <div class="feature__item-inner">
                                <div class="feature__item-thumb">
                                    <div class="icon">
                                        <svg class="svg-inline--fa fa-angellist" aria-hidden="true" focusable="false"
                                            data-prefix="fab" data-icon="angellist" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M347.1 215.4c11.7-32.6 45.4-126.9 45.4-157.1 0-26.6-15.7-48.9-43.7-48.9-44.6 0-84.6 131.7-97.1 163.1C242 144 196.6 0 156.6 0c-31.1 0-45.7 22.9-45.7 51.7 0 35.3 34.2 126.8 46.6 162-6.3-2.3-13.1-4.3-20-4.3-23.4 0-48.3 29.1-48.3 52.6 0 8.9 4.9 21.4 8 29.7-36.9 10-51.1 34.6-51.1 71.7C46 435.6 114.4 512 210.6 512c118 0 191.4-88.6 191.4-202.9 0-43.1-6.9-82-54.9-93.7zM311.7 108c4-12.3 21.1-64.3 37.1-64.3 8.6 0 10.9 8.9 10.9 16 0 19.1-38.6 124.6-47.1 148l-34-6 33.1-93.7zM142.3 48.3c0-11.9 14.5-45.7 46.3 47.1l34.6 100.3c-15.6-1.3-27.7-3-35.4 1.4-10.9-28.8-45.5-119.7-45.5-148.8zM140 244c29.3 0 67.1 94.6 67.1 107.4 0 5.1-4.9 11.4-10.6 11.4-20.9 0-76.9-76.9-76.9-97.7 .1-7.7 12.7-21.1 20.4-21.1zm184.3 186.3c-29.1 32-66.3 48.6-109.7 48.6-59.4 0-106.3-32.6-128.9-88.3-17.1-43.4 3.8-68.3 20.6-68.3 11.4 0 54.3 60.3 54.3 73.1 0 4.9-7.7 8.3-11.7 8.3-16.1 0-22.4-15.5-51.1-51.4-29.7 29.7 20.5 86.9 58.3 86.9 26.1 0 43.1-24.2 38-42 3.7 0 8.3 .3 11.7-.6 1.1 27.1 9.1 59.4 41.7 61.7 0-.9 2-7.1 2-7.4 0-17.4-10.6-32.6-10.6-50.3 0-28.3 21.7-55.7 43.7-71.7 8-6 17.7-9.7 27.1-13.1 9.7-3.7 20-8 27.4-15.4-1.1-11.2-5.7-21.1-16.9-21.1-27.7 0-120.6 4-120.6-39.7 0-6.7 .1-13.1 17.4-13.1 32.3 0 114.3 8 138.3 29.1 18.1 16.1 24.3 113.2-31 174.7zm-98.6-126c9.7 3.1 19.7 4 29.7 6-7.4 5.4-14 12-20.3 19.1-2.8-8.5-6.2-16.8-9.4-25.1z">
                                            </path>
                                        </svg><!-- <i class="fab fa-angellist"></i> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                                <div class="feature__item-content text-center">
                                    <h4> Successfull Story</h4>
                                    <div class="feature__item-text">
                                        <p>Lorem ipsum dolor siteryl amet, conseco tetur adip isic sing elit, sed domerx
                                            eius mod tempor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature__item aos-init" data-aos="fade-up" data-aos-duration="900"
                            data-aos-delay="200">
                            <div class="feature__item-inner">
                                <div class="feature__item-thumb">
                                    <div class="icon">
                                        <svg class="svg-inline--fa fa-connectdevelop" aria-hidden="true"
                                            focusable="false" data-prefix="fab" data-icon="connectdevelop" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M550.5 241l-50.09-86.79c1.071-2.142 1.875-4.553 1.875-7.232 0-8.036-6.696-14.73-14.73-15l-55.45-95.89c.536-1.607 1.071-3.214 1.071-4.821 0-8.571-6.964-15.27-15.27-15.27-4.821 0-8.839 2.143-11.79 5.625H299.5C296.8 18.14 292.8 16 288 16s-8.839 2.143-11.52 5.625H170.4C167.5 18.14 163.4 16 158.6 16c-8.303 0-15.27 6.696-15.27 15.27 0 1.607 .536 3.482 1.072 4.821l-55.98 97.23c-5.356 2.41-9.107 7.5-9.107 13.66 0 .535 .268 1.071 .268 1.607l-53.3 92.14c-7.232 1.339-12.59 7.5-12.59 15 0 7.232 5.089 13.39 12.05 15l55.18 95.36c-.536 1.607-.804 2.946-.804 4.821 0 7.232 5.089 13.39 12.05 14.73l51.7 89.73c-.536 1.607-1.071 3.482-1.071 5.357 0 8.571 6.964 15.27 15.27 15.27 4.821 0 8.839-2.143 11.52-5.357h106.9C279.2 493.9 283.4 496 288 496s8.839-2.143 11.52-5.357h107.1c2.678 2.946 6.696 4.821 10.98 4.821 8.571 0 15.27-6.964 15.27-15.27 0-1.607-.267-2.946-.803-4.285l51.7-90.27c6.964-1.339 12.05-7.5 12.05-14.73 0-1.607-.268-3.214-.804-4.821l54.91-95.36c6.964-1.339 12.32-7.5 12.32-15-.002-7.232-5.092-13.39-11.79-14.73zM153.5 450.7l-43.66-75.8h43.66v75.8zm0-83.84h-43.66c-.268-1.071-.804-2.142-1.339-3.214l44.1-47.41v50.62zm0-62.41l-50.36 53.3c-1.339-.536-2.679-1.34-4.018-1.607L43.45 259.8c.535-1.339 .535-2.679 .535-4.018s0-2.41-.268-3.482l51.97-90c2.679-.268 5.357-1.072 7.768-2.679l50.09 51.97v92.95zm0-102.3l-45.8-47.41c1.339-2.143 2.143-4.821 2.143-7.767 0-.268-.268-.804-.268-1.072l43.93-15.8v72.05zm0-80.63l-43.66 15.8 43.66-75.54v59.73zm326.5 39.11l.804 1.339L445.5 329.1l-63.75-67.23 98.04-101.5 .268 .268zM291.8 355.1l11.52 11.79H280.5l11.25-11.79zm-.268-11.25l-83.3-85.45 79.55-84.38 83.04 87.59-79.29 82.23zm5.357 5.893l79.29-82.23 67.5 71.25-5.892 28.13H313.7l-16.88-17.14zM410.4 44.39c1.071 .536 2.142 1.072 3.482 1.34l57.86 100.7v.536c0 2.946 .803 5.624 2.143 7.767L376.4 256l-83.04-87.59L410.4 44.39zm-9.107-2.143L287.7 162.5l-57.05-60.27 166.3-60h4.287zm-123.5 0c2.678 2.678 6.16 4.285 10.18 4.285s7.5-1.607 10.18-4.285h75L224.8 95.82 173.9 42.25h103.9zm-116.2 5.625l1.071-2.142a33.83 33.83 0 0 0 2.679-.804l51.16 53.84-54.91 19.82V47.88zm0 79.29l60.8-21.96 59.73 63.21-79.55 84.11-40.98-42.05v-83.3zm0 92.68L198 257.6l-36.43 38.3v-76.07zm0 87.86l42.05-44.46 82.77 85.98-17.14 17.68H161.6v-59.2zm6.964 162.1c-1.607-1.607-3.482-2.678-5.893-3.482l-1.071-1.607v-89.73h99.91l-91.61 94.82h-1.339zm129.9 0c-2.679-2.41-6.428-4.285-10.45-4.285s-7.767 1.875-10.45 4.285h-96.43l91.61-94.82h38.3l91.61 94.82H298.4zm120-11.79l-4.286 7.5c-1.339 .268-2.41 .803-3.482 1.339l-89.2-91.88h114.4l-17.41 83.04zm12.86-22.23l12.86-60.8h21.96l-34.82 60.8zm34.82-68.84h-20.36l4.553-21.16 17.14 18.21c-.535 .803-1.071 1.874-1.339 2.946zm66.16-107.4l-55.45 96.7c-1.339 .535-2.679 1.071-4.018 1.874l-20.63-21.96 34.55-163.9 45.8 79.29c-.267 1.339-.803 2.678-.803 4.285 0 1.339 .268 2.411 .536 3.75z">
                                            </path>
                                        </svg><!-- <i class="fab fa-connectdevelop"></i> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                                <div class="feature__item-content text-center">
                                    <h4>Quize Play</h4>
                                    <div class="feature__item-text">
                                        <p>Lorem ipsum dolor siteryl amet, conseco tetur adip isic sing elit, sed domerx
                                            eius mod tempor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature__item aos-init" data-aos="fade-up" data-aos-duration="900"
                            data-aos-delay="300">
                            <div class="feature__item-inner">
                                <div class="feature__item-thumb">
                                    <div class="icon">
                                        <svg class="svg-inline--fa fa-connectdevelop" aria-hidden="true"
                                            focusable="false" data-prefix="fab" data-icon="connectdevelop" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M550.5 241l-50.09-86.79c1.071-2.142 1.875-4.553 1.875-7.232 0-8.036-6.696-14.73-14.73-15l-55.45-95.89c.536-1.607 1.071-3.214 1.071-4.821 0-8.571-6.964-15.27-15.27-15.27-4.821 0-8.839 2.143-11.79 5.625H299.5C296.8 18.14 292.8 16 288 16s-8.839 2.143-11.52 5.625H170.4C167.5 18.14 163.4 16 158.6 16c-8.303 0-15.27 6.696-15.27 15.27 0 1.607 .536 3.482 1.072 4.821l-55.98 97.23c-5.356 2.41-9.107 7.5-9.107 13.66 0 .535 .268 1.071 .268 1.607l-53.3 92.14c-7.232 1.339-12.59 7.5-12.59 15 0 7.232 5.089 13.39 12.05 15l55.18 95.36c-.536 1.607-.804 2.946-.804 4.821 0 7.232 5.089 13.39 12.05 14.73l51.7 89.73c-.536 1.607-1.071 3.482-1.071 5.357 0 8.571 6.964 15.27 15.27 15.27 4.821 0 8.839-2.143 11.52-5.357h106.9C279.2 493.9 283.4 496 288 496s8.839-2.143 11.52-5.357h107.1c2.678 2.946 6.696 4.821 10.98 4.821 8.571 0 15.27-6.964 15.27-15.27 0-1.607-.267-2.946-.803-4.285l51.7-90.27c6.964-1.339 12.05-7.5 12.05-14.73 0-1.607-.268-3.214-.804-4.821l54.91-95.36c6.964-1.339 12.32-7.5 12.32-15-.002-7.232-5.092-13.39-11.79-14.73zM153.5 450.7l-43.66-75.8h43.66v75.8zm0-83.84h-43.66c-.268-1.071-.804-2.142-1.339-3.214l44.1-47.41v50.62zm0-62.41l-50.36 53.3c-1.339-.536-2.679-1.34-4.018-1.607L43.45 259.8c.535-1.339 .535-2.679 .535-4.018s0-2.41-.268-3.482l51.97-90c2.679-.268 5.357-1.072 7.768-2.679l50.09 51.97v92.95zm0-102.3l-45.8-47.41c1.339-2.143 2.143-4.821 2.143-7.767 0-.268-.268-.804-.268-1.072l43.93-15.8v72.05zm0-80.63l-43.66 15.8 43.66-75.54v59.73zm326.5 39.11l.804 1.339L445.5 329.1l-63.75-67.23 98.04-101.5 .268 .268zM291.8 355.1l11.52 11.79H280.5l11.25-11.79zm-.268-11.25l-83.3-85.45 79.55-84.38 83.04 87.59-79.29 82.23zm5.357 5.893l79.29-82.23 67.5 71.25-5.892 28.13H313.7l-16.88-17.14zM410.4 44.39c1.071 .536 2.142 1.072 3.482 1.34l57.86 100.7v.536c0 2.946 .803 5.624 2.143 7.767L376.4 256l-83.04-87.59L410.4 44.39zm-9.107-2.143L287.7 162.5l-57.05-60.27 166.3-60h4.287zm-123.5 0c2.678 2.678 6.16 4.285 10.18 4.285s7.5-1.607 10.18-4.285h75L224.8 95.82 173.9 42.25h103.9zm-116.2 5.625l1.071-2.142a33.83 33.83 0 0 0 2.679-.804l51.16 53.84-54.91 19.82V47.88zm0 79.29l60.8-21.96 59.73 63.21-79.55 84.11-40.98-42.05v-83.3zm0 92.68L198 257.6l-36.43 38.3v-76.07zm0 87.86l42.05-44.46 82.77 85.98-17.14 17.68H161.6v-59.2zm6.964 162.1c-1.607-1.607-3.482-2.678-5.893-3.482l-1.071-1.607v-89.73h99.91l-91.61 94.82h-1.339zm129.9 0c-2.679-2.41-6.428-4.285-10.45-4.285s-7.767 1.875-10.45 4.285h-96.43l91.61-94.82h38.3l91.61 94.82H298.4zm120-11.79l-4.286 7.5c-1.339 .268-2.41 .803-3.482 1.339l-89.2-91.88h114.4l-17.41 83.04zm12.86-22.23l12.86-60.8h21.96l-34.82 60.8zm34.82-68.84h-20.36l4.553-21.16 17.14 18.21c-.535 .803-1.071 1.874-1.339 2.946zm66.16-107.4l-55.45 96.7c-1.339 .535-2.679 1.071-4.018 1.874l-20.63-21.96 34.55-163.9 45.8 79.29c-.267 1.339-.803 2.678-.803 4.285 0 1.339 .268 2.411 .536 3.75z">
                                            </path>
                                        </svg><!-- <i class="fab fa-connectdevelop"></i> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                                <div class="feature__item-content text-center">
                                    <h4>Envato Award</h4>
                                    <div class="feature__item-text">
                                        <p>Lorem ipsum dolor siteryl amet, conseco tetur adip isic sing elit, sed domerx
                                            eius mod tempor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="event-access padding-top padding-bottom">
        <div class="mockup aos-init" data-aos="fade-up-left" data-aos-duration="900">
            <img class="mok-img" src="./assets/index_files/mobile.png" alt="">
        </div>
        <div class="container">
            <div class="contact__wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-access-content aos-init" data-aos="fade-right" data-aos-duration="900">
                            <h2>You can access us from mobile !</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi
                                dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci
                                tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            </p>
                            <a href="https://thetork.com/demos/html/uevent/index-single.html#"
                                class="default-btn move-right"><span>Get Ticket <svg
                                        class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="arrow-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="schedule padding-top padding-bottom" id="schedule">
        <div class="container">
            <div class="section-header text-center aos-init" data-aos="fade-up" data-aos-duration="900">
                <p class="subtitle">Monday 10AM - 06PM</p>
                <h2>Events Schdule</h2>
            </div>
            <div class="schedule__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="schedule__item aos-init" data-aos="fade-up-left" data-aos-duration="1000">
                            <div class="schedule__item-inner">
                                <div class="schedule__item-time">
                                    <h6>10am - 12pm</h6>
                                </div>
                                <div class="schedule__item-content">
                                    <h4>Consectetur Adipisicing elit Eiusmod</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat perferendis
                                        officiis quae eius delectus, aliquid deserunt, repudiandae consectetur corporis,
                                        molestiae ipsam. Aut dolore iure excepturi!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-6">
                        <div class="schedule__item schedule__item--right aos-init" data-aos="fade-up-right"
                            data-aos-duration="1000">
                            <div class="schedule__item-inner">
                                <div class="schedule__item-time">
                                    <h6>12pm - 2pm</h6>
                                </div>
                                <div class="schedule__item-content">
                                    <h4>Consectetur Adipisicing elit Eiusmod</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat perferendis
                                        officiis quae eius delectus, aliquid deserunt, repudiandae consectetur corporis,
                                        molestiae ipsam. Aut dolore iure excepturi!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="schedule__item aos-init" data-aos="fade-up-left" data-aos-duration="1000">
                            <div class="schedule__item-inner">
                                <div class="schedule__item-time">
                                    <h6>2pm - 4pm</h6>
                                </div>
                                <div class="schedule__item-content">
                                    <h4>Consectetur Adipisicing elit Eiusmod</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat perferendis
                                        officiis quae eius delectus, aliquid deserunt, repudiandae consectetur corporis,
                                        molestiae ipsam. Aut dolore iure excepturi!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-6">
                        <div class="schedule__item schedule__item--right aos-init" data-aos="fade-up-right"
                            data-aos-duration="1000">
                            <div class="schedule__item-inner">
                                <div class="schedule__item-time">
                                    <h6>4pm - 6pm</h6>
                                </div>
                                <div class="schedule__item-content">
                                    <h4>Consectetur Adipisicing elit Eiusmod</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat perferendis
                                        officiis quae eius delectus, aliquid deserunt, repudiandae consectetur corporis,
                                        molestiae ipsam. Aut dolore iure excepturi!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing padding-top padding-bottom" id="pricing">
        <div class="container">
            <div class="section-header text-center aos-init" data-aos="fade-up" data-aos-duration="900">
                <p class="subtitle">Choose the Best one</p>
                <h2>Pricing Plan</h2>
            </div>
            <div class="pricing__wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="pricing__item aos-init" data-aos="fade-up" data-aos-duration="900">
                            <div class="pricing__inner">
                                <div class="pricing__head">
                                    <h4>$10</h4>
                                </div>
                                <div class="pricing__body">
                                    <h4>Basic</h4>
                                    <ul>
                                        <li>
                                            <p class="pricing__title"> <span>
                                                    <svg class="svg-inline--fa fa-circle-check" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="circle-check"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com -->
                                                </span> Unlimited Coffee </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"><span>
                                                    <svg class="svg-inline--fa fa-circle-xmark" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="circle-xmark"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-xmark"></i> Font Awesome fontawesome.com -->
                                                </span> One Tshirt </p>
                                        </li>

                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-xmark"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-xmark" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-xmark"></i> Font Awesome fontawesome.com --></span>Quize
                                                Contest </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-xmark"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-xmark" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-xmark"></i> Font Awesome fontawesome.com --></span>
                                                Envato Sticker </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing__footer">
                                    <a href="https://thetork.com/demos/html/uevent/login.html"
                                        class="default-btn move-top"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing__item aos-init" data-aos="fade-up" data-aos-duration="900"
                            data-aos-delay="100">
                            <div class="pricing__inner">
                                <div class="pricing__head">
                                    <h4>$20</h4>
                                </div>
                                <div class="pricing__body">
                                    <h4>Bronze</h4>
                                    <ul>
                                        <li>
                                            <p class="pricing__title"><span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>
                                                One Tshirt </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>Unlimited
                                                Coffee
                                            </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-xmark"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-xmark" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-xmark"></i> Font Awesome fontawesome.com --></span>Quize
                                                Contest </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-xmark"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-xmark" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-xmark"></i> Font Awesome fontawesome.com --></span>
                                                Envato Sticker </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing__footer">
                                    <a href="https://thetork.com/demos/html/uevent/login.html"
                                        class="default-btn move-top"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing__item aos-init" data-aos="fade-up" data-aos-duration="900"
                            data-aos-delay="200">
                            <div class="pricing__inner">
                                <div class="pricing__head">
                                    <h4>$30</h4>
                                </div>
                                <div class="pricing__body">
                                    <h4>Gold</h4>
                                    <ul>
                                        <li>
                                            <p class="pricing__title"><span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>
                                                One Tshirt </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>Unlimited
                                                Coffee
                                            </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>Quize
                                                Contest </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-xmark"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-xmark" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-xmark"></i> Font Awesome fontawesome.com --></span>
                                                Envato Sticker </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing__footer">
                                    <a href="https://thetork.com/demos/html/uevent/login.html"
                                        class="default-btn move-top"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing__item aos-init" data-aos="fade-up" data-aos-duration="900"
                            data-aos-delay="300">
                            <div class="pricing__inner">
                                <div class="pricing__head">
                                    <h4>$40</h4>
                                </div>
                                <div class="pricing__body">
                                    <h4>Platinum</h4>
                                    <ul>
                                        <li>
                                            <p class="pricing__title"><span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>
                                                One Tshirt </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"><span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>
                                                Unlimited Coffee
                                            </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"><span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>
                                                Quize Contest </p>
                                        </li>
                                        <li>
                                            <p class="pricing__title"> <span><svg class="svg-inline--fa fa-circle-check"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="circle-check" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-circle-check"></i> Font Awesome fontawesome.com --></span>
                                                Envato Sticker </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing__footer">
                                    <a href="https://thetork.com/demos/html/uevent/login.html"
                                        class="default-btn move-top"><span>Select Plan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsor padding-top padding-bottom bg--white">
        <div class="container">
            <div class="section-header text-center aos-init" data-aos="fade-up" data-aos-duration="900">
                <p class="subtitle">Meet Our Bakers!</p>
                <h2>Our Sponsors</h2>
            </div>
            <div class="sponsor__wrapper">
                <div class="swiper sponsor__slider mb-4 swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-53450a8a6e3c6281" aria-live="off"
                        style="cursor: grab; transition-duration: 3000ms; transform: translate3d(-2112px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                            aria-label="1 / 5" style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/1(1).png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                            aria-label="2 / 5" style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/2.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/3.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/4.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="4" role="group" aria-label="5 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/5.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/1(1).png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/2.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group"
                            aria-label="3 / 5" style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/3.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" role="group"
                            aria-label="4 / 5" style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/4.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" role="group"
                            aria-label="5 / 5" style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/5.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                            aria-label="1 / 5" style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/1(1).png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                            aria-label="2 / 5" style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/2.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/3.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/4.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="4" role="group" aria-label="5 / 5"
                            style="width: 240px; margin-right: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/5.png" alt="sponsor image"></a>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper sponsor__slider2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl"
                    dir="rtl">
                    <div class="swiper-wrapper" id="swiper-wrapper-610ba9a851f80343b" aria-live="off"
                        style="cursor: grab; transition-duration: 0ms; transform: translate3d(1591.5px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                            aria-label="1 / 4" style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/6.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/7.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 4"
                            style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/8.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/9.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                            style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/6.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group"
                            aria-label="2 / 4" style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/7.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group"
                            aria-label="3 / 4" style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/8.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" role="group"
                            aria-label="4 / 4" style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/9.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                            aria-label="1 / 4" style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/6.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 4"
                            style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/7.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" role="group" aria-label="3 / 4"
                            style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/8.png" alt="sponsor image"></a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" role="group" aria-label="4 / 4"
                            style="width: 241.25px; margin-left: 24px;">
                            <div class="sponsor__item">
                                <a href="https://thetork.com/demos/html/uevent/index-single.html#"><img
                                        src="./assets/index_files/9.png" alt="sponsor image"></a>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="mt-5 text-center">
                    <a class="default-btn move-right" href="https://thetork.com/demos/html/uevent/contact.html">
                        <span>Become a sponsor</span></a>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="faq padding-top padding-bottom">
        <div class="container">
            <div class="section-header text-center aos-init" data-aos="fade-up" data-aos-duration="900">
                <p class="subtitle">Questions &amp; Answers</p>
                <h2>Mostly Asked Questions</h2>
            </div>
            <div class="faq__wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="accordion" id="faqAccordion1">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="accordion__item aos-init" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="accordion__header" id="faq1">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody1"
                                                aria-expanded="false" aria-controls="faqBody1">
                                                What is Uevent <span class="plus-icon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody1" class="accordion-collapse collapse" aria-labelledby="faq1"
                                            data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore in
                                                maiores dignissimos, aut cum unde officiis sed vero fuga enim voluptates
                                                nobis ea porro recusandae facere optio exercitationem perferendis id,
                                                beatae expedita libero, ullam error eveniet! Provident ipsa enim ab.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item aos-init" data-aos="fade-up" data-aos-duration="1100">
                                        <div class="accordion__header" id="faq2">
                                            <button class="accordion__button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faqBody2" aria-expanded="true"
                                                aria-controls="faqBody2">
                                                When we should choose Uevent? <span class="plus-icon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody2" class="accordion-collapse collapse show"
                                            aria-labelledby="faq2" data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit
                                                praesentium quod vero! Autem saepe inventore odit accusamus ad pariatur,
                                                sunt corrupti voluptas quam fugiat! Similique consequatur earum tempora
                                                error dolores in temporibus quas beatae, quo aperiam saepe vitae ipsa
                                                delectus?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item aos-init" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="accordion__header" id="faq3">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody3"
                                                aria-expanded="false" aria-controls="faqBody3">
                                                How good is this event<span class="plus-icon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                            data-bs-parent="#faqAccordion1">
                                            <div class="accordion__body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus in
                                                dolores vero, deleniti necessitatibus sed nisi magni vitae fugit nemo
                                                nostrum sunt sapiente harum? Sequi eligendi, incidunt laborum optio odio
                                                voluptatibus molestiae dignissimos, quo excepturi omnis nulla culpa
                                                maxime tempora?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="faqAccordion2">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="accordion__item aos-init" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="accordion__header" id="faq1-two">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody1-two"
                                                aria-expanded="false" aria-controls="faqBody1-two">

                                                When is the official launch? <span class="plus-icon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody1-two" class="accordion-collapse collapse"
                                            aria-labelledby="faq1-two" data-bs-parent="#faqAccordion2">
                                            <div class="accordion__body">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo autem
                                                ducimus exercitationem iste repellendus recusandae, tempora neque vero,
                                                commodi, iure aliquid. Aliquid mollitia ipsa nesciunt adipisci, veniam
                                                quis reprehenderit suscipit nulla nobis non similique ab deserunt! Ut
                                                quae itaque optio.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item aos-init" data-aos="fade-up" data-aos-duration="1100">
                                        <div class="accordion__header" id="faq2-two">
                                            <button class="accordion__button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faqBody2-two"
                                                aria-expanded="true" aria-controls="faqBody2-two">

                                                What will the ticket price be? <span class="plus-icon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody2-two" class="accordion-collapse collapse"
                                            aria-labelledby="faq2-two" data-bs-parent="#faqAccordion2">
                                            <div class="accordion__body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quisquam
                                                eaque animi quia sunt. Porro aut perferendis nostrum accusamus. Aliquam
                                                omnis, et magnam saepe molestiae vitae maxime commodi repellat ipsam
                                                vero, delectus nulla ab. Ut quidem delectus tenetur nostrum veritatis!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item aos-init" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="accordion__header" id="faq3-two">
                                            <button class="accordion__button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faqBody3-two" aria-expanded="false"
                                                aria-controls="faqBody3-two">

                                                How does the raffle work?<span class="plus-icon"></span>
                                            </button>
                                        </div>
                                        <div id="faqBody3-two" class="accordion-collapse collapse show"
                                            aria-labelledby="faq3-two" data-bs-parent="#faqAccordion2">
                                            <div class="accordion__body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aut
                                                reprehenderit repudiandae cupiditate iste, impedit excepturi eaque quod
                                                dolorum corrupti, consequuntur totam deserunt unde. Sint, inventore
                                                quaerat officia ipsa quo aliquid? Necessitatibus consequuntur
                                                perferendis illum, repellat exercitationem laboriosam quae voluptates?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="venue padding-top padding-bottom" id="venue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="venue__content">
                        <h3>Event Venue</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos hic neque iure eligendi
                            ipsum deserunt temporibus officiis provident cumque totam!</p>
                        <ul class="venue__list">
                            <li class="venue__list-item"><span><svg class="svg-inline--fa fa-location-dot"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-location-dot"></i> Font Awesome fontawesome.com --></span>
                                452, Park
                                Street, Brooklyn, New York, USA -
                                01152 </li>
                            <li class="venue__list-item"><span><svg class="svg-inline--fa fa-phone" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="phone" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-phone"></i> Font Awesome fontawesome.com --></span>
                                (01)555 9214,
                                (01)555 2345
                            </li>
                            <li class="venue__list-item"><span><svg class="svg-inline--fa fa-envelope"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-envelope"></i> Font Awesome fontawesome.com --></span>
                                email@exmple.com </li>
                            <li class="venue__list-item"><span><svg class="svg-inline--fa fa-globe" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="globe" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M352 256C352 278.2 350.8 299.6 348.7 320H163.3C161.2 299.6 159.1 278.2 159.1 256C159.1 233.8 161.2 212.4 163.3 192H348.7C350.8 212.4 352 233.8 352 256zM503.9 192C509.2 212.5 512 233.9 512 256C512 278.1 509.2 299.5 503.9 320H380.8C382.9 299.4 384 277.1 384 256C384 234 382.9 212.6 380.8 192H503.9zM493.4 160H376.7C366.7 96.14 346.9 42.62 321.4 8.442C399.8 29.09 463.4 85.94 493.4 160zM344.3 160H167.7C173.8 123.6 183.2 91.38 194.7 65.35C205.2 41.74 216.9 24.61 228.2 13.81C239.4 3.178 248.7 0 256 0C263.3 0 272.6 3.178 283.8 13.81C295.1 24.61 306.8 41.74 317.3 65.35C328.8 91.38 338.2 123.6 344.3 160H344.3zM18.61 160C48.59 85.94 112.2 29.09 190.6 8.442C165.1 42.62 145.3 96.14 135.3 160H18.61zM131.2 192C129.1 212.6 127.1 234 127.1 256C127.1 277.1 129.1 299.4 131.2 320H8.065C2.8 299.5 0 278.1 0 256C0 233.9 2.8 212.5 8.065 192H131.2zM194.7 446.6C183.2 420.6 173.8 388.4 167.7 352H344.3C338.2 388.4 328.8 420.6 317.3 446.6C306.8 470.3 295.1 487.4 283.8 498.2C272.6 508.8 263.3 512 255.1 512C248.7 512 239.4 508.8 228.2 498.2C216.9 487.4 205.2 470.3 194.7 446.6H194.7zM190.6 503.6C112.2 482.9 48.59 426.1 18.61 352H135.3C145.3 415.9 165.1 469.4 190.6 503.6V503.6zM321.4 503.6C346.9 469.4 366.7 415.9 376.7 352H493.4C463.4 426.1 399.8 482.9 321.4 503.6V503.6z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-globe"></i> Font Awesome fontawesome.com --></span>
                                www.exampleevent.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="venue__map">
            <iframe src="./assets/index_files/embed.html" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection

@section('liknsJs')
    <script src="./assets/index_files/jquery-3.6.0.min.js.téléchargé"></script>
    <script src="./assets/index_files/bootstrap.bundle.min.js.téléchargé"></script>
    <script src="./assets/index_files/all.min.js.téléchargé"></script>
    <script src="./assets/index_files/swiper-bundle.min.js.téléchargé"></script>
    <script src="./assets/index_files/aos.js.téléchargé"></script>
    <script src="./assets/index_files/countdown.min.js.téléchargé"></script>
    <script src="./assets/index_files/lightcase.js.téléchargé"></script>
    <script src="./assets/index_files/purecounter_vanilla.js.téléchargé"></script>
    <script src="./assets/index_files/custom.js.téléchargé"></script>
   
@endsection

@section('style')
    <style type="text/css">
        :host,
        :root {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands"
        }

        svg:not(:host).svg-inline--fa,
        svg:not(:root).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -.125em
        }

        .svg-inline--fa.fa-2xs {
            vertical-align: .1em
        }

        .svg-inline--fa.fa-xs {
            vertical-align: 0
        }

        .svg-inline--fa.fa-sm {
            vertical-align: -.0714285705em
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -.2em
        }

        .svg-inline--fa.fa-xl {
            vertical-align: -.25em
        }

        .svg-inline--fa.fa-2xl {
            vertical-align: -.3125em
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, .3em);
            width: auto
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, .3em);
            width: auto
        }

        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: .25em
        }

        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em)
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -.125em;
            width: 1em
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, .25em .5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-counter-scale, .25));
            transform: scale(var(--fa-counter-scale, .25));
            -webkit-transform-origin: top right;
            transform-origin: top right
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, .25));
            transform: scale(var(--fa-layers-scale, .25));
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, .25));
            transform: scale(var(--fa-layers-scale, .25));
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            -webkit-transform: scale(var(--fa-layers-scale, .25));
            transform: scale(var(--fa-layers-scale, .25));
            -webkit-transform-origin: top right;
            transform-origin: top right
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-layers-scale, .25));
            transform: scale(var(--fa-layers-scale, .25));
            -webkit-transform-origin: top left;
            transform-origin: top left
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-2xs {
            font-size: .625em;
            line-height: .1em;
            vertical-align: .225em
        }

        .fa-xs {
            font-size: .75em;
            line-height: .0833333337em;
            vertical-align: .125em
        }

        .fa-sm {
            font-size: .875em;
            line-height: .0714285718em;
            vertical-align: .0535714295em
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: .05em;
            vertical-align: -.075em
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: .0416666682em;
            vertical-align: -.125em
        }

        .fa-2xl {
            font-size: 2em;
            line-height: .03125em;
            vertical-align: -.1875em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em) * -1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, .1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, .08em);
            padding: var(--fa-border-padding, .2em .25em .15em)
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, .3em)
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, .3em)
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out)
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1))
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out)
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear)
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear)
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8))
        }

        @media (prefers-reduced-motion:reduce) {

            .fa-beat,
            .fa-beat-fade,
            .fa-bounce,
            .fa-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                transition-delay: 0s;
                transition-duration: 0s
            }
        }

        @-webkit-keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25))
            }
        }

        @keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25))
            }
        }

        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0)
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em))
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0)
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0)
            }
        }

        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0)
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em))
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0)
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0)
            }
        }

        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, .4)
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, .4)
            }
        }

        @-webkit-keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, .4);
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125))
            }
        }

        @keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, .4);
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125))
            }
        }

        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
            }
        }

        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
            }
        }

        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg)
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg)
            }

            24%,
            8% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg)
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg)
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg)
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg)
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg)
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg)
            }

            100%,
            40% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
        }

        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg)
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg)
            }

            24%,
            8% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg)
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg)
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg)
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg)
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg)
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg)
            }

            100%,
            40% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1)
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1)
        }

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none))
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
            height: 2em;
            position: relative;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: var(--fa-stack-z-index, auto)
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff)
        }

        .fa-sr-only,
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0
        }

        .fa-sr-only-focusable:not(:focus),
        .sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1)
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, .4)
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, .4)
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1)
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: #000
        }

        .fa-duotone.fa-inverse,
        .fad.fa-inverse {
            color: var(--fa-inverse, #fff)
        }
    </style>
@endsection