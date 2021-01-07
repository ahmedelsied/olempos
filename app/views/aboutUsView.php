<!-- Start breadcumb Area -->
<section class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3> من نحن </h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../"> الرئيسية </a></li>
                        <li> من نحن </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcumb Area -->

<!-- about-area start -->
<div class="about-area about-2 about_page page-padding">
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
                </div>
            </div>
            <!-- column end -->
        </div>
    </div>
</div>
<!-- about-area end -->
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