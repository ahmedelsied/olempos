        <div class="intro-area intro-6">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="<?=IMG?>slider/s3.jpg" alt="">
                    </div>
                    <div class="slider-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12 ">
									<!-- layer 1 -->
									<div class="layer-1">
										<h1 class="title2">Wir sind ein professionelles Team</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-2 ">
										<p>Wir sind ein professionelles Team von Administratoren, Ingenieuren, Anwälten, Technikern, Übersetzern, Finanzexperten und Steuern in mehreren arabischen, europäischen und internationalen Ländern, basierend auf Arbeiten gemäß dem geltenden deutschen Recht.</p>
									</div>
									<!-- layer 3 -->
									<div class="layer-3">
										<a href="../../about_us?lang=ger" class="ready-btn left-btn" >Über uns</a>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="<?=IMG?>slider/s4.jpg" alt="">
                    </div>
                    <div class="slider-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!-- layer 1 -->
									<div class="layer-1">
										<h1 class="title2">
										Berater in Deutschland für internationale Dienstleistungen und Handelsbeziehungen
										</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-2">
										<p>Wir bieten unsere Dienstleistungen so gut wie nie zuvor und nachdem Sie sie administrativ, rechtlich und kommerziell erhalten haben (Kundendienst nach Vertragsabschluss).</p>
									</div>
									<!-- layer 3 -->
									<div class="layer-3">
										<a href="../../our_services?lang=ger" class="ready-btn left-btn" > Unsere Dienstleistungen </a>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Welcome service area start -->
		<div class="services-area bg-color area-padding">
			<div class="container">
                <div class="row">
                    <!-- Start column -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="center-head">
							<a href="../../our_services?lang=ger"> UNSERE DIENSTLEISTUNGEN </a>
							<h3>Wir bieten spezialisierte und qualitativ hochwertige Dienstleistungen einer Expertengruppe mit den neuesten wissenschaftlichen Methoden</h3>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
                            <div class="all-services">	
								<!-- Start column -->
								<?php if(!empty($this->servicesDetails)): ?>
								<?php foreach($this->servicesDetails as $serviceDetails): ?>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-service">
										<a class="service-images service-images_img" href="#">
											<img src="<?=IMG?>service/<?=$serviceDetails['img']?>" alt="">
									    </a>
									    <div class="service-content service-content_2">
											<div class="service-text">
												<h4><a href="../../our_services/details/<?=$serviceDetails['id']?>?lang=ger"><?=$serviceDetails['titleGer']?></a></h4>
												<p><?=$serviceDetails['descrGer']?></p>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
								<?php else: ?>
								<div class="text-center service-text"><strong>Es gibt noch keine Dienste</strong></div>
								<?php endif; ?>
								<!-- End column -->
							</div>
						</div>
					</div>
					<!-- End column -->
					<div class="text-center">
						<a href="../../our_services?lang=ger" class="s_btn">Alle Dienste anzeigen</a>
					</div>
				</div>
			</div>
		</div>
        <!-- Welcome service area End -->
        <!-- about-area start -->
        <div class="about-area about-2">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-12 pdd_0">
                        <div class="about-image about-2_0 ">
							<img src="<?=IMG?>background/about_img_00.jpg" alt="">
                            <div class="video-content ">
								<a href="https://www.youtube.com/watch?v=IPbzWJNmndY" class="video-play vid-zone">
									<img src="<?=IMG?>more_icons/play-button.svg" alt="">
								</a>
							</div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-7 col-sm-8 col-xs-12 pdd_0">
                        <div class="about-content">
							<a href="../../about_us?lang=ger" class="short_link">ÜBER UNS</a>
							<h3>Olympus Ist Ein Führendes Unternehmen Im Bereich Verwaltung, Recht Und Handel</h3>
                            <p>Seit seiner Gründung im Jahr 2016 hat sich Olympus bemüht, die deutsche Geschäftstätigkeit zu untersuchen,
							um arabische Jugendliche in seinen Markt integrieren zu können.
							In den vergangenen Jahren hat Olympus diesbezüglich große Fortschritte erzielt,
							insbesondere durch ein breites Netzwerk von Beziehungen zu deutschen Unternehmen und durch die gesammelten Erfahrungen,
							die es mit dem Lesen europäischer Arbeitsmarktindikatoren zu tun hat.<br>Wir sind ein professionelles Team von Administratoren, Ingenieuren, Anwälten, Technikern, Übersetzern, Finanzexperten und Steuern in mehreren arabischen, europäischen und internationalen Ländern, basierend auf Arbeiten gemäß dem geltenden deutschen Recht.
							<br>Wir bieten unsere Dienstleistungen so gut wie nie zuvor und nachdem Sie sie administrativ, rechtlich und kommerziell erhalten haben (Kundendienst nach Vertragsabschluss).</p>
							<div class="about-company">
								<div class="single-about">
									<span class="about-icon"><i class="icon icon-diamond" ></i></span>
									<span class="about-text">Kollaborateur <br/> Team Arbeit  </span>
								</div>
								<div class="single-about">
									<span class="about-icon"><i class="icon icon-graduation-hat" ></i></span>
									<span class="about-text">Professionalität bei der<br/>Arbeit</span>
								</div>
								<div class="single-about">
									<span class="about-icon"><i class="icon icon-users" ></i></span>
									<span class="about-text"> Unterstützung <br/> 24/7 </span>
								</div>
							</div>
							<a class="banner-btn" href="../../about_us?lang=ger">Erfahren Sie mehr über uns </a>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
		<!-- about-area end -->

		<!-- Features area Start  -->
		<div class=" area-padding">
			<div class="container">
                <div class="row">
                    <!-- Start column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="left-headline">
							<span>Was wir von anderen unterscheiden</span>
							<h3>Wir haben große Vorteile, um den Erfolg jeder Institution sicherzustellen, die sich mit uns befasst</h3>
							<p>
							هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. 
							ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. 
							</p>
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="row">
                            <div class="all-services">	
								<!-- Start column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
										<div class="service-icon">
											 <img src="<?=IMG?>more_icons/professional_team.svg" alt="icon">
										</div>
										<div class="service-text sm-service-text">
											<h4>Arbeit team</h4>
											<p> Ein angesehenes Team und professionelle Experten in allen Ländern und Bereichen können die Institution voranbringen </p>
										</div>
									</div>
								</div>
								<!-- End column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
									    <div class="service-content">
											<div class="service-icon">
												<img src="<?=IMG?>more_icons/quality.svg" alt="icon">
											</div>
											<div class="service-text sm-service-text">
												<h4>Glaubwürdigkeit und Qualität</h4>
												<p>Die Institution zeichnet sich durch vollständige Glaubwürdigkeit im Umgang und Engagement für qualitativ hochwertige Arbeit in Bezug auf Wissenschaft und Umsetzung aus</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
									    <div class="service-content">
											<div class="service-icon">
												<img src="<?=IMG?>more_icons/happy_clients.svg" alt="icon">
											</div>
											<div class="service-text sm-service-text">
												<h4>Unsere Kundenzufriedenheit ist das Fundament</h4>
												<p>Die Institution zeichnet sich dadurch aus, dass sie sich um alle Interessen der Kunden kümmert und daran arbeitet, die Anforderungen des Kunden professionell umzusetzen</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
									    <div class="service-content">
											<div class="service-icon">
												<img src="<?=IMG?>more_icons/24_7.svg" alt="icon">
											</div>
											<div class="service-text sm-service-text">
												<h4>Immer verfügbar und Service 24/7 </h4>
												<p>Wir zeichnen uns dadurch aus, dass wir stets eine einfache Kommunikation mit allen Kunden haben und die Qualität der erbrachten Dienstleistungen verbessern</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -->
							</div>
						</div>
					</div>
					<!-- End column -->
				</div>
			</div>
		</div>
		<!-- Features area End  -->
        <!-- Start Why Us area -->
		<div class="choose-area bg-color area-padding">
			<div class="container">
				<div class="row">
				    <!-- Start Column -->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="choose-wrapper">
							<div class="left-headline">
								<h3>Warum beschäftigen Sie sich mit uns und wählen unsere Dienstleistungen</h3>
							</div>
							<div class="choose-all">
								<div class="single-choose">
									<div class="choose-images_2">
										<img src="<?=IMG?>more_icons/planing.svg" alt="icon">								   
									</div>
									<div class="choose-content">
										<h4>Geschäftsplanung</h4>
										<p>
											هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص 
										</p>
									</div>
								</div>
								<!-- Start services -->
								<div class="single-choose">
									<div class="choose-images_2">
										<img src="<?=IMG?>more_icons/support.svg" alt="icon">								   
									</div>
									<div class="choose-content">
										<h4>Online-Support</h4>
										<p>
											هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص 
										</p>
									</div>
								</div>
								<!-- Start services -->
								<div class="single-choose">
									<div class="choose-images_2">
										<img src="<?=IMG?>more_icons/diamond.svg" alt="icon">								   
									</div>
									<div class="choose-content">
										<h4> Professionalität und Glaubwürdigkeit </h4>
										<p>
											هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص 
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <!-- Start Column -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="choose-image">
                        	<img src="<?=IMG?>about/img_020.jpg" alt="Choose Imagess">
                        </div>
				    </div>
				    <!-- End Column -->
				</div>
			</div>
		</div>
		<!-- End Why Us area -->
		<!-- Start Counter Area -->
		<div class="counter-area">
            <div class="container">
                <div class="row">
				   <div class="fun-content">
						<div class="col-md-3 col-sm-3 col-xs-12">
						    <div class="single-fun">
						    	<div class="fun-icon">
									<img src="<?=IMG?>more_icons/projects.svg" alt="icon">								   									
								</div>
								<div class="fun_text">
									<span class="counter"><?=(420 + $this->allProjects)?></span>
									<h5>abgeschlossenes Projekt</h5>
								</div>
						    </div>
						</div>
						<!-- fun_text  -->
						<div class="col-md-3 col-sm-3 col-xs-12">
					        <div class="single-fun">
								<div class="fun-icon">
									<img src="<?=IMG?>more_icons/happy_clients.svg" alt="icon">								   									
								</div>
								<div class="fun_text">
									<span class="counter"><?=$this->statics[0]['customers']?></span>
									<h5>Glückliche Kunden</h5>
								</div>
							</div>
						</div>
						<!-- fun_text  -->
						<div class="col-md-3 col-sm-3 col-xs-12">
					        <div class="single-fun">
								<div class="fun-icon">
									<img src="<?=IMG?>more_icons/diamond.svg" alt="icon">								   									
								</div>
								<div class="fun_text">
									<span class="counter"><?=(date('Y') - 2015)?></span>
									<h5>Jahre Erfahrung</h5>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
					        <div class="single-fun">
								<div class="fun-icon">
									<img src="<?=IMG?>more_icons/hours.svg" alt="icon">								   									
								</div>
								<div class="fun_text">
									<span class="counter"><?=$this->statics[0]['hours']?></span>
									<h5> Arbeitszeit </h5>
								</div>
							</div>
						</div>

					</div>
                </div>
                <!-- end Row -->
            </div>
		</div>
		<!-- End Counter Area -->
		<!-- Blog area Start -->
		<div class="blog-area blog-4 bg-color area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="center-head">
							<a href="../../our_services?lang=ger"> Blog</a>
							<h3>Bereiten Sie sich auf Ihren Erfolg vor und bieten Sie wirklich herausragende IT-Lösungen</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="blog-grid">
						<!-- Start single blog -->
						<?php if(!empty($this->blogsModel)): ?>
						<?php foreach($this->blogsModel as $blogDetails): ?>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-blog">
							    <div class="blog-image">
                                    <a class="image-scale" href="../../blogs/details/<?=$blogDetails['id']?>?lang=ger">
										<img src="<?=IMG?>blog/<?=!empty($blogDetails['imgs']) ? $blogDetails['imgs'] : 'default.jpg'?>" alt="">
                                    </a>
                                </div>
								<div class="blog-content">
								    <div class="blog-meta">
										<span class="date-type">
										<?php
											$date = $this->setDate($blogDetails['date']);
											$dateDetails = $date[0];
											$month = $dateDetails[1];
											$day = $dateDetails[2];
											echo $day .'<br>'. $date[1][$month];
										?>
										</span>
									</div>
									<a href="../../blogs/details/<?=$blogDetails['id']?>?lang=ger">
										<h4><?=$blogDetails['titleGer']?></h4>
									</a>
									<p><?=substr($blogDetails['contentGer'],0,274)?>...</p>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						<?php else: ?>
						<p class="text-center"><strong>لا يوجد خدمات بعد</strong></p>
						<?php endif; ?>
						<!-- End single blog -->
					</div>
				</div>
				<!-- End row -->
			</div>
		</div>
		<!-- Blog area Start -->