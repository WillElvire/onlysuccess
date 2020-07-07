<header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                

                                <a href="https://wa.me/22570104792?text=">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="mailTo:o.investment@yahoo.com"> <i class="fa fa-envelope"></i> o.investment@yahoo.com</a></li>
                                    <li><a href="tel:0022558726750"> <i class="fa fa-phone"></i> +22558726750</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="/" style="color:white">
                                        <img src="/logo2.png" width="70px" height="50px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="/">Accueil</a></li>
                                            
                                            <li><a href="/faq">faq</a></li>
                                            <li><a href="/action/inscription">Inscription</a></li>
                                            @if(\Session::has('id'))
                                            <li><a href="/user/home/{{\session('id')}}">Back office</a></li>
                                            @else

                                              <li><a href="/user/connection">Back office</a></li>
                                            @endif
                                            
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                   
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="/tableaux">Voir nos tableaux</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>