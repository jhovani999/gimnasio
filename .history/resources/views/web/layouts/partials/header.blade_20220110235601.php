    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area header-default header-transparent header-style sticky-header" style="    padding: 18px 0;">

        <div class="container">


            <div class="row row-gutter-0 align-items-center">

                <!-- Header Top -->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="inner-container">
                            <div class="left-column">
                                <ul class="contact-info">
                                    <li><a href="#" style="font-size: 14px;">INICIO</a></li>
                                    <li><a href="#" style="font-size: 14px;">QUIENES SOMOS</a></li>
                                    <li><a href="#" style="font-size: 14px;">LOCALIZACIÓN</a></li>
                                    <li><a href="viewContacto" style="font-size: 14px;">CONTACTO</a></li>
                                </ul>
                            </div>
                            <div class="right-column">
                                <ul class="social-icon">
                                    <li><a href="#">Email: Info@hellotraining.es</a></li>
                                    <li><a href="#">Telf: 638572210</a></li>
                                </ul>
                            </div>
                            <div class="widget-social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                











                <footer class="footer-area default-style bg-img" data-bg-img="/template_web/assets/img/photos/bg-f1.png">
        <div class="footer-main">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="widget-item mb-sm-30">
                            <div class="about-widget">
                                <a class="footer-logo" href="#">
                    
                                </a>
                               
                                <div class="opening-time">
                                    <h4 class="title">Hora de apertura</h4>
                                    <ul>
                                     
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="widget-item pl-20 pl-sm-0 mb-sm-30 mb-xs-40">
                            <h4>ENLACE ÚTIL</h4>
                            <nav class="widget-menu-wrap">
                                <ul class="nav-menu nav">
                                    <li><a href="#">Hello Training</a></li>
                                    <li><a href="#">Equipo</a></li>
                                    <li><a href="#">Cursos</a></li>
                                    <li><a href="#">Tienda</a></li>
                                    <li><a href="viewContacto">Contacto</a></li>
                                </ul>
                              
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="widget-item mb-xs-50">
                            <h4>CONTACTO INFORMACIÓN</h4>
                            <div class="widget-contact-info">
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="/template_web/assets/img/icons/1.png" alt="Logo">
                                    </div>
                                    <div class="content">
                      
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="/template_web/assets/img/icons/2.png" alt="Logo">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Teléfono</h4>
                                        <ul>
                    
                                        </ul>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="/template_web/assets/img/icons/3.png" alt="Logo">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Web</h4>
                                        <ul>
                     
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget-item">
                            <h4>BOLETIN INFORMATIVO</h4>
                            <div class="widget-newsletter">
                        
                                <form class="newsletter-form input-btn-group">
                                    <input class="form-control" type="text" placeholder="Email here">
                                    <button class="btn btn-theme" type="button"><i
                                            class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>
                            <div class="widget-social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="widget-copyright text-center">
                                <p><i class="fa fa-copyright"></i> 2022 Made with <i class="fa fa-heart"></i> by <a
                                        target="_blank" href="#">Template Design</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>















                <?php  
                    $footer_ = DB::table('home_footer')->where('id_footer', '=',1)->get();
                ?>
                <div class="col-4 col-xs-3 col-sm-3 col-md-3 col-xl-3">
                    <div class="header-logo-area">
                        <a href="/">
                            <img class="logo-main" src="{{ $footer_[0]->url_image }}" alt="Logo" />
                            <img class="logo-light" src="{{ $footer_[0]->url_image }}" alt="Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-9 col-xl-9">
                    <div class="header-align">
                        <div class="header-navigation-area d-none d-xl-block">
                            <ul class="main-menu nav position-relative">
                                <li class="has-submenu"><a href="#">Servicios</a>
                                    <ul class="submenu-nav">
                                        <li><a href="viewServicioTenis">Tenis</a></li>
                                        <li><a href="viewServicioPadel">Padel</a></li>
                                        <li><a href="viewServicioFisio">Fisio</a></li>
                                        <li><a href="viewServicioFitness">Fitness</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Packs</a></li>
                                <li><a href="#">Equipo</a></li>
                                <li class="has-submenu"><a href="#">Novedades</a>
                                    <ul class="submenu-nav">
                                        <li><a href="#">Eventos</a></li>
                                        <li><a href="#">Bonos</a></li>
                                        <li><a href="#">Noticias</a></li>
                                        <li><a href="#">Retos</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="#">Tienda</a></li>
                                <li><a href="viewContacto">Contacto</a></li>
                            </ul>
                        </div>

                        <div class="header-action-area">
                            <div class="header-action-cart d-none d-xl-block">

                                <?php if (Auth::check()) { ?>
                                <a href="/logout" class="supramenu__link"><i class="fa fa-power-off"></i>Logout</a>
                                <?php } else { ?>
                                <button class="btn-cart cart-icon" onclick="window.location.href='/admin/homes'">
                                    <span class="cart-count">?</span>
                                    <i class="pe-7s-users"></i>
                                </button>

                                <?php } ?>

                            </div>
                            <button class="btn-menu d-xl-none">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->