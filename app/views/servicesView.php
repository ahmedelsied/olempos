<!-- Start breadcumb Area -->
<section class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3> خدماتنا </h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../"> الرئيسية </a></li>
                        <li> خدماتنا </li>
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
                            <h4><a href="../../our_services/details/<?=$service['id']?>"><?=$service['title']?></a></h4>
                            <p><?=$service['descr']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="service-text text-center"><strong>لا توجد خدمات بعد</strong></div>
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
</section>
<!-- Features area End  -->