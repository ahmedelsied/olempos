<!-- Start breadcumb Area -->
<section class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3> Unsere Dienstleistungen </h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../?lang=ger"> Zuhause </a></li>
                        <li> Unsere Dienstleistungen </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcumb Area -->
<!-- Welcome service area start -->
<div class="welcome-area welcome-2 welcome-6 area-padding">
    <div class="container">
    <div class="row">
        <div class="all-services">	
            <!-- Start column -->
            <?php if(!empty($this->servicesDetaile)): ?>
            <?php foreach($this->servicesDetaile as $service): ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <a class="service-images service-images_img" href="#">
                        <img src="<?=IMG?>service/<?=$service['img']?>" alt="">
                    </a>
                    <div class="service-content service-content_2">
                        <div class="service-text">
                            <h4><a href="../../our_services/details/<?=$service['id']?>?lang=ger"><?=$service['titleGer']?></a></h4>
                            <p><?=$service['descrGer']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="service-text text-center"><strong>Es gibt noch keine Dienste</strong></div>
            <?php endif; ?>
            <!-- End column -->
        </div>
    </div>
    </div>
</div>
<!-- Welcome service area End -->

<!-- Features area Start  -->
<section class=" area-padding bg-color">
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
                                    <p>Ein angesehenes Team und professionelle Experten in allen Ländern und Bereichen können die Institution voranbringen</p>
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
</section>
<!-- Features area End  -->