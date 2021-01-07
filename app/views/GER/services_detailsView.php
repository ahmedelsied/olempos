<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3><?=$this->service[0]['titleGer']?></h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread"><a href="../../?lang=ger"> Zuhause </a></li>
                        <li class="home-bread"><a href="../../our_services?lang=ger"> Unsere Dienstleistungen </a></li>
                        <li> Details </li>
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
                                <li <?=$this->params == $service['id'] ? 'class="active"' : null ?>><a href="../../../our_services/details/<?=$service['id']?>?lang=ger"><?=$service['titleGer']?></a></li>
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
                            <h3><?=$this->service[0]['titleGer']?></h3>
                            <p><?=$this->service[0]['descrGer']?></p>
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
                                <li><?=$branch['titleGer']?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="single-page-head">
                            <div class="download-btn">
                                <div class="about-btn">
                                    <a href="#" class="down-btn apli o_active" data-toggle="modal" data-target="#exampleModal">Buchen Sie jetzt bei uns</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single page -->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-page">
                            <div class="page-img elec-page">
                                <img src="<?=IMG?>service/<?=$this->service[0]['img']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="top:60px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?=$this->service[0]['titleGer']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <div class="row">
                        <form id="requestForm" method="POST" action="../../../our_services/handle_request" class="request-form">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="name" type="text" id="name" class="form-control" placeholder="Der Name" required data-error="Bitte geben Sie den Namen ein ">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="email" type="email" class="email form-control" id="email" placeholder="E-Mail " required data-error="Bitte geben Sie Ihre E-Mail-Adresse ein">
                                <div class="help-block with-errors"></div>
                            </div>
                            <?php if(!empty($this->service[0]['certificGer'])):?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php else: ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php endif; ?>
                                <input name="phone" type="number" id="phone-number" class=" form-control" placeholder="Telefonnummer" required data-error="Bitte geben Sie die Telefonnummer ein">
                                <div class="help-block with-errors"></div>
                            </div>
                            <?php if(!empty($this->service[0]['certificGer'])): 
                                $certficArr = explode(',',$this->service[0]['certificGer']);
                                ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="certific" class="mdb-select md-form">
                                    <option value="" disabled selected>Wählen Sie einen Bildungsabschluss</option>
                                    <?php foreach($certficArr as $certfic): ?>
                                    <option value="<?=$certfic?>"><?=$certfic?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty($this->branchService)): ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="course" class="mdb-select md-form">
                                    <option value="" disabled selected>Wählen Sie den gewünschten Kurs</option>
                                    <?php foreach($this->branchService as $branch): ?>
                                    <option value="<?=$branch['id']?>"><?=$branch['titleGer']?></option>
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
                                    <option value="" disabled selected>Wählen Sie die gewünschte Anmeldezeit</option>
                                    <?php foreach($timeArr as $time): ?>
                                    <option value="<?=$time?>"><?=$time?>Monate</option>
                                    <?php endforeach; ?>
                                </select>
                            <?php endif; ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="message" rows="7" placeholder="Sie können eine Notiz hinzufügen" class="form-control" required data-error="Bitte geben Sie den Nachrichtentext ein"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <input name="serviceID" id="serviceID" type="hidden" value="<?=$this->service[0]['id']?>"/>
                            <div class="modal-footer">
                                <button type="submit" class="add-btn main_btn"> Bestätigung </button>
                            </div> 
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>