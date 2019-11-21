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
                                <span><strong>CONTACT US</strong></span>
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



<!-- Company section with custom paddings -->
<section id="company" class="hg_section bg-white pt-80 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- Title element with custom bottom padding -->
                        <div
                            class="kl-title-block clearfix text-left tbk-symbol--line tbk-icon-pos--after-title pbottom-0">
                            <!-- Title with kl-font-alt font, custom size and line height bold style -->
                            <h3 class="tbk__title kl-font-alt fs-xxl fw-bold tcolor">
                                Get in touch with US
                            </h3>
                            <!--/ Title with kl-font-alt font, custom size and line height bold style -->

                            <!-- symbol -->
                            <span class="tbk__symbol ">
                                <span>
                                </span>
                            </span>
                            <!--/ symbol -->

                            <!-- Sub-Title -->
                            <h4 class="tbk__subtitle lh-32 fw-vthin">
                                Stay connected and in touch with us through our various channels of
                                communication. We will be glad to hear from you or have you at
                                our offices for a chat.
                            </h4>
                            <p>
                                P. O. Box 14272, Bukoba Street, House No. 13, Mwenge Dar es Salaam, Tanzania
                            </p>
                            <p>Tell: +255 752 940 596 </p>
                            <p>Phone: +255 677 069 713 </p>
                            <p>Email: info@qlicue.co.tz </p>

                            <!--/ Sub-Title -->
                        </div>
                        <!--/ Title element with custom bottom padding -->
                        <!-- Separator style 2 -->
                        <div class="hg_separator style2 clearfix"></div>
                    </div>
                    <!--/ col-sm-12 col-md-12 col-lg-12 -->

                    <div class="col-sm-12 col-md-12 col-lg-12 pt-30">
                        <!-- Title element -->
                        <div
                            class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol--  tbk-icon-pos--left-title">
                            <!-- Title with custom font size and bold style -->
                            <h4 class="tbk__title fs-normal fw-bold">
                                Reach US out.
                            </h4>
                        </div>
                        <!--/ Title element -->
                    </div>
                    <!--/ col-sm-12 col-md-12 col-lg-12 pt-30 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- Services box element modern style -->
                        <div class="services_box services_box--modern sb--hasicon">
                            <!-- Service box wrapper -->
                            <div class="services_box__inner clearfix">
                                <!-- Icon content -->
                                <div class="services_box__icon">
                                    <!-- Icon wrapper -->
                                    <div class="services_box__icon-inner">
                                        <!-- Icon = .icon-process2  -->
                                        <span class="services_box__fonticon icon-process2"></span>
                                    </div>
                                    <!--/ Icon wrapper -->
                                </div>
                                <!--/ Icon content -->

                                <!-- Content -->
                                <div class="services_box__content">
                                    <!-- Title -->
                                    <h4 class="services_box__title">
                                        Technical Support
                                    </h4>
                                    <!--/ Title -->

                                    <!-- Description -->
                                    <div class="services_box__desc">
                                        <p>
                                            For Uzzar technical assistance, checkout our technical team for
                                            imadiate support .
                                        </p>
                                    </div>
                                    <!--/ Description -->

                                    <!-- List wrapper -->
                                    <div class="services_box__list-wrapper">
                                        <span class="services_box__list-bg"></span>
                                        <!-- List -->
                                        <ul class="services_box__list">
                                            <li><span class="services_box__list-text">Tell: +255 777 777
                                                    777</span></li>
                                            <li><span class="services_box__list-text">Mobile: +255 777 777
                                                    777</span></li>
                                            <li><span class="services_box__list-text">Email:
                                                    support@uzzar.com</span></li>
                                        </ul>
                                        <!--/ List -->
                                    </div>
                                    <!--/ List wrapper -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Service box wrapper -->
                        </div>
                        <!--/ Services box element modern style -->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- Services box element modern style -->
                        <div class="services_box services_box--modern sb--hasicon">
                            <!-- Service box wrapper -->
                            <div class="services_box__inner clearfix">
                                <!-- Icon content -->
                                <div class="services_box__icon">
                                    <!-- Icon wrapper -->
                                    <div class="services_box__icon-inner">
                                        <!-- Icon = .icon-process2  -->
                                        <span class="services_box__fonticon icon-process2"></span>
                                    </div>
                                    <!--/ Icon wrapper -->
                                </div>
                                <!--/ Icon content -->

                                <!-- Content -->
                                <div class="services_box__content">
                                    <!-- Title -->
                                    <h4 class="services_box__title">
                                        graphic design
                                    </h4>
                                    <!--/ Title -->

                                    <!-- Description -->
                                    <div class="services_box__desc">
                                        <p>
                                            For Uzzar sales issues, checkout our sales team for imadiate
                                            response .
                                        </p>
                                    </div>
                                    <!--/ Description -->

                                    <!-- List wrapper -->
                                    <div class="services_box__list-wrapper">
                                        <span class="services_box__list-bg"></span>
                                        <!-- List -->
                                        <ul class="services_box__list">
                                            <li><span class="services_box__list-text">Tell: +255 777 777
                                                    777</span></li>
                                            <li><span class="services_box__list-text">Mobile: +255 777 777
                                                    777</span></li>
                                            <li><span class="services_box__list-text">Email:
                                                    sales@uzzar.com</span></li>
                                        </ul>
                                        <!--/ List -->
                                    </div>
                                    <!--/ List wrapper -->
                                </div>
                                <!--/ Content -->
                            </div>
                            <!--/ Service box wrapper -->
                        </div>
                        <!--/ Services box element modern style -->
                    </div>
                </div>
                <!--/ row -->
            </div>
            <!--/ col-sm-12 col-md-12 col-lg-6 -->

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- Circle text box element / style 2 -->
                        <div class="circle-text-box style2">
                            <!-- Circle title wrapper -->
                            <div class="circle-headline">
                                <!-- Title element -->
                                <div
                                    class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol--  tbk-icon-pos--left-title">
                                    <!-- Title with custom font size and bold style -->
                                    <h4 class="tbk__title fs-normal fw-bold">
                                        Write to US.
                                    </h4>
                                </div>
                                <!--/ Title element -->

                                <!-- Contact form element -->
                                <div class="contactForm">
                                    <form action="php_helpers/_contact-process.php" method="post"
                                        class="contact_form row" enctype="multipart/form-data">
                                        <!-- Response wrapper -->
                                        <div class="cf_response"></div>

                                        <div class="col-sm-6 kl-fancy-form">
                                            <input type="text" name="name" id="cf_name" class="form-control"
                                                placeholder="first name" value="" tabindex="1"
                                                maxlength="35" required>
                                            <label class="control-label">
                                                FIRSTNAME
                                            </label>
                                        </div>

                                        <div class="col-sm-6 kl-fancy-form">
                                            <input type="text" name="lastname" id="cf_lastname" class="form-control"
                                                placeholder="second name" value="" tabindex="1"
                                                maxlength="35" required>
                                            <label class="control-label">
                                                LASTNAME
                                            </label>
                                        </div>

                                        <div class="col-sm-12 kl-fancy-form">
                                            <input type="text" name="email" id="cf_email" class="form-control h5-email"
                                                placeholder="email address" value="" tabindex="1"
                                                maxlength="35" required>
                                            <label class="control-label">
                                                EMAIL
                                            </label>
                                        </div>

                                        <div class="col-sm-12 kl-fancy-form">
                                            <input type="text" name="subject" id="cf_subject" class="form-control"
                                                placeholder="subject message" value="" tabindex="1"
                                                maxlength="35" required>
                                            <label class="control-label">
                                                SUBJECT
                                            </label>
                                        </div>

                                        <div class="col-sm-12 kl-fancy-form">
                                            <textarea name="message" id="cf_message" class="form-control" cols="30"
                                                rows="10" placeholder="Your message" tabindex="4" required></textarea>
                                            <label class="control-label">
                                                MESSAGE
                                            </label>
                                        </div>

                                        <!-- Google recaptcha required site-key (change with yours => https://www.google.com/recaptcha/admin#list) -->
                                        <!-- <div class="g-recaptcha" data-sitekey="SITE-KEY"></div> -->
                                        <!--/ Google recaptcha required site-key -->

                                        <div class="col-sm-12">
                                            <!-- Contact form send button -->
                                            <button class="btn btn-fullcolor" type="submit">
                                                Send
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!--/ Contact form element -->
                                <!-- Separator style 2 -->
                                <div class="hg_separator style2 clearfix"></div>
                            </div>
                            <!--/ Circle text box element / style 2 -->

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 pt-30">
                                    <!-- Title element -->
                                    <div
                                        class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol--  tbk-icon-pos--left-title">
                                        <!-- Title with custom font size and bold style -->
                                        <h4 class="tbk__title fs-normal fw-bold">
                                            Socialise with US.
                                        </h4>
                                    </div>
                                    <!--/ Title element -->
                                </div>
                                <!--/ col-sm-12 col-md-12 col-lg-12 pt-30 -->

                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <!-- Icon box element left aligned -->
                                    <div
                                        class="kl-iconbox kl-iconbox--type-icon kl-iconbox--align-left text-left kl-iconbox--theme-default">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon wrapper -->
                                            <div class="kl-iconbox__icon-wrapper">
                                                <!-- Link icon -->
                                                <a href="#" class="kl-iconbox__link" title="" target="_self">
                                                    <!-- Icon = .icon-facebook colored -->
                                                    <span class="kl-iconbox__icon fab fa-facebook-f color"></span>
                                                </a>
                                                <!--/ Link icon -->
                                            </div>
                                            <!--/ .kl-iconbox__icon-wrapper -->

                                        </div>
                                        <!--/ .kl-iconbox__inner -->
                                    </div>
                                    <!--/ Icon box element left aligned -->
                                </div>
                                <!--/ col-sm-3 col-md-3 col-lg-3 -->

                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <!-- Icon box element left aligned -->
                                    <div
                                        class="kl-iconbox kl-iconbox--type-icon kl-iconbox--align-left text-left kl-iconbox--theme-default">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon wrapper -->
                                            <div class="kl-iconbox__icon-wrapper">
                                                <!-- Link icon -->
                                                <a href="#" class="kl-iconbox__link" title="" target="_self">
                                                    <!-- Icon = .icon-twitter colored -->
                                                    <span class="kl-iconbox__icon fab fa-twitter color"></span>
                                                </a>
                                                <!--/ Link icon -->
                                            </div>
                                            <!--/ .kl-iconbox__icon-wrapper -->
                                        </div>
                                        <!--/ .kl-iconbox__inner -->
                                    </div>
                                    <!--/ Icon box element left aligned -->
                                </div>
                                <!--/ col-sm-3 col-md-3 col-lg-3 -->

                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <!-- Icon box element left aligned -->
                                    <div
                                        class="kl-iconbox kl-iconbox--type-icon kl-iconbox--align-left text-left kl-iconbox--theme-default">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon wrapper -->
                                            <div class="kl-iconbox__icon-wrapper">
                                                <!-- Link icon -->
                                                <a href="#" class="kl-iconbox__link" title="" target="_self">
                                                    <!-- Icon = .icon-youtube colored -->
                                                    <span class="kl-iconbox__icon fab fa-instagram color"></span>
                                                </a>
                                                <!--/ Link icon -->
                                            </div>
                                            <!--/ .kl-iconbox__icon-wrapper -->

                                        </div>
                                        <!--/ .kl-iconbox__inner -->
                                    </div>
                                    <!--/ Icon box element left aligned -->
                                </div>
                                <!--/ col-sm-3 col-md-3 col-lg-3 -->

                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <!-- Icon box element left aligned -->
                                    <div
                                        class="kl-iconbox kl-iconbox--type-icon kl-iconbox--align-left text-left kl-iconbox--theme-default">
                                        <div class="kl-iconbox__inner">
                                            <!-- Icon wrapper -->
                                            <div class="kl-iconbox__icon-wrapper">
                                                <!-- Link icon -->
                                                <a href="#" class="kl-iconbox__link" title="" target="_self">
                                                    <!-- Icon = .icon-youtube colored -->
                                                    <span class="kl-iconbox__icon fab fa-youtube color"></span>
                                                </a>
                                                <!--/ Link icon -->
                                            </div>
                                            <!--/ .kl-iconbox__icon-wrapper -->

                                        </div>
                                        <!--/ .kl-iconbox__inner -->
                                    </div>
                                    <!--/ Icon box element left aligned -->
                                </div>
                                <!--/ col-sm-3 col-md-3 col-lg-3 -->
                            </div>
                            <!--/ row -->
                        </div>
                        <!--/ col-sm-12 col-md-12 col-lg-12 -->
                    </div>
                    <!--/ row -->
                </div>
                <!--/ col-sm-12 col-md-12 col-lg-6 -->
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
</section>
<!--/ Company section with custom paddings -->
@endsection