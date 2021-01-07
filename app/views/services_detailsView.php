<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3><?=$this->service[0]['title']?></h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../"> الرئيسية </a></li>
                        <li class="home-bread"><a href="../../our_services"> خدماتنا </a></li>
                        <li> التفاصيل </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- End services Area -->
<section class="single-services-page page-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="page-head-left">
                    <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="left-menu">
                            <ul>
                                <?php foreach($this->Allservices as $service): ?>
                                <li <?=$this->params == $service['id'] ? 'class="active"' : null ?>><a href="../../../our_services/details/<?=$service['id']?>"><?=$service['title']?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Right sidebar -->
                <!-- Start service page -->
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <!-- single-well end-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-well last-part">
                            <h3><?=$this->service[0]['title']?></h3>
                            <p><?=$this->service[0]['descr']?></p>
                        </div>
                        
                    </div>
                </div>
                <!-- end Row -->
                <div class="row mar-row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-well">
                            <p>  </p>
                            <ul class="marker-list">
                                <?php foreach($this->branchService as $branch): ?>
                                <li><?=$branch['title']?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="single-page-head">
                            <div class="download-btn">
                                <div class="about-btn">
                                    <a href="#" class="down-btn apli o_active" data-toggle="modal" data-target="#exampleModal"> احجز معنا الآن  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single page -->
                    <?php if(!empty($this->service[0]['img'])): ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-page">
                            <div class="page-img elec-page">
                                <img src="<?=IMG?>service/<?=$this->service[0]['img']?>" alt="">
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?=$this->service[0]['title']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <div class="row">
                        <form id="requestForm" method="POST" action="../../../our_services/handle_request" class="request-form">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="name" type="text" id="name" class="form-control" placeholder="الاسم" required data-error=" من فضلك ادخل الاسم ">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="email" type="email" class="email form-control" id="email" placeholder=" البريد الإلكتروني " required data-error=" من فضلك ادخل البريد الإلكتروني ">
                                <div class="help-block with-errors"></div>
                            </div>
                            <?php if(!empty($this->service[0]['certific'])):?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php else: ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php endif; ?>
                                <input name="phone" type="number" id="phone-number" class=" form-control" placeholder="رقم التليفون" required data-error=" من فضلك ادخل رقم التليفون ">
                                <div class="help-block with-errors"></div>
                            </div>
                            <?php if(!empty($this->service[0]['certific'])): 
                                $certficArr = explode(',',$this->service[0]['certific']);
                                ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="certific" class="mdb-select md-form">
                                    <option value="" disabled selected> اختر المؤهل التعليمي </option>
                                    <?php foreach($certficArr as $certfic): ?>
                                    <option value="<?=$certfic?>"><?=$certfic?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty($this->branchService)): ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="course" class="mdb-select md-form">
                                    <option value="" disabled selected>  اختر الدورة المطلوبة </option>
                                    <?php foreach($this->branchService as $branch): ?>
                                    <option value="<?=$branch['id']?>"><?=$branch['title']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php else: ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php endif; ?>
                            <?php if(!empty($this->service[0]['time'])): 
                                $timeArr = explode(',',$this->service[0]['time']);
                            ?>
                                <select name="time" class="mdb-select md-form">
                                    <option value="" disabled selected> اختر زمن الالتحاق المطلوب </option>
                                    <?php foreach($timeArr as $time): ?>
                                    <option value="<?=$time?>"><?=$time?> شهور</option>
                                    <?php endforeach; ?>
                                </select>
                            <?php endif; ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="message" rows="7" placeholder=" يمكنك اضافة ملاحظة " class="form-control" required data-error=" من فضلك ادخل نص الرسالة "></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <input name="serviceID" id="serviceID" type="hidden" value="<?=$this->service[0]['id']?>"/>
                            <div class="modal-footer">
                                <button type="submit" class="add-btn main_btn"> تأكيد </button>
                            </div> 
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>