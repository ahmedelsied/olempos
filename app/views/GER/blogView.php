<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3> Blog </h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../?lang=ger"> Zuhause </a></li>
                        <li> Blog </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->

<!-- Blog area Start -->
<div class="blog-area blog-4 bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="center-head">
                    <a href="../../../blogs?lang=ger"> Blog</a>
                    <h3>Bereiten Sie sich auf Ihren Erfolg vor und bieten Sie wirklich herausragende IT-Lösungen</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid"> 
                <!-- Start single blog -->
                <?php if(!empty($this->blogsDetails)): ?>
                <?php foreach($this->blogsDetails as $blogDetails): ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="../../blogs/details/<?=$blogDetails['id']?>?lang=ger">
                                <img src="<?=IMG?>blog/<?=!empty($blogDetails['imgs']) ? $blogDetails['imgs'] : 'default.jpg'?>" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date-type" style="font-size:13px">
                                <?php
                                    $date = $this->setDateGer($blogDetails['date']);
                                    $dateDetails = $date[0];
                                    $year = $dateDetails[0];
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
                <p class="text-center"><strong>لا يوجد مقالات بعد</strong></p>
                <?php endif; ?>
                <!-- End single blog -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!-- Blog area Start -->