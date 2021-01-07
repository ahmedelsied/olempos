<div class="container">
<form class="edit-article-form" method="post" action="../../admin_hash_blogs/edit" enctype="multipart/form-data">
    <div class="title-parent">
        <input value="<?=$this->blogs[0]['id']?>" name="artcID" type="hidden"/>
        <input value="<?=$this->blogs[0]['title']?>" name="title" class="form-control text-right" type="text" placeholder="Title" required="required"/>
        <input value="<?=$this->blogs[0]['titleGer']?>" name="titleGer" class="form-control text-right" type="text" placeholder="Title In Germany" required="required"/>
    </div>
    <div class="details-parent">
        <textarea name="details" class="form-control text-right details" placeholder="Details" required="required"><?=$this->blogs[0]['content']?></textarea>
        <textarea name="detailsGer" class="form-control text-right details" placeholder="Details In Germany" required="required"><?=$this->blogs[0]['contentGer']?></textarea>
    </div>
    <div class="title-parent">
        <input value="<?=$this->blogs[0]['tags']?>" name="tags" class="form-control text-left" type="text" placeholder="Write Tag Then [ , ]" required="required"/>
    </div>
    <?php if(empty($this->blogs[0]['imgs'])): ?>
    <div class="images-article">
        <span class="custom-input btn btn-primary"><i class="fa fa-plus"></i>اضافة صور</span>
        <input class="images" type="file" name="images" accept="image/*"/>
    </div>
    <?php endif; ?>
    <button data-artc-id="<?=$this->idBlog?>" class="btn btn-success pull-right edit-article" type="submit">Edit<i class="fa fa-edit"></i></button>
</form>
<?php if(!empty($this->blogs[0]['imgs'])): ?>
    <div class="row" style="margin-top:80px;margin-bottom:40px;background-color:#eaeaea">
    <h2 class="text-center">Article Image</h2>
        <div class="col-md-3 text-right full-article">
            <div class="artc-parent">
                <div class="all-feat">
                    <div class="artc-img">
                        <img class="art-img" src="<?=IMG?>blog/<?=$this->blogs[0]['imgs']?>" alt="article Image"/>
                    </div>
                    <div class="titleADesc text-right">
                        <div class="actions text-right">
                            <form action="../../admin_hash_blogs/edit" method="POST">
                                <input name="artcID" type="hidden" value="<?=$this->idBlog?>"/>
                                <input name="images" type="hidden" value="<?=$this->blogs[0]['imgs']?>"/>
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
    <form class="delete-img" action="../../admin_hash_blogs/edit" method="POST">
        <input type="hidden" value="<?=$this->blogs[0]['imgs']?>"/>
    </form>
    <?php else: ?> 
        <div class="alert alert-warning text-center" style="margin-top:70px">No Images In This Article</div>
    <?php endif;?>
</div>