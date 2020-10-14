// App.vue

<template>

  <div>
    <!-- <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <router-link to="/" class="nav-link">Home</router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          <router-link to="/create" class="nav-link">Create</router-link>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <router-link to="/posts" class="nav-link">Posts</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/user" class="nav-link">User</router-link>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        
      </div>
    </nav><br /> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <router-link to="/" class="nav-link"><img v-bind:src="'/img/logo/logo.png'" alt=""></router-link>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">
                                                <li><router-link to="/" class="nav-link">Home</router-link></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><router-link to="/create" class="nav-link">Create</router-link></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="#">Page</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                        <li><a href="portfolio_details.html">Portfolio Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                        <a href="#" class="btn header-btn">Get Free Consultent</a>
                                    </div>
                                </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header><br />
    <div> 
      <transition name="fade">
        <router-view></router-view>
      </transition>
    </div>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                   <div class="row justify-content-center">
                       <div class="col-lg-6">
                            <div class="footer-top-cap text-center">
                                <img v-bind:src="'/img/logo/logo2_footer.png'" alt="">
                                <span><a href="#">Khacnamxc97@gmail.com</a></span>
                                <p>221B Baker Street, Post office Box 353 </p>
                                <p>Park Road, USA - 215431</p>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
  </div>
  
</template>
<style  lang="scss" scoped>
  //   $theme-color: #ec5b53;
  //   $heading-color:#000a2d;
  //   // Font Family
  //   $font_1 :'Rufina', serif;   //Heading Font
  //   $font_2 :'Rubik', sans-serif;       //Body Font , Menu

  //   $laptop: 'only screen and (min-width: 1200px) and (max-width: 1600px)';
  //   $lg :'only screen and (min-width: 992px) and (max-width: 1199px)';
  //   $md:'only screen and (min-width: 768px) and (max-width: 991px)';
  //   $xs:'(max-width: 575px)';
  //   $sm: 'only screen and (min-width: 576px) and (max-width: 767px)';
  // .footer-area{
  //   background: #080827;
  //   .footer-top{
  //      .footer-top-cap{
  //          img{
  //           margin-bottom: 30px;
  //          }
  //          span{
  //           a{
  //               font-size: 50px;
  //               display: block;
  //               color: #fff;
  //               font-weight: 400;
  //               margin-bottom: 20px;
  //               @media #{$xs}{
  //                   font-size: 27px;
  //               }
  //               @media #{$sm}{
  //                   font-size: 45px;
  //               }
  //               &:hvoer{
  //                   color: #fff;
  //               }
  //           }
  //          }
  //          p{
  //           color: #c5c5dd;
  //           margin-bottom: 1px;
  //          }
  //      } 
  //   }
  //   //copy Right 
  //   .footer-bottom{
  //       // border-top: 1px solid #1c2e4c;
  //       padding-bottom: 50px;
  //       padding-top: 20px;

  //       .footer-copy-right{
  //           & p{
  //               color: #393a50;
  //               font-weight: 300;
  //               font-size: 16px;
  //               line-height: 2;
  //               margin-bottom: 12px;
  //               & i{
  //                   color:$theme-color;
  //               }
  //               & a{
  //                   color: $theme-color;
  //                   &:hover{
  //                       // color: #fff;
  //                   }
                     
  //               }
  //           }
  //       }
  //   }
  //   // Footer SociaL
  //   .footer-social {
  //       @media #{$md}{
  //       float: left; 
  //       padding-top: 10px;
  //       }
  //       @media #{$sm}{
  //       float: left; 
  //       padding-top: 10px;
  //       }
  //       @media #{$xs}{
  //       float: left; 
  //       padding-top: 10px;
  //       }
  //       a {
  //           color: #848493;
  //           font-size: 14px;
  //           text-align: center;
  //           margin-left: 16px;
  //           &:first-child{
  //               margin-left: 0px;
  //           }
  //           &:hover {
  //               color: #fff;
  //           }
  //       }
  //   }
  // }
  // // Header left right padding
  // .header-area {
  //     .main-header {
  //         padding: 0px 100px;
  //         @media #{$laptop}{
  //             padding: 0px 30px;
  //         }
  //         @media #{$lg}{
  //             padding: 0px 15px;
  //         }
  //         // mobile menu show
  //         @media #{$md}{
  //             padding: 22px 50px;
  //         }
  //         @media #{$sm}{
  //             padding: 22px 20px;
  //         }
  //         @media #{$xs}{
  //             padding: 22px 14px;
  //         }
  //     }
  // }
  // // Header Bottom
  // .main-header{
  //     .main-menu{
  //         @media #{$laptop}{
  //           margin-right: 30px;
  //         }
  //         & ul{
  //             & li{
  //                 display: inline-block;
  //                 position: relative;
  //                 z-index: 1;

  //                 & a{
  //                     color: #000019;
  //                     font-weight: 500;
  //                     padding: 39px 10px;
  //                     display: block;
  //                     font-size: 16px;
  //                     // @include transition(.3s);
  //                     text-transform: capitalize;
  //                     position: relative;
  //                     margin: 0 23px;
  //                     font-family: $font_2;
  //                     @media #{$lg}{
  //                         padding: 39px 15px;
  //                         margin: 0 10px;
  //                     }
  //                     @media #{$laptop}{
  //                         margin: 0 10px;
  //                     }
  //                 }
  //                 &:hover{
  //                     & > a{
  //                         color:$theme-color;
  //                     }
  //                 }
  //             }
  //             & ul.submenu{
  //                 position: absolute;
  //                 width: 170px;
  //                 background: #fff;
  //                 left: 0;
  //                 top: 120%;
  //                 visibility: hidden;
  //                 opacity: 0;
  //                 box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
  //                 padding: 17px 0;
  //                 // border-top: 5px solid $theme-color;
  //                 // @include transition(.3s);
  //                 & > li{
  //                     margin-left: 7px;
  //                     display: block;
  //                     & > a{
  //                         padding: 6px 10px !important;
  //                         font-size: 16px;
  //                         text-transform: capitalize;
  //                         margin: 0;
  //                         &:hover{
  //                             color:$theme-color;
  //                             background: none;
  //                         }
  //                     }
  //                 } 
  //             }
  //         }
  //     }
  //     .logo{
  //         & img{
              
  //         }
  //     }
  // }

  // .main-menu ul li.active > a::before {
  //   width: 100%;
  // }
  // .main-menu ul li:hover > a::before {
  //   width: 100%;
  // }
  // .main-header .main-menu ul ul.submenu > li > a:hover {
  //   padding-left: 15px !important;
  // }
  // .main-header .main-menu ul ul.submenu > li > a:hover::before {
  //   width: 10px;
  // }


  // .main-header ul > li:hover > ul.submenu {
  //   visibility: visible;
  //     opacity: 1;
  //     top: 100%;
  // }

  // .main-header .header-sticky.sticky-bar{
  //   background: #fff;
  // }
  // .header-sticky.sticky-bar .main-menu ul>li>a {
  //     padding:27px 13px;
  //     margin: 0 10px;
  // }
  // .header-transparent {
  //   position: absolute;
  //   top: 0;
  //   right: 0;
  //   left: 0;
  //   z-index: 9;
  // }
  // // Mobile Menu slick Nav
  // .mobile_menu {
  //     position: absolute;
  //     right: 0px;
  //     width: 100%;
  //     z-index: 99;
  //     .slicknav_menu {
  //         background: transparent;
  //         margin-top: 16px !important;
  //     }
  //     .slicknav_menu .slicknav_nav a:hover {
  //         background: transparent;
  //         color: $theme-color;
  //     }
  //     .slicknav_menu .slicknav_icon-bar {
  //         background-color: $theme-color !important;
  //     }
  //     .slicknav_btn {
  //         top: -55px;
  //     }
  //     .slicknav_nav {
  //         margin-top: 0px;
  //     }
  // }
   @import '../sass/style.scss';
   @import '../sass/app.scss'; 
  
</style>
<script>
    export default{
    }
</script>