@extends('layouts.site')

@section('content')
<!-- Knowledge base sub-header + Bottom mask style 2 -->
<div id="page_header" class="page-subheader site-subheader-cst maskcontainer--shadow_ud">
    <div class="bgback"></div>

    <!-- Animated Sparkles -->
    <div class="th-sparkles"></div>
    <!--/ Animated Sparkles -->

    <!-- Sub-Header content wrapper -->
    <div class="ph-content-wrap d-flex" style="background:url(/images/banners/faq.jpg)">
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
                                <span><strong>SUPPORT</strong></span>
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
                <path d="M2702,3 L2702,19 L2312,19 L1127,33 L2312,3 L2702,3 Z" fill="#008080" class="bmask-customfill">
                </path>
            </g>
        </svg>
    </div>
    <!--/ Bottom mask style 6 -->
</div>
<!--/ Knowledge base sub-header + Bottom mask style 2 -->

<!-- Accordions element style 3 - section white with custom paddings -->
<section class="hg_section bg-white pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <!-- Title -->
                <div
                    class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol--line  tbk-icon-pos--before-title">
                    <span class="tbk__symbol">
                        <span></span>
                    </span>

                    <!-- Title with custom font, size, weight and default color -->
                    <h3 class="tbk__title kl-font-alt fs-xxl fw-bold tcolor">
                        Frequently Asked Questions
                    </h3>

                    <!-- Subtitle with custom font weight and color -->
                    <h4 class="tbk__subtitle fw-vthin dark-gray">
                        Are you having issues with using our application in one way or the other?
                        See some of the frequently asked questions, your solution might be here.
                    </h4>
                </div>
                <!--/ Title -->

            </div>
            <!--/ col-sm-12 col-md-12 -->

            <div class="col-sm-12 col-md-12">
                <!-- Accordions element style 3 -->
                <div class="hg_accordion_element style3">
                    <!-- Title -->
                    <h3>

                    </h3>
                    <!--/ Title -->

                    <!-- Accordions wrapper -->
                    <div class="th-accordion">
                        <!-- Acc group #7 -->
                        <div class="acc-group">
                            <!-- Title group button acc #7 -->
                            <div id="headingSeven">
                                <a data-toggle="collapse" data-target="#acc7" class="" aria-expanded="true"
                                    aria-controls="acc7">
                                    How do i purchase an item from your website?<span class="acc-icon"></span>
                                </a>
                            </div>
                            <!--/ Title group button acc #7 -->

                            <!-- Acc #7 -->
                            <div id="acc7" class="collapse show" aria-labelledby="headingSeven" data-parent=".style3">
                                <!-- Content -->
                                <div class="content">
                                    <!-- Description -->
                                    <p>
                                        Our items are sold exclusively on ThemeForest marketplace. Themeforest
                                        is a marketplace for digital goods, mostly themes and templates for
                                        different platforms and software. Why ThemeForest you may ask? Well,
                                        they're certaintly the biggest marketplaces for such products on the
                                        web.
                                    </p>
                                    <!--/ Description -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Acc #7 -->
                        </div>
                        <!--/ Acc group #7 -->

                        <!-- Acc group #8 -->
                        <div class="acc-group">
                            <!-- Title group button acc #8 -->
                            <div id="headingEight">
                                <a data-toggle="collapse" data-target="#acc8" class="collapsed" aria-expanded="false"
                                    aria-controls="acc8">
                                    Where can i find a list of the items i purchased from you?<span
                                        class="acc-icon"></span>
                                </a>
                            </div>
                            <!--/ Title group button acc #8 -->

                            <!-- Acc #8 -->
                            <div id="acc8" class="collapse" aria-labelledby="headingEight" data-parent=".style3">
                                <!-- Content -->
                                <div class="content">
                                    <!-- Description -->
                                    <p>
                                        To see a list of items that you've purchased, login to your ThemeForest
                                        account and go to your Downloads section. You can re-download them from
                                        here aswell.
                                    </p>
                                    <!--/ Description -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Acc #8 -->
                        </div>
                        <!--/ Acc group #8 -->

                        <!-- Acc group #9 -->
                        <div class="acc-group">
                            <!-- Title group button acc #9 -->
                            <div id="headingNine">
                                <a data-toggle="collapse" data-target="#acc9" class="collapsed" aria-expanded="false"
                                    aria-controls="acc9">
                                    Where do i download my products that i've puchased from you?<span
                                        class="acc-icon"></span>
                                </a>
                            </div>
                            <!--/ Title group button acc #9 -->

                            <!-- Acc #9 -->
                            <div id="acc9" class="collapse" aria-labelledby="headingNine" data-parent=".style3">
                                <!-- Content -->
                                <div class="content">
                                    <!-- Description -->
                                    <p>
                                        To download an item that you've purchased, login to your ThemeForest
                                        account and go to your Downloads section. You can re-download them from
                                        here aswell.
                                    </p>
                                    <!--/ Description -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Acc #9 -->
                        </div>
                        <!--/ Acc group #9 -->

                        <!-- Acc group #10 -->
                        <div class="acc-group">
                            <!-- Title group button acc #10 -->
                            <div id="headingTen">
                                <a data-toggle="collapse" data-target="#acc10" class="collapsed" aria-expanded="false"
                                    aria-controls="acc10">
                                    I'm being redirected to buy from this website called ThemeForest, is it
                                    normal?<span class="acc-icon"></span>
                                </a>
                            </div>
                            <!--/ Title group button acc #10 -->

                            <!-- Acc #10 -->
                            <div id="acc10" class="collapse" aria-labelledby="headingTen" data-parent=".style3">
                                <!-- Content -->
                                <div class="content">
                                    <!-- Description -->
                                    <p>
                                        Yes, no worries! ThemeForest is a marketplace where we exclusively post
                                        and sell our work. Also payments and purchases are made through
                                        ThemeForest.
                                    </p>
                                    <!--/ Description -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Acc #10 -->
                        </div>
                        <!--/ Acc group #10 -->

                        <!-- Acc group #11 -->
                        <div class="acc-group">
                            <!-- Title group button acc #11 -->
                            <div id="headingEleven">
                                <a data-toggle="collapse" data-target="#acc11" class="collapsed" aria-expanded="false"
                                    aria-controls="acc11">
                                    What are the payment methods for purchasing?<span class="acc-icon"></span>
                                </a>
                            </div>
                            <!--/ Title group button acc #11 -->

                            <!-- Acc #11 -->
                            <div id="acc11" class="collapse" aria-labelledby="headingEleven" data-parent=".style3">
                                <!-- Content -->
                                <div class="content">
                                    <!-- Description -->
                                    <p>
                                        As mentioneed before, payments and purchases are made through
                                        ThemeForest. The payment methods are through Paypal and Skrill
                                        (MoneyBookers). You can find much more details here
                                        https://help.market.envato.com/hc/en-us/articles/203269700-How-to-Purchase-Items
                                        . Also keep in mind though that credit card payments will be implemented
                                        very soon.
                                    </p>
                                    <!--/ Description -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Acc #11 -->
                        </div>
                        <!--/ Acc group #11 -->

                        <!-- Acc group #12 -->
                        <div class="acc-group">
                            <!-- Title group button acc #12 -->
                            <div id="headingTwelve">
                                <a data-toggle="collapse" data-target="#acc12" class="collapsed" aria-expanded="false"
                                    aria-controls="acc12">
                                    I really like your templates/support. How can i rate it?<span
                                        class="acc-icon"></span>
                                </a>
                            </div>
                            <!--/ Title group button acc #12 -->

                            <!-- Acc #12 -->
                            <div id="acc12" class="collapse" aria-labelledby="headingTwelve" data-parent=".style3">
                                <!-- Content -->
                                <div class="content">
                                    <!-- Description -->
                                    <p>
                                        Awesome! Thank you so much! You can rate our items in your Downloads
                                        section in ThemeForest. On the right column of the listed items, you can
                                        see the rating/review box.
                                    </p>
                                    <!--/ Description -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Acc #12 -->
                        </div>
                        <!--/ Acc group #12 -->
                    </div>
                    <!--/ Accordions wrapper -->
                </div>
                <!--/ Accordions element style 3 -->
            </div>
            <!--/ col-sm-12 col-md-12 -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>
<!--/ Accordions element style 3 - section white with custom paddings -->
@endsection