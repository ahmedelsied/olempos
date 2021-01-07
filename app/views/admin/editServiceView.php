<div class="container">
<form class="edit-article-form" method="post" action="../../admin_hash_services/edit" enctype="multipart/form-data">
    <div class="title-parent">
        <input value="<?=$this->services[0]['id']?>" name="artcID" type="hidden"/>
        <input value="<?=$this->services[0]['title']?>" name="title" class="form-control text-right" type="text" placeholder="Title" required="required"/>
        <input value="<?=$this->services[0]['titleGer']?>" name="titleGer" class="form-control text-right" type="text" placeholder="Title In Germany" required="required"/>
        <input value="<?=$this->services[0]['certific']?>" name="certific" class="form-control text-right" type="text" placeholder="Write Qualifcation In Arabic Then [,]" required="required"/>
        <input value="<?=$this->services[0]['certificGer']?>" name="certificGer" class="form-control text-right" type="text" placeholder="Write Qualifcation In Germany Then [,]" required="required"/>
        <input value="<?=$this->services[0]['time']?>" name="time" class="form-control text-right" type="text" placeholder="Write Duration Of The Course Then [,]" required="required"/>
    </div>
    <div class="details-parent">
        <textarea name="details" class="form-control text-right details" placeholder="Details" required="required"><?=$this->services[0]['descr']?></textarea>
        <textarea name="detailsGer" class="form-control text-right details" placeholder="Details In Germany" required="required"><?=$this->services[0]['descrGer']?></textarea>
    </div>
    <?php if(empty($this->services[0]['img'])): ?>
    <div class="images-article">
        <span class="custom-input btn btn-primary"><i class="fa fa-plus"></i>اضافة صور</span>
        <input class="images" type="file" name="images" accept="image/*"/>
    </div>
    <?php endif; ?>
    <button data-artc-id="<?=$this->idService?>" class="btn btn-success pull-right edit-article" type="submit">Edit<i class="fa fa-edit"></i></button>
</form>
<div class='container' style="margin-top:50px;margin-bottom:20px">
    <h1 class='text-center  me_h1'>Sub Services</h1> 
    <div class='table-responsive' style="position:relative">  
        <table class='main-table text-center table table-bordered'>
            <tr>
                <td>#ID</td>
                <td>title</td>
                <td>title In Germany</td>
                <td>control</td>
            </tr>
            <?php if(!empty($this->subService)): ?>
            <?php foreach($this->subService as $subService):?>
            <tr>
                <td><?=$subService['id']?></td>
                <td><?=$subService['title']?></td>
                <td><?=$subService['titleGer']?></td>
                <td><a class="btn btn-danger" href="../../admin_hash_services/deleteSub/<?=$subService['id']?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
    <div style="position:absolute;left:50%;top:55px;font-weight: bold;">No Sub Services Yet</div>
            <?php endif; ?>
        </table>
    <form class="edit-subservice-form" method="post" action="../../admin_hash_services/addSub" enctype="multipart/form-data" style="margin-top:100px">
        <h2 class="text-center">Add Sub Service</h2>
        <div class="title-parent">         
            <input type="text" name="title" placeholder="Write Sub Service Title In Arabic"/>
            <input type="text" name="titleGer" placeholder="Write Sub Service Title In Germany"/>
            <input type="hidden" name="serviceID" value="<?=$this->idService?>"/>
        </div>
        <button data-artc-id="<?=$this->idService?>" class="btn btn-success pull-right edit-article" type="submit">Add Sub Service<i class="fa fa-edit"></i></button>
    </form>
    </div>
</div>
<?php if(!empty($this->services[0]['img'])): ?>
    <div class="row" style="margin-top:80px;margin-bottom:40px;background-color:#eaeaea">
    <h2 class="text-center">Article Image</h2>
        <div class="col-md-3 text-right full-article">
            <div class="artc-parent">
                <div class="all-feat">
                    <div class="artc-img">
                        <img class="art-img" src="<?=IMG?>service/<?=$this->services[0]['img']?>" alt="article Image"/>
                    </div>
                    <div class="titleADesc text-right">
                        <div class="actions text-right">
                            <form action="../../admin_hash_services/edit" method="POST">
                                <input name="artcID" type="hidden" value="<?=$this->idService?>"/>
                                <input name="images" type="hidden" value="<?=$this->services[0]['img']?>"/>
                                <button type="submit" class="btn btn-danger delete-img">Delete 
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>              
    <form class="delete-img" action="../../admin_hash_services/edit" method="POST">
        <input type="hidden" value="<?=$this->services[0]['img']?>"/>
    </form>
    <?php else: ?> 
        <div class="alert alert-warning text-center" style="margin-top:70px">No Images In This Article</div>
    <?php endif;?>
</div>