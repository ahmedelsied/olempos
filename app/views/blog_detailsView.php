<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3> تفاصيل الخبر </h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../"> الرئيسية </a></li>
                        <li> التفاصيل </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->

<!--Blog Area Start-->
<div class="blog-page-area page-padding">
    <div class="container">
        <div class="row">
            <div class="blog-details">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- single-blog start -->
                    <article class="blog-post-wrapper">
                        <div class="blog-banner">
                            <div class="blog-images">
                                <img src="<?=IMG?>blog/<?=$this->blogsDetails[0]['imgs']?>" alt="">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date-type"><?=$this->finalDate?></span>
                                </div>
                                <h4><?=$this->blogsDetails[0]['title']?></h4>
                                <?php $cntnt = str_replace('#123','<blockquote>',$this->blogsDetails[0]['content']) ?>
                                <?php $content = str_replace('#321','</blockquote>',$cntnt) ?>
                                <p><?=$content?></p>
                            </div>
                        </div>
                        
                    </article>
                    <div class="clear"></div>
                    <!-- single-blog end -->
                </div>
                <!-- End single blog -->
                <!-- Start Right Sidebar blog -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="left-head-blog">
                        <div class="left-blog-page">
                            <!-- search option start -->
                            <form action="../../blogs/search" method="POST">
                                <div class="blog-search-option">
                                    <input name="tag" type="text" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="left-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4> أحدث المقالات </h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    <?php foreach($this->recentBlogs as $recentBlog): ?>
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="../../blogs/details/<?=$recentBlog['id']?>">
                                                <img src="<?=IMG?>blog/<?=$recentBlog['imgs']?>" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="../../blogs/details/<?=$recentBlog['id']?>"><?=$recentBlog['title']?></a></p>
                                            <span class="date-type">
                                            
                                            <?php
                                                $date = $this->setDate($recentBlog['date']);
                                                $dateDetails = $date[0];
                                                $year = $dateDetails[0];
                                                $month = $dateDetails[1];
                                                $day = $dateDetails[2];
                                                echo $day .' '.$date[1][$month].' '.$year;
                                            ?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                        <div class="left-blog-page">
                            <div class="left-tags blog-tags">
                                <div class="popular-tag left-side-tags left-blog">
                                    <h4> كلمات مفتاحية </h4>
                                    <ul>
                                    <?php $tagsArr = explode(',',$this->blogsDetails[0]['tags']); ?>
                                    <?php foreach($tagsArr as $tag): ?>
                                        <!-- Create Page Tags To Get Blogs With Same Tag -->
                                        <li><a href="../../blogs/tags/?tag=<?=$tag?>"><?=$tag?></a></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Right Sidebar -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--End of Blog Area-->	