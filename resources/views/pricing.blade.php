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
                                <span><strong>PRICING</strong></span>
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

<!-- Pricing element - section with bottom padding -->
<section id="pricing" class="hg_section--relative bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <!-- Title -->
                <div
                    class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol--line  tbk-icon-pos--before-title">
                    <span class="tbk__symbol">
                        <span></span>
                    </span>

                    <!-- Title with custom font, size, weight and default color -->
                    <h3 class="tbk__title kl-font-alt fs-xxl fw-bold tcolor">
                        Affordable Packages
                    </h3>

                    <!-- Subtitle with custom font weight and color -->
                    <h4 class="tbk__subtitle fw-vthin dark-gray">
                        We provide you with a life time License for the package that matches
                        your business. Choose from our all packed packages and boost your business.
                    </h4>
                </div>
                <!--/ Title -->
            </div>
            <div class="col-md-12 col-sm-12">
                <!-- Pricing table element with 4 columns -->
                <div class="pricing-table-element" data-columns="4">
                    <!-- Plan -->
                    <div class="plan-column featured ">
                        <ul>
                            <!-- Title -->
                            <li class="plan-title">
                                <div class="inner-cell">
                                    Uzzar Essential
                                </div>
                            </li>
                            <!--/ Title -->

                            <!-- Price -->
                            <li class="subscription-price">
                                <div class="inner-cell">
                                    <span class="currency">Tsh</span>
                                    <span class="price">50,000</span>
                                    per License
                                </div>
                            </li>
                            <!--/ Price -->

                            <!-- Cell #1 -->
                            <li>
                                <div class="inner-cell">
                                    Dashboard
                                </div>
                            </li>
                            <!--/ Cell #1 -->

                            <!-- Cell #2 -->
                            <li>
                                <div class="inner-cell">
                                    Point of Sale
                                </div>
                            </li>
                            <!--/ Cell #2 -->

                            <!-- Cell #3 -->
                            <li>
                                <div class="inner-cell">
                                    Invoicing
                                </div>
                            </li>
                            <!--/ Cell #3 -->

                            <!-- Cell #4 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #4 -->

                            <!-- Cell #5 -->
                            <li>
                                <div class="inner-cell">
                                    Supplier
                                </div>
                            </li>
                            <!--/ Cell #5 -->

                            <!-- Cell #6 -->
                            <li>
                                <div class="inner-cell">
                                    Products
                                </div>
                            </li>
                            <!--/ Cell #6 -->

                            <!-- Cell #7 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #7 -->

                            <!-- Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Purchases
                                </div>
                            </li>
                            <!--/ Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Reports
                                </div>
                            </li>
                            <!-- Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #12 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #12 -->
                            <!-- Cell #13 -->
                            <li>
                                <div class="inner-cell">
                                    <!-- Button -->
                                    <a href="#contact_panel" class="btn btn-fullcolor kl-cta-ribbon"
                                        target="_self">Request Quote</a>
                                    <!--/ Button -->
                                </div>
                            </li>
                            <!--/ Cell #13 -->
                        </ul>
                    </div>
                    <!--/ Plan -->

                    <!-- Featured plan -->
                    <div class="plan-column">
                        <ul>
                            <!-- Title -->
                            <li class="plan-title">
                                <div class="inner-cell">
                                    Uzarr Allied
                                </div>
                            </li>
                            <!--/ Title -->

                            <!-- Price -->
                            <li class="subscription-price">
                                <div class="inner-cell">
                                    <span class="currency">Tsh</span>
                                    <span class="price">225,000</span>
                                    per License
                                </div>
                            </li>
                            <!--/ Price -->

                            <!-- Cell #1 -->
                            <li>
                                <div class="inner-cell">
                                    Dashboard
                                </div>
                            </li>
                            <!--/ Cell #1 -->

                            <!-- Cell #2 -->
                            <li>
                                <div class="inner-cell">
                                    Point of Sale
                                </div>
                            </li>
                            <!--/ Cell #2 -->

                            <!-- Cell #3 -->
                            <li>
                                <div class="inner-cell">
                                    Invoicing
                                </div>
                            </li>
                            <!--/ Cell #3 -->

                            <!-- Cell #4 -->
                            <li>
                                <div class="inner-cell">
                                    Customers
                                </div>
                            </li>
                            <!--/ Cell #4 -->

                            <!-- Cell #5 -->
                            <li>
                                <div class="inner-cell">
                                    Supplier
                                </div>
                            </li>
                            <!--/ Cell #5 -->

                            <!-- Cell #6 -->
                            <li>
                                <div class="inner-cell">
                                    Products
                                </div>
                            </li>
                            <!--/ Cell #6 -->

                            <!-- Cell #7 -->
                            <li>
                                <div class="inner-cell">
                                    Stock Transfer
                                </div>
                            </li>
                            <!--/ Cell #7 -->

                            <!-- Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Purchases
                                </div>
                            </li>
                            <!--/ Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Reports
                                </div>
                            </li>
                            <!-- Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    Gift Cards
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    Analytics
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    SMS
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    Store Changes
                                </div>
                            </li>
                            <!--/ Cell #12 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #12 -->

                            <!-- Cell #13 -->
                            <li>
                                <div class="inner-cell">
                                    <!-- Button -->
                                    <a href="#contact_panel" class="btn btn-fullcolor kl-cta-ribbon"
                                        target="_self">Request Quote</a>
                                    <!--/ Button -->
                                </div>
                            </li>
                            <!--/ Cell #13 -->
                        </ul>
                    </div>
                    <!--/ Featured plan -->

                    <!-- Plan -->
                    <div class="plan-column ">
                        <ul>
                            <!-- Title -->
                            <li class="plan-title">
                                <div class="inner-cell">
                                    Uzarr Handler
                                </div>
                            </li>
                            <!--/ Title -->

                            <!-- Price -->
                            <li class="subscription-price">
                                <div class="inner-cell">
                                    <span class="currency">Tsh</span>
                                    <span class="price">675,000</span>
                                    per License
                                </div>
                            </li>
                            <!--/ Price -->

                            <!-- Cell #1 -->
                            <li>
                                <div class="inner-cell">
                                    Dashboard
                                </div>
                            </li>
                            <!--/ Cell #1 -->

                            <!-- Cell #2 -->
                            <li>
                                <div class="inner-cell">
                                    Point of Sale
                                </div>
                            </li>
                            <!--/ Cell #2 -->

                            <!-- Cell #3 -->
                            <li>
                                <div class="inner-cell">
                                    Invoicing
                                </div>
                            </li>
                            <!--/ Cell #3 -->

                            <!-- Cell #4 -->
                            <li>
                                <div class="inner-cell">
                                    Customers
                                </div>
                            </li>
                            <!--/ Cell #4 -->

                            <!-- Cell #5 -->
                            <li>
                                <div class="inner-cell">
                                    Supplier
                                </div>
                            </li>
                            <!--/ Cell #5 -->

                            <!-- Cell #6 -->
                            <li>
                                <div class="inner-cell">
                                    Products
                                </div>
                            </li>
                            <!--/ Cell #6 -->

                            <!-- Cell #7 -->
                            <li>
                                <div class="inner-cell">
                                    Stock Transfer
                                </div>
                            </li>
                            <!--/ Cell #7 -->

                            <!-- Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Purchases
                                </div>
                            </li>
                            <!--/ Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Reports
                                </div>
                            </li>
                            <!-- Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    Gift Cards
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    Analytics
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    SMS
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    Accounting
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    Expenditure
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    Loan Manager
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    Store Changes
                                </div>
                            </li>
                            <!--/ Cell #12 -->
                            <li>
                                <div class="inner-cell">
                                    -
                                </div>
                            </li>
                            <!--/ Cell #12 -->

                            <!-- Cell #13 -->
                            <li>
                                <div class="inner-cell">
                                    <!-- Button -->
                                    <a href="#contact_panel" class="btn btn-fullcolor kl-cta-ribbon"
                                        target="_self">Request Quote</a>
                                    <!--/ Button -->
                                </div>
                            </li>
                            <!--/ Cell #13 -->
                        </ul>
                    </div>
                    <!--/ Plan -->

                    <!-- Plan -->
                    <div class="plan-column ">
                        <ul>
                            <!-- Title -->
                            <li class="plan-title">
                                <div class="inner-cell">
                                    Uzarr Paramount
                                </div>
                            </li>
                            <!--/ Title -->

                            <!-- Price -->
                            <li class="subscription-price">
                                <div class="inner-cell">
                                    <span class="currency">Tsh</span>
                                    <span class="price">2,400,000</span>
                                    per License
                                </div>
                            </li>
                            <!--/ Price -->

                            <!-- Cell #1 -->
                            <li>
                                <div class="inner-cell">
                                    Dashboard
                                </div>
                            </li>
                            <!--/ Cell #1 -->

                            <!-- Cell #2 -->
                            <li>
                                <div class="inner-cell">
                                    Point of Sale
                                </div>
                            </li>
                            <!--/ Cell #2 -->

                            <!-- Cell #3 -->
                            <li>
                                <div class="inner-cell">
                                    Invoicing
                                </div>
                            </li>
                            <!--/ Cell #3 -->

                            <!-- Cell #4 -->
                            <li>
                                <div class="inner-cell">
                                    Customers
                                </div>
                            </li>
                            <!--/ Cell #4 -->

                            <!-- Cell #5 -->
                            <li>
                                <div class="inner-cell">
                                    Supplier
                                </div>
                            </li>
                            <!--/ Cell #5 -->

                            <!-- Cell #6 -->
                            <li>
                                <div class="inner-cell">
                                    Products
                                </div>
                            </li>
                            <!--/ Cell #6 -->

                            <!-- Cell #7 -->
                            <li>
                                <div class="inner-cell">
                                    Stock Transfer
                                </div>
                            </li>
                            <!--/ Cell #7 -->

                            <!-- Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Purchases
                                </div>
                            </li>
                            <!--/ Cell #8 -->
                            <li>
                                <div class="inner-cell">
                                    Reports
                                </div>
                            </li>
                            <!-- Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    Gift Cards
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    Analytics
                                </div>
                            </li>
                            <!--/ Cell #9 -->
                            <li>
                                <div class="inner-cell">
                                    SMS
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    Accounting
                                </div>
                            </li>
                            <!--/ Cell #10 -->
                            <li>
                                <div class="inner-cell">
                                    Expenditure
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    Loan Manager
                                </div>
                            </li>
                            <!--/ Cell #11 -->
                            <li>
                                <div class="inner-cell">
                                    Store Changes
                                </div>
                            </li>
                            <!--/ Cell #12 -->
                            <li>
                                <div class="inner-cell">
                                    Payment Gateway Integrations
                                </div>
                            </li>
                            <!--/ Cell #12 -->

                            <!-- Cell #13 -->
                            <li>
                                <div class="inner-cell">
                                    <!-- Button -->
                                    <a href="#contact_panel" class="btn btn-fullcolor kl-cta-ribbon"
                                        target="_self">Request Quote</a>
                                    <!--/ Button -->
                                </div>
                            </li>
                            <!--/ Cell #13 -->
                        </ul>
                    </div>
                    <!--/ Plan -->
                </div>
                <!--/ Pricing table element with 4 columns -->
            </div>
            <!--/ col-md-12 col-sm-12 -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
    <!-- Bottom mask style 1 -->
    <div class="kl-bottommask kl-bottommask--shadow">
    </div>
    <!--/ Bottom mask style 1 -->
</section>
<!--/ Pricing element - section with bottom padding -->

<!-- Call out banner #2 element section with custom paddings -->
<section class="hg_section ptop-65 pbottom-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <!-- Call-out banner element - style 2 -->
                <div class="callout-banner clearfix">
                    <div class="row">
                        <div class="col-sm-10">
                            <!-- Title -->
                            <h3 class="m_title"><span class="fw-thin fw-semibold">Are you Worried on which is
                                    the best PACKAGE for your business? Get to know
                                    our application's features in details and how they can help with your
                                    business.
                                </span></h3>
                            <!--/ Title -->
                        </div>
                        <!--/ col-sm-10 -->

                        <div class="col-sm-2">
                            <!-- Rectangle hover link -->
                            <a href="/#uzzar-features" class="circlehover with-symbol style2" data-size=""
                                data-position="top-left" data-align="right">
                                <!-- Text -->
                                <span class="text">LEARN
                                    <span class="fw-normal">MORE</span>
                                </span>
                                <!--/ Text -->

                                <!-- Image/Icon -->
                                <span class="symbol">
                                    <img src="images/callout2.svg" alt="">
                                </span>
                                <!--/ Image/Icon -->

                                <!-- Play icon - hidden default -->
                                <div class="triangle">
                                    <span class="play-icon"></span>
                                </div>
                                <!--/ Play icon - hidden default -->
                            </a>
                            <!--/ Rectangle hover link -->
                        </div>
                        <!--/ col-sm-2 -->
                    </div>
                    <!--/ row -->
                </div>
                <!--/ Call-out banner element - style 2 -->
            </div>
            <!--/ col-md-12 col-sm-12 -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>
<!--/ Call out banner #2 element section with custom paddings -->
@endsection