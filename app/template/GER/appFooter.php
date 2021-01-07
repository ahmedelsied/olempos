<footer class="footer-1">
            <div class="footer-area area-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
							<div class="footer-content footer-about-top">
								<div class="footer-head">
									<div class="footer-logo">
										<a href="#"><img src="<?=IMG?>logo/logo.png" alt=""></a>
									</div>
									<p>
                                    Seit sein Jahr im Jahr 2016 hat sich Olympus gemeldet, die deutsche Geschäftsstätigkeit zu gehört,
                                    um arabische Rechte in seinen Markt zu gegeben. In den Jahren, in denen der Olymp die diesbezüglichen großen Fortschritte erwartet, 
                                    wurden durch ein breites Netzwerk von Beziehungen zu deutschen Unternehmen und durch die gesammelten Erfahrungen, 
                                    um europäische Arbeitsmarktindikatoren zu lesen.
                                    </p>
                                </div>
                                <div class="footer-icons">
                                    <h5> Folgen Sie uns </h5>
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/Fiss.Deutschland/" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
							</div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4> ÜBER UNS  </h4>
                                    <div class="footer-services-link">
                                    	<ul class="footer-list footer-list_2">
                                            <li>
                                                <a class="pagess" href="../../?lang=ger"> Home </a>
											</li>
											<li>
                                                <a class="pagess" href="../../about_us?lang=ger"> About Us </a>
											</li>
											<li>
                                                <a class="pagess" href="../../our_services?lang=ger"> Our Services </a>
											</li>
											<li>
                                                <a class="pagess" href="../../blogs?lang=ger"> Blog </a>
											</li>
											<li>
                                                <a href="../../contact_us?lang=ger"> Contact Us </a>
                                            </li>
										</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Wichtige Dienstleistungen</h4>
                                    <div class="footer-services-link">
                                    	<ul class="footer-list footer-list_2">
                                            <?php foreach($this->servicesFooter as $service): ?>
											<li><a href="../../../our_services/details/<?=$service['id']?>?lang=ger"><?=$service['titleGer']?></a></li>
                                            <?php endforeach; ?>
										</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4> Abonnieren Sie den Postdienst </h4>
                                    <p>
                                    Wir helfen Agenturen dabei, ihre neuen Geschäftsziele zu definieren und erstellen dann eine Roadmap, um sie dort zu erreichen, indem wir ein Unternehmen gründen.
                                    <br>
                                    Geben Sie Ihre E-Mail-Adresse ein, um alles über uns zu erfahren
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder=" Geben Sie Ihre E-Mail-Adresse ein ">
                                            <button type="submit" id="sus_submit" class="add-btn"> Abonnieren </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
            <!-- End footer area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2020 All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="<?=JS?>vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="<?=JS?>bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="<?=JS?>owl.carousel.min.js"></script>
		<!-- Counter js -->
        <script src="<?=JS?>jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="<?=JS?>waypoints.js"></script>
		<!-- isotope js -->
        <script src="<?=JS?>isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="<?=JS?>jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="<?=JS?>magnific.min.js"></script>
		<!-- venobox js -->
		<script src="<?=JS?>venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="<?=JS?>jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="<?=JS?>form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="<?=JS?>plugins.js"></script>
		<!-- main js -->
		<script src="/GER/js/main.js"></script>
        <!-- Ajax Request To Add Subscriber -->
		<script src="<?=JS?>AjaxReq.js"></script>
        <script>		
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }					
        </script>