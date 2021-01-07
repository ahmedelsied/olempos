<!-- Start breadcumb Area -->
<section class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>نتائج البحث</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../"> الرئيسية </a></li>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="center-head">
                        <a href="../../our_services"> خدماتنا </a>
                    </div>
                </div>	
                <!-- Start column -->
                <?php if(!empty($this->services)): ?>
                <?php foreach($this->services as $service): ?>
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
                    <div class="service-text text-center"><strong>لا توجد خدمات مطابقه للبحث</strong></div>
                <?php endif; ?>
                <!-- End column -->
            </div>
        </div>
    </div>
</div>
<!-- Blog area Start -->
<div class="blog-area blog-4 bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="center-head">
                    <a href="../../blogs"> المدونة</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid"> 
                <!-- Start single blog -->
                <?php if(!empty($this->blogs)): ?>
                <?php foreach($this->blogs as $blogDetails): ?>
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
                                    $year = $dateDetails[0];
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
                <p class="text-center"><strong>لا يوجد نتائج مطابقه للبحث</strong></p>
                <?php endif; ?>
                <!-- End single blog -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!-- Blog area Start -->