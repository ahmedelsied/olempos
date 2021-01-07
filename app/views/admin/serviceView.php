<div class="add-artc text-right">
    <a class="btn btn-success" href="../../admin_hash_services/add">Add Service<i class="fa fa-plus"></i></a>
</div>
<div class="container text-right">
    <div class="row">  
    <?php if(!empty($this->services)): ?>
    <?php foreach($this->services as $service): ?>            
        <div class="col-md-3 text-right full-article">            
            <div class="artc-parent">            
                <div class="all-feat">
                    <div class="artc-img text-center">
                        <img class="art-img" src="<?=IMG?>service/<?= empty($service['img']) ? 'default.jpg' : $service['img']?>"/>
                    </div>
                    <div class="titleADesc text-right">
                        <h4><?= $service['title'] ?></h4>
                        <div class="actions text-right">
                            <a href="../../admin_hash_services/edit/<?=$service['id']?>" data-id="<?= $service['id'] ?>" class="btn btn-info edit">Edit<i class="fa fa-edit"></i></a>
                            <a href="../../admin_hash_services/delete/<?=$service['id'] ?>" class="btn btn-danger delete">Delete <i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
        <div class="text-center"><strong>No Services Yet</strong></div>
    <?php endif; ?>
    </div>
</div>
