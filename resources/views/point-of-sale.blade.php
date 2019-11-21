@extends('layouts.site')

@section('content')

<!-- Knowledge base sub-header + Bottom mask style 2 -->
<div id="page_header" class="page-subheader site-subheader-cst maskcontainer--shadow_ud">
    <div class="bgback"></div>

    <!-- Animated Sparkles -->
    <div class="th-sparkles"></div>
    <!--/ Animated Sparkles -->

    <!-- Sub-Header content wrapper -->
    <div class="ph-content-wrap d-flex">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <!-- Captions container -->
                    <div
                        class="container kl-iosslide-caption kl-ioscaption--style4 s4ext fromleft klios-alignleft kl-caption-posv-middle">
                        <!-- Captions animateme wrapper -->
                        <div class="animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="0.1"
                            data-easing="linear">
                            <!-- Main Big Title -->
                            <h2 class="main_title has_titlebig ">
                                <span><strong>POINT OF SALE</strong></span>
                            </h2>
                            <!--/ Main Big Title -->
                        </div>
                        <!--/ Captions animateme wrapper -->
                    </div>
                    <!--/ Captions container -->
                </div>
                <!--/ .col-sm-12 .col-md-12 -->
            </div>
            <!--/ .row -->
        </div>
        <!--/ .container .align-self-center -->
    </div>
    <!--/ Sub-Header content wrapper d-flex -->

    <!-- Bottom mask style 6 -->
    <div class="kl-bottommask kl-bottommask--mask6">
        <svg width="2700px" height="57px" class="svgmask" viewBox="0 0 2700 57" version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-mask6">
                    <feOffset dx="0" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1">
                    </feGaussianBlur>
                    <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" in="shadowBlurOuter1"
                        type="matrix" result="shadowMatrixOuter1"></feColorMatrix>
                    <feMerge>
                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                        <feMergeNode in="SourceGraphic"></feMergeNode>
                    </feMerge>
                </filter>
            </defs>
            <g transform="translate(-1.000000, 10.000000)">
                <path d="M0.455078125,18.5 L1,47 L392,47 L1577,35 L392,17 L0.455078125,18.5 Z" fill="#ff0000">
                </path>
                <path d="M2701,0.313493752 L2701,47.2349598 L2312,47 L391,47 L2312,0 L2701,0.313493752 Z" fill="#ffffff"
                    class="bmask-bgfill" filter="url(#filter-mask6)"></path>
                <path d="M2702,3 L2702,19 L2312,19 L1127,33 L2312,3 L2702,3 Z" fill="#46b6cc" class="bmask-customfill">
                </path>
            </g>
        </svg>
    </div>
    <!--/ Bottom mask style 6 -->
</div>
<!--/ Knowledge base sub-header + Bottom mask style 2 -->

<section class="px-0 bg-white">
    <div class="container">
        <div class="row align-items-center contents mt-25">
            <div class="col-md-6 text-center order-2 order-md-1" style="background-image: url();">
                <img src="/images/features/pos/charts.png" height="500" width="500" alt="" class="img-fluid">
            </div>
            <div class="col-md-6  order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 blurb mb-5 mb-md-0">
                        <h2>Informative dashboard</h2>
                        <p>Get an all in one dashboard that will enable you to take control of your business with
                            easy. The dashboard contains the information of your ongoing business and every activity
                            that is being done in real time, then summarizes it for you in a way you can understand
                            and make sensible decisions for the growth of your business.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center contents mt-50">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 blurb mb-5 mb-md-0">
                        <h2>A user friendly transaction panel</h2>
                        <p>This being a business as usually activity, Uzzar has it that you will only need to focus
                            on your business. The selling panel makes it a breeze for you to take orders, create pay
                            list and checkout transactions. Activities form this panel will be reflected in your
                            stock, sales, income etc. you just work and everything else is handled.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/images/features/pos/charts.png" height="500" width="500" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center contents mt-50">
            <div class="col-md-6 order-2 order-md-1 text-center">
                <img src="/images/features/pos/charts.png" height="500" width="500" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 blurb mb-5 mb-md-0">
                        <h2>Automatic invoicing</h2>
                        <p>For all the transaction made through the application, invoices will be provided that will
                            reflect the debts, and credits according to the statuses. These invoices are well
                            detailed with every piece of information according to the configurations done and they
                            are automatically generated for each transaction that is made.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Posts - Accordion Style section -->
<section class="hg_section pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <!-- Latest posts accordion style -->
                <div class="latest_posts-acc">
                    <!-- Title -->
                    <h3 class="m_title latest_posts-acc-elm-title">
                        OTHER UZZAR FEATURES
                    </h3>
                    <!--/ Title -->

                    <!-- View all posts button -->
                    <a href="/#uzzar-features" class="latest_posts-acc-viewall">
                        VIEW ALL -
                    </a>
                    <!--/ View all posts button -->

                    <!-- CSS3 Accordion -->
                    <div class="css3accordion latest_posts-acc-wrapper">
                        <ul class="latest_posts-acc-list">
                            <!-- Post -->
                            <li class="latest_posts-acc-item">
                                <!-- Post wrapper -->
                                <div class="inner-acc latest_posts-acc-inner" style="width: 555px;">
                                    <!-- Post link wrapper -->
                                    <a href="/features/accounting" class="thumb hoverBorder plus latest_posts-acc-link">
                                        <!-- Border wrapper -->
                                        <span class="hoverBorderWrapper">
                                            <!-- Image -->
                                            <img src="/images/features/other-features/features.jpg"
                                                class="latest_posts-acc-img" alt="" title="" />
                                            <!--/ Image -->

                                            <!-- Hover border/shadow -->
                                            <span class="theHoverBorder"></span>
                                            <!--/ Hover border/shadow -->
                                        </span>
                                        <!--/ Border wrapper -->
                                    </a>
                                    <!-- Post link wrapper -->

                                    <!-- Post content -->
                                    <div class="content latest_posts-acc-content">

                                        <!-- Title with link -->
                                        <h5 class="m_title latest_posts-acc-title">
                                            <a href="/features/accounting">
                                                ACCOUNTING
                                            </a>
                                        </h5>
                                        <!--/ Title with link -->

                                        <!-- Content text -->
                                        <div class="text latest_posts-acc-text">
                                            A comprehensive accounting module to account for your revenue and
                                            expenditure and visual reflection of your
                                            business....
                                        </div>
                                        <!--/ Content text -->

                                        <!-- Read more button -->
                                        <a href="/features/accounting" class="latest_posts-acc-more">
                                            READ MORE +
                                        </a>
                                        <!--/ Read more button -->
                                    </div>
                                    <!--/ Post content -->
                                </div>
                                <!--/ Post wrapper -->
                            </li>
                            <!--/ Post -->

                            <!-- Post -->
                            <li class="latest_posts-acc-item">
                                <!-- Post wrapper -->
                                <div class="inner-acc latest_posts-acc-inner" style="width: 555px">
                                    <!-- Post link wrapper -->
                                    <a href="/features/engagment" class="thumb hoverBorder plus latest_posts-acc-link">
                                        <!-- Border wrapper -->
                                        <span class="hoverBorderWrapper">
                                            <!-- Image -->
                                            <img src="/images/features/other-features/features.jpg"
                                                class="latest_posts-acc-img" alt="" title="" />
                                            <!--/ Image -->

                                            <!-- Hover border/shadow -->
                                            <span class="theHoverBorder"></span>
                                            <!--/ Hover border/shadow -->
                                        </span>
                                        <!--/ Border wrapper -->
                                    </a>
                                    <!-- Post link wrapper -->

                                    <!-- Post content -->
                                    <div class="content latest_posts-acc-content">

                                        <!-- Title with link -->
                                        <h5 class="m_title latest_posts-acc-title">
                                            <a href="/features/engagment">
                                                ENGAGMENT
                                            </a>
                                        </h5>
                                        <!--/ Title with link -->

                                        <!-- Content text -->
                                        <div class="text latest_posts-acc-text">
                                            Involves contact and maintain your customers in your business.
                                            Spread the word for renewal of your stock, order arrivals
                                            etc....
                                        </div>
                                        <!--/ Content text -->

                                        <!-- Read more button -->
                                        <a href="/features/engagment" class="latest_posts-acc-more" title="">
                                            READ MORE +
                                        </a>
                                        <!--/ Read more button -->
                                    </div>
                                    <!--/ Post content -->
                                </div>
                                <!--/ Post wrapper -->
                            </li>
                            <!--/ Post -->

                            <!-- Post -->
                            <li class="last latest_posts-acc-item">
                                <!-- Post wrapper -->
                                <div class="inner-acc latest_posts-acc-inner" style="width: 555px">
                                    <!-- Post link wrapper -->
                                    <a href="/features/inventory" class="thumb hoverBorder plus latest_posts-acc-link">
                                        <!-- Border wrapper -->
                                        <span class="hoverBorderWrapper">
                                            <!-- Image -->
                                            <img class="images/blog1-370x200.jpg"
                                                src="/images/features/other-features/features.jpg" alt="" title="" />
                                            <!--/ Image -->

                                            <!-- Hover border/shadow -->
                                            <span class="theHoverBorder"></span>
                                            <!--/ Hover border/shadow -->
                                        </span>
                                        <!--/ Border wrapper -->
                                    </a>
                                    <!-- Post link wrapper -->

                                    <!-- Post content -->
                                    <div class="content latest_posts-acc-content">

                                        <!-- Title with link -->
                                        <h5 class="m_title latest_posts-acc-title">
                                            <a href="/features/inventory">
                                                INVENTORY
                                            </a>
                                        </h5>
                                        <!--/ Title with link -->

                                        <!-- Content text -->
                                        <div class="text latest_posts-acc-text">
                                            Control your stock in a glimpse. Manage your
                                            business with features like low stock
                                            alert, products counts etc....
                                        </div>
                                        <!--/ Content text -->

                                        <!-- Read more button -->
                                        <a href="/features/inventory" class="latest_posts-acc-more">
                                            READ MORE +
                                        </a>
                                        <!--/ Read more button -->
                                    </div>
                                    <!--/ Post content -->
                                </div>
                                <!--/ Post wrapper -->
                            </li>
                            <!--/ Post -->
                        </ul>
                    </div>
                    <!--/ CSS3 Accordion -->
                </div>
                <!--/ Latest posts accordion style -->
            </div>
            <!--/ col-sm-12 col-md-12 -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>
<!--/ Latest Posts - Accordion Style section -->

@endsection