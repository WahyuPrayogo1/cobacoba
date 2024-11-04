<header
    class="header-style1 menu_area-light header full-screen position-relative bg-img cover-background bg-dark banner1"
    data-background="{{ asset('assets/img/bg/bg-09.png') }}">

    <div class="navbar-default border-bottom border-color-light-white">

        <!-- start top search -->
        <div class="top-search bg-primary">
            <div class="container">
                <form class="search-form" action="https://crypto.websitelayout.net/search.html" method="GET"
                    accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fas fa-search display-28 text-white"
                                type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                            placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times display-28"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="index-2.html" class="navbar-brand"><img id="logo"
                                        src="{{ asset('assets/img/logos/logo-inner.png') }}" alt="logo"></a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler bg-primary"></div>

                            <!-- start menu area -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li><a href="#!">Home</a>
                                </li>
                                <li><a href="#!">Platform</a>
                                    <ul>
                                        <li><a href="about.html">Wallet</a></li>
                                        <li><a href="how-it-work.html">Tokenomics</a></li>
                                        <li><a href="how-it-work.html">Roadmap</a></li>
                                        <li><a href="how-it-work.html">White Paper</a></li>
                                        <li><a href="how-it-work.html">Deviden</a></li>
                                    </ul>
                                </li>
                                <li><a href="#!">Resources</a>
                                    <ul>
                                        <li><a href="about.html">Blogs</a></li>
                                        <li><a href="how-it-work.html">Q&A</a></li>
                                        <li><a href="how-it-work.html">How To Buy</a></li>
                                    </ul>
                                </li>
                                <li><a href="#!">Community</a>
                                    <ul>
                                        <li><a href="about.html">Contact Us</a></li>
                                        <li><a href="how-it-work.html">Referral</a></li>
                                        <li><a href="how-it-work.html">AirDrop</a></li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="d-none d-xl-inline-block"><a href="#!"
                                            class="butn primary-butn md border border-primary">$Beli Tricoin</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-column py-12 py-sm-8 py-lg-0 pt-5">
        <div class="row align-items-center min-vh-100">
            <div class="col-12">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 mt-5">
                        <h1
                            class="text-white display-22 display-sm-16 display-xl-10 display-xxl-4 font-weight-700 mb-1-6 w-xxl-85 text-capitalize">
                            Membangun Masa Depan dengan Tricoin</h1>
                        <p class="mb-2-2 w-xl-95 w-xxl-75 display-28 opacity9 text-white"> Tricoin
                            menawarkan transaksi cepat, aman, dan biaya rendah untuk masa depan keuangan yang
                            lebih mudah dan transparan. Gabunglah dalam revolusi digital bersama kami.</p>
                        <a href="about.html" class="butn primary-butn">Apa itu Tricoin ?</a>
                    </div>
                    <div class="col-lg-5 col-xxl-4 offset-xxl-1 mt-5">
                        <div class="bg-white-opacity p-1-9 border-radius-5">
                            <h3 class="text-center text-capitalize mb-4">Kalkulator Tricoin</h3>
                            <form action="#!" method="post">
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="quform-input">
                                                    <input class="form-control border-radius-5"
                                                        id="cryptocurrency-amount" type="text"
                                                        name="cryptocurrency-amount" placeholder="Enter Amount">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Select element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="quform-input">
                                                    <select id="cryptocurrency-list"
                                                        class="form-control form-select border-radius-5"
                                                        name="cryptocurrency-list">
                                                        <option selected>Rupiah (IDR)</option>
                                                        <option>Dolar Amerika Serikat d (USD)</option>
                                                        <option>Euro (EUR)</option>
                                                        <option>Pound Sterling (GBP)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Select element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="quform-input">
                                                    <input class="form-control border-radius-5" id="currency-amount"
                                                        type="text" name="currency-amount"
                                                        placeholder="$TRICOIN You receive" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-color-light-white pt-9 mb-5"></div>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <h2 class="h4 text-white font-weight-400 text-capitalize mb-2-5">
                                Kami bekerja dengan yang Terbaik</h2>
                            <div class="client2-carousel owl-carousel owl-theme">
                                <div class="client-wrapper">
                                    <img src="{{ asset('assets/img/partners/partner-07.png') }}" alt="...">
                                </div>
                                <div class="client-wrapper">
                                    <img src="{{ asset('assets/img/partners/partner-08.png') }}" alt="...">
                                </div>
                                <div class="client-wrapper">
                                    <img src="{{ asset('assets/img/partners/partner-09.png') }}" alt="...">
                                </div>
                                <div class="client-wrapper">
                                    <img src="{{ asset('assets/img/partners/partner-10.png') }}" alt="...">
                                </div>
                                <div class="client-wrapper">
                                    <img src="{{ asset('assets/img/partners/partner-11.png') }}" alt="...">
                                </div>
                                <div class="client-wrapper">
                                    <img src="{{ asset('assets/img/partners/partner-12.png') }}" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
