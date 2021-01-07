        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-8 col-sm-6">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@olempos.com </a></li>
                                    <li><a href="tel:00494421500693"><i class="fa fa-phone"></i> 00494421500693 </a></li>
                                    <li><h4> <i class="fa fa-map-marker"></i> Grenzstrasse 10, 26382 Wilhelmshaven Germany </h4></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="top-social">
                                <span class="share-link"> Folgen Sie uns: </span>
								<ul>
									<li><a href="https://www.facebook.com/Fiss.Deutschland/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul> 
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="../../../?lang=ger">
                                    <img src="<?=IMG?>logo/logo.png" alt="">
                                </a>
                            </div>
                            <div class="lang">
                                <?php $url = isset($_GET['tag']) ? 'http://olymposweb.com:81'.str_replace('lang=ger&','',$_SERVER['REQUEST_URI']) : 'http://olymposweb.com:81'.str_replace('?lang=ger','',$_SERVER['REQUEST_URI']) ?>
                                <a href="<?=$url?>"> عربي </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option start -->
                                <form action="../../../search?lang=ger" method="POST">
                                    <div class="search-option">
                                        <input name="tag" type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                </form>
                                <!-- search option end -->
                                <div class="slice-btn"><span class="icon icon-menu"></span></div>
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li>
                                                <a class="pagess" href="../../../?lang=ger"> Home </a>
											</li>
											<li>
                                                <a class="pagess" href="../../../about_us?lang=ger"> About Us </a>
											</li>
											<li>
                                                <a class="pagess" href="../../../our_services?lang=ger"> Our Services </a>
											</li>
											<li>
                                                <a class="pagess" href="../../../blogs?lang=ger"> Blog </a>
											</li>
											<li>
                                                <a href="../../../contact_us?lang=ger"> Contact Us </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-right-link">
                                <!-- search option start -->
                                <form action="../../../search" method="POST">
                                    <div class="search-option">
                                        <input name="tag" type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                </form>
                                <!-- search option end -->
                                <div class="slice-btn"><span class="icon icon-menu"></span></div>
                            </div>
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="../../../?lang=ger"><img src="<?=IMG?>logo/logo.png" alt="" /></a>
                                </div>
                                
                                <div class="lang">
                                   <a href="../../../?lang=ger"> عربي </a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li>
                                            <a class="pagess" href="../../../?lang=ger"> Home </a>
                                        </li>
                                        <li>
                                            <a class="pagess" href="../../../about_us?lang=ger"> About Us </a>
                                        </li>
                                        <li>
                                            <a class="pagess" href="../../../our_services?lang=ger"> Our Services </a>
                                        </li>
                                        <li>
                                            <a class="pagess" href="../../../blogs?lang=ger"> Blog </a>
                                        </li>
                                        <li>
                                            <a href="../../../contact_us?lang=ger"> Contact Us </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->

	<div class="layer-drop"></div>
        <!--Appointment Box-->
		<div class="appointment-wrapper">
			<div class="appoint-box">
				<div class="cross-icon"><span class="icon icon-cross"></span></div>
				<div class="title">
					<h2> Kontaktieren Sie uns schneller </h2>
					<div class="separator"></div>
				</div>
				<div class="contact-icon">
                    <div class="single-contact">
						<h5> Hauptsitz </h5>
						<h4><i class="fa fa-map"></i><span> Grenzstrasse 10, 26382 Wilhelmshaven Germany</span></h4>
                        <a href="tel:00494421500693"><i class="fa fa-phone"></i><span> 00494421500693 </span></a>

						<a href="#"><i class="fa fa-envelope"></i><span> info@olempos.com </span></a>
					</div>
					<div class="quote-icons">
						<h5> Folgen Sie uns </h5>
                        <ul>
                            <li><a href="https://www.facebook.com/Fiss.Deutschland/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
					</div>
				</div>
				<div class="row form-row">
					<form id="contactForm" method="POST" action="../../contact_us/contact" class="contact-form">
                        <input type="hidden" name="id" id="paramContact"/>
						<div class="col-md-12 inner-column col-sm-12 col-xs-12">
							<input name="name" type="text" id="name" class="form-control" placeholder="Der Name" required data-error="Bitte geben Sie den Namen ein">
							<div class="help-block with-errors"></div>
							<input name="email" type="email" class="email form-control" id="email" placeholder="E-Mail" required data-error="Bitte geben Sie Ihre E-Mail-Adresse ein">
							<div class="help-block with-errors"></div>
							<input name="msg_subject" type="text" id="msg_subject" class="form-control" placeholder="Der Titel der Nachricht" required data-error="Bitte geben Sie den Nachrichtentitel ein ">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-md-12 inner-column col-sm-12 col-xs-12">
							<textarea name="msg_content" id="message" rows="7" placeholder="Der Text der Nachricht" class="form-control" required data-error="Bitte geben Sie den Nachrichtentext ein"></textarea>
							<div class="help-block with-errors"></div>
							<button type="submit" id="submit" class="quote-btn"> Bestätigung </button>
							<div id="msgSubmit" class="h3 hidden"></div> 
							<div class="clearfix"></div>
						</div>   
					</form>
				</div>
			</div>
		</div>
		<!--End Consulting Form-->