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
										<h1 class="title2"> نحن فريق عمل احترافي  </h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-2 ">
										<p> نحن فريق عمل احترافي من إداريين، مهندسين، محامين، تقنيين، مترجمين وخبراء ماليين وضرائب متواجدون في عدة دول عربية وأوروبية وعالمية قائمون على العمل وفقاً للقانون الألماني المعمول به.  </p>
									</div>
									<!-- layer 3 -->
									<div class="layer-3">
										<a href="#" class="ready-btn left-btn" > من نحن </a>
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
										مستشارك في ألمانيا للخدمات الدولية والعلاقات التجارية
										</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-2">
										<p> نقدم خدماتنا بأفضل ما يمكن على الإطلاق قبل وبعد حصولك عليها إدارياً وقانونياً وإعلانياً (خدمة الزبائن ما بعد التعاقد) </p>
									</div>
									<!-- layer 3 -->
									<div class="layer-3">
										<a href="../../our_services" class="ready-btn left-btn" > خدماتنا </a>
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
							<a href="../../our_services"> خدماتنا </a>
							<h3> نقدم خدمات متخصصة وذات جودة عالية على يد نخبة من الخبراء بأحدث الطرق العلمية </h3>
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
												<h4><a href="../../our_services/details/<?=$serviceDetails['id']?>"><?=$serviceDetails['title']?></a></h4>
												<p><?=$serviceDetails['descr']?></p>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
								<?php else: ?>
								<div class="text-center service-text"><strong>لا يوجد خدمات بعد</strong></div>
								<?php endif; ?>
								<!-- End column -->
							</div>
						</div>
					</div>
					<!-- End column -->
					<div class="text-center">
						<a href="../../our_services" class="s_btn"> عرض جميع الخدمات </a>
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
							<a href="../../about_us" class="short_link"> من نحن </a>
							<h3> اوليمبوس شركة رائدة في مجال الشؤون الادارية والقانونية والتجارية </h3>
                            <p>
								سعت أوليمبوس منذ تأسيسها عام 2016 على دراسة النشاط التجاري الألماني لتتمكن من دمج الشباب العربي في سوقها 
								وقد قطعت خلال السنوات الماضية شوطاً كبيراً في هذا المضمار لا سيما عن طريق شبكة علاقات واسعة مع الشركات الألمانية واستطاعت من خلال الخبرات المكتسبة قراءة مؤشرات سوق العمل الأوروبية. 
								<br>
								نحن فريق عمل احترافي من إداريين، مهندسين، محامين، تقنيين، مترجمين وخبراء ماليين وضرائب متواجدون في عدة دول عربية وأوروبية وعالمية قائمون على العمل وفقاً للقانون الألماني المعمول به.
								<br>
								نقدم خدماتنا بأفضل ما يمكن على الإطلاق قبل وبعد حصولك عليها إدارياً وقانونياً وإعلانياً (خدمة الزبائن ما بعد التعاقد)
							</p>
                            <div class="about-company">
                                <div class="single-about">
									<span class="about-icon"><i class="icon icon-diamond" ></i></span>
									<span class="about-text">  فريق عمل <br/>  متعاون </span>
                                </div>
                                <div class="single-about">
									<span class="about-icon"><i class="icon icon-graduation-hat" ></i></span>
									<span class="about-text"> احتــرافية <br/> في العمل </span>
                                </div>
                                <div class="single-about">
									<span class="about-icon"><i class="icon icon-users" ></i></span>
									<span class="about-text"> دعم <br/> 24/7 </span>
                                </div>
							</div>
							<a class="banner-btn" href="../../about_us"> تعرف اكثر علينا </a>
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
							<span> ما نتميز به عن غيرنا </span>
							<h3> نمتلك مميزات رائعة لضمان النجاح لأي مؤسسة تتعامل معنا </h3>
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
											<h4> فريق عمل محترف </h4>
											<p> فريق عمل مميز وخبراء محترفون في كافة الدول والمجالات قادرون على النهوض بالمؤسسة </p>
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
												<h4> المصداقية والجودة </h4>
												<p> تتميز المؤسسة بالمصداقية التامة في التعامل والالتزام بجودة العمل من الناحية العلمية والتنفيذية </p>
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
												<h4> رضا عملاؤنا هو الأساس </h4>
												<p> تتميز المؤسسة بالاهتمام بكافة اهتمامات العملاء والعمل على تنفيذ ما يطلبه العميل باحترافية تامة </p>
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
												<h4>  متواجدون دائماً وخدمة 24/7  </h4>
												<p> نتميز بالتواجد دائماً لسهلوة التواصل مع كافة العملاء والارتقاء بجودة الخدمة المقدمة </p>
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
								<h3> لماذا تتعامل معنا وتختار خدماتنا</h3>
							</div>
							<div class="choose-all">
								<div class="single-choose">
									<div class="choose-images_2">
										<img src="<?=IMG?>more_icons/planing.svg" alt="icon">								   
									</div>
									<div class="choose-content">
										<h4> تخطيط الأعمال </h4>
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
										<h4> دعم على الانترنت </h4>
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
										<h4> الاحترافية والمصداقية </h4>
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
									<h5> مشروع مكتمل </h5>
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
									<h5> عميل راض </h5>
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
									<h5> سنوات خبرة </h5>
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
									<h5> ساعة عمل </h5>
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
							<a href="../../our_services"> المدونة</a>
							<h3> الاستعداد لنجاحك ، نحن نقدم حلول تكنولوجيا المعلومات البارزة حقا </h3>
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
                                    <a class="image-scale" href="../../blogs/details/<?=$blogDetails['id']?>">
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
									<a href="../../blogs/details/<?=$blogDetails['id']?>">
										<h4><?=$blogDetails['title']?></h4>
									</a>
									<p><?=substr($blogDetails['content'],0,274)?>...</p>
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