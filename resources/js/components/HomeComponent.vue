// HomeComponent.vue

<template>
    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">I’m Nguyen Khac Nam</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s" >jhorem rfpsum golor sidt amet, consectetur adipiscing elit, eiusmod tempor incididunt utcjhg labore bet dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                                        <a href="industries.html" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
               
            </div>
        </div>
        <!-- slider Area End-->
        <!-- About Area start -->
        <section class="about-area section-paddingt30">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>Designing With Passion While Exploring The World.</h3>
                            <p class="pera1">Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.</p>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>Any Type Of Query<br> & Discussion.</h3>
                            <p>Late talk with me</p>
                           <div class="send-cv">
                                <a href="#">hire@colorlib.com</a>
                                <i class="ti-arrow-right"></i>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Categories Area Start -->
        <section class="categories-area section-padding3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>What Services you will Get from me!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">UI/UX Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-speaker"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Digital Marketing</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-portfolio"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Website Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi  nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        <!-- Categories Area End -->
        
    </main>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="scss" scoped>
    $theme-color: #ec5b53;
    $heading-color:#000a2d;

    .flaticon-pen:before { content: "\f100"; }
    .flaticon-speaker:before { content: "\f101"; }
    .flaticon-portfolio:before { content: "\f102"; }
    
    $font-Flaticon-pen: "\f100";
    $font-Flaticon-speaker: "\f101";
    $font-Flaticon-portfolio: "\f102";

    $laptop: 'only screen and (min-width: 1200px) and (max-width: 1600px)';
    $lg :'only screen and (min-width: 992px) and (max-width: 1199px)';
    $md:'only screen and (min-width: 768px) and (max-width: 991px)';
    $xs:'(max-width: 575px)';
    $sm: 'only screen and (min-width: 576px) and (max-width: 767px)';
    
    // Extra Responsive

    $medium_device : 'only screen and (min-width: 992px) and (max-width: 1200px)';
    $tab_device:'only screen and (min-width: 768px) and (max-width: 991px)';
    $large_mobile: 'only screen and (min-width: 576px) and (max-width: 767px)';
    $tab: '(max-width: 991px)';
    $tab2: '(max-width: 1199px)';
    $small_mobile:'(max-width: 576px)';
    $xs_mobile:'(max-width: 420px)';
    $sm_mobile:'only screen and (min-width: 421px) and (max-width: 575px)';
    $big_screen:'only screen and (min-width: 1200px) and (max-width: 1440px)';
    $big_screen2:'only screen and (min-width: 1200px) and (max-width: 1300px)';
    $big_screen3:'only screen and (min-width: 1441px) and (max-width: 1500px)';
    $big_screen4:'only screen and (min-width: 1501px) and (max-width: 1750px)';
    $extra_big_screen: 'only screen and (min-width: 1200px) and (max-width: 3640px)';


// More Extra Responsive
    $large_device_2:'(min-width: 1501px) and (max-width: 1700px)';
    $mid_device:'(min-width: 992px) and (max-width: 1200px)';
    $tablet_device:'(min-width: 768px) and (max-width: 991px)';
    $mobile_device:'(max-width: 767px)';
    $large_mobile:'only screen and (min-width: 480px) and (max-width: 767px)';

// Custom
    $large1:'only screen and (min-width: 1200px) and (max-width: 1360px)';
    $large2:'(min-width: 1200px) and (max-width: 1500px)';
    $large3:'only screen and (min-width: 1601px) and (max-width: 1800px)';

   .slider-height {
        
        background-image: url('/img/hero/h1_hero.jpg');
        min-height: 1000px;
        background-repeat:no-repeat ;
        background-position: center center;
        background-size: cover;
        margin-top: -39px;
        @media #{$laptop}{
            min-height: 700px;
        }
        @media #{$md}{
            min-height: 700px;
        }
        @media #{$sm}{
            min-height: 700px;
        }
        @media #{$xs}{
            min-height: 600px;
        }
    }
    .slider-area{
        .hero__caption{
            h1{
                font-size: 70px;
                font-weight: 700;
                margin-bottom: 14px;
                color: #002d5b;
                line-height: 1.2;
                text-transform: capitalize;
                margin-bottom: 29px;
                @media #{$lg}{
                    font-size: 60px;
                    line-height: 1.2;
                }
                @media #{$md}{
                    font-size: 50px;
                    line-height: 1.2;
                }
                @media #{$sm}{
                    font-size: 35px;
                    line-height: 1.2;
                }
                @media #{$xs}{
                    font-size: 35px;
                    line-height: 1.2;
                }
            }
            span{
                font-size: 18px;
                line-height: 1.2;
                font-weight: 300;
                margin-bottom: 39px;
                color: $theme_color;
                margin-bottom: 37px;
                text-transform: uppercase;
                display: inline-block;
                @media #{$xs}{
                    margin-bottom: 30px;
                }
            }
            p{
                color: #464d65;
                margin-bottom: 42px
            }
        }
    }
    .slider-height2{
        background-image: url('/img/hero/hero2.jpg');
        min-height: 390px;
        background-repeat:no-repeat ;
        // background-position: center center;
        background-size: cover;
        @media #{$xs}{
            min-height: 260px;
        }
    }
    // Another Hero Page
    .slider-area{
        .hero-cap{
            & h2{
                font-size: 70px;
                font-weight: 900;
                text-transform: capitalize;
                margin-bottom: 15px;
                @media #{$sm}{
                    font-size: 50px;
                }
                @media #{$xs}{
                    font-size: 50px;
                }
            }
            // 
            // nav {
            //     margin: 7px 0;
            //     padding-left: 95px;
            //     position: relative;
            //     &::before {
            //         position: absolute;
            //         content: "";
            //         width: 75px;
            //         height: 1px;
            //         background: #ff5f13;
            //         left: 0;
            //         top: 52%;
            //         transform: translateY(-50%);
            //     }
            // }
            .breadcrumb {
                background: none;
                padding: 0;
                margin: 0;

                a {
                    color: #ec5b53;
                    font-size: 18px;
                    text-transform: capitalize;
                }
            }
            .breadcrumb-item + .breadcrumb-item::before {
                color: #ec5b53;
            }
            &.hero-cap2{
                @media #{$xs}{
                    padding-top: 50px;
                }
                @media #{$sm}{
                    padding-top: 50px;
                }
                h2{
                font-size: 60px;
                font-weight: 700;
                text-transform: capitalize;
                @media #{$sm}{
                    font-size: 37px;
                    }
                @media #{$xs}{
                        font-size: 26px;
                    }
            }
        }
        }

    }
    .about-area{
        .about-caption{
            h3{
                font-size: 30px;
                color: #000a2d;
                font-weight: 700;
                margin-bottom: 35px;
                line-height: 1.5;
                @media #{$xs}{
                    font-size: 24px;
                    line-height: 1.6;
                }
            
            }
            .pera1{
                margin-bottom: 25px;
            }

        }
        .about-caption2{
            h3{
                font-size: 40px;
                color: #000a2d;
                font-weight: 700;
                margin-bottom: 35px;
                line-height: 1.5;
                @media #{$md}{
                    font-size: 30px;
                }
                @media #{$sm}{
                    font-size: 30px;
                }
                @media #{$xs}{
                    font-size: 25px;
                }

            }
            p{
                color: #464d65;
                font-size: 20px;
                font-weight: 500;
                margin-bottom: 10px;
            }
            .send-cv{
                display: flex;
                justify-content: space-between;
                a{
                    color: #000a2d;
                    font-size: 35px;
                    font-weight: 500;
                    margin-bottom: 10px;
                    text-decoration: underline;
                    display: inline-block;
                    @media #{$md}{
                        font-size: 30px;
                    }
                    @media #{$sm}{
                        font-size: 28px;
                    }
                    @media #{$xs}{
                        font-size: 25px;
                    }
                }
                i{
                    font-size: 30px;
                    cursor: pointer;
                    text-decoration: double underline;
                    position: relative;
                    bottom: -10px;
                    @media #{$sm}{
                        bottom: -6px;
                        font-size: 23px;

                    }
                    @media #{$xs}{
                        bottom: -6px;
                        font-size: 23px;

                    }
                }
            }

        }
    }

    .about-me{
        .about-me-img{
            img{
                width: 100%;
            }
        }
        .about-me-caption{
            h2 {
                font-size: 48px;
                display: block;
                color: $heading-color;
                font-weight: 600;
                margin-bottom: 40px;
                @media #{$lg}{
                    font-size: 41px;
                }
                @media #{$md}{
                    font-size: 35px;
                }
                @media #{$sm}{
                    font-size: 31px;
                }
                @media #{$xs}{
                    font-size: 24px;
                    line-height: 1.6;
                }
            }
            p{

            }
            h5{
                padding-left: 25px;
                border-left: 2px solid #ff5f13;
                margin-bottom: 30px;
            }
        }
    }
    .categories-area {
        background-image: url('/img/gallery/shape1.png');
        background-size: 71%;
        background-repeat: no-repeat;
        background-position: left top;
        @media #{$md}{
        background-image: unset;
        }
        @media #{$sm}{
        background-image: unset;
        }
        @media #{$xs}{
        background-image: unset;
        }
        &.categories-area2{
            background-image: unset;
        }
        .single-cat{
            border: 1px solid #e1ebf7;
            border-radius: 6px;
            padding: 61px 22px;
            // @include transition(.4s);
            position: relative;
            z-index: 1;

            &::before {
                position: absolute;
                content: "";
                width: 100%;
                height: 0;
                background:#ff3d1c;
                transition: .6s;
                bottom: 0;
                left: 0;
                z-index: -1;
                border-radius: 6px;
            }
            .cat-icon{
                span{
                    color: $theme-color;
                    font-size: 50px;
                    margin-bottom: 30px;
                    display: block;
                    margin-bottom: 50px;

                    width: 100px;
                    height: 100px;
                    background:#fff4f4;
                    line-height: 100px;
                    text-align: center;
                    border-radius: 50px;
                    display: inline-block;
                }
            }
            .cat-cap{
                h5{
                & > a{
                    font-size: 25px;
                    font-weight: 700;
                    margin-bottom: 21px;
                    display: block;
                    // @include transition(.2s);
                    @media #{$sm}{
                        font-size: 21px;
                    }
                    @media #{$xs}{
                        font-size: 21px;
                    }
                }
                }
                p{
                    margin-bottom: 36px;
                    color: #57667e;
                    font-size: 16px;
                    // @include transition(.2s);
                    margin: 0;
                    @media #{$sm}{
                        font-size: 15px;

                    }
                }
                a{
                    color: #1c165c;
                    font-size: 16px;
                    font-weight: 600;
                    // @include transition(.2s);
                }
            }


            // Hover Effect In single 
            &:hover{
                border: 1px solid transparent;
                // background: #ff3d1c;

                &::before {
                    height: 100%;
                }
                .cat-icon{
                span{
                    background:#fff;
                }
                }
                .cat-cap{
                    h5{
                        color: #fff;
                    }
                    p{
                        color: #fff;
                    }
                    a{
                        color: #fff;
                    }
                }
        }
        }
    }
</style>