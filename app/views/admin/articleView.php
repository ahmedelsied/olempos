<div class="add-artc text-right">
    <a class="btn btn-success" href="../../admin_hash_blogs/add">Add Article<i class="fa fa-plus"></i></a>
</div>
<div class="container text-right">
    <div class="row">  
    <?php if(!empty($this->blogs)): ?>
    <?php foreach($this->blogs as $blog): ?>            
        <div class="col-md-3 text-right full-article">            
            <div class="artc-parent">            
                <div class="all-feat">
                    <div class="artc-img text-center">
                        <img class="art-img" src="<?=IMG?>blog/<?= empty($blog['imgs']) ? 'default.jpg' : $blog['imgs']?>"/>
                    </div>
                    <div class="titleADesc text-right">
                        <h4><?= $blog['title'] ?></h4>
                        <div class="actions text-right">
                            <a href="../../admin_hash_blogs/edit/<?=$blog['id']?>" data-id="<?= $blog['id'] ?>" class="btn btn-info edit">Edit<i class="fa fa-edit"></i></a>
                            <a href="../../admin_hash_blogs/delete/<?=$blog['id'] ?>" class="btn btn-danger delete">Delete <i class="fa fa-times"></i></a>
                            <span class="pull-left date-article"><?=$blog['date']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
        <div class="text-center"><strong>No Blogs Yet</strong></div>
    <?php endif; ?>
    </div>
</div>
