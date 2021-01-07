<h1 class='text-center  me_h1'>Subscribers</h1> 
<div class='container'>
    <div class='table-responsive' style="position:relative">  
        <table class='main-table text-center table table-bordered'>
            <tr>
                <td>#ID</td>
                <td>name</td>
                <td>control</td>
            </tr>
<?php if(!empty($this->subscribers)): ?>
<?php foreach($this->subscribers as $subscriber):?>
            <tr>
                <td> <?=$subscriber['id']?></td>
                <td><?=$subscriber['email']?></td>
                <td><a href="../../admin_hash_subscribers/delete/<?=$subscriber['id']?>" class="btn btn-danger del">Delete<i class="fa fa-times"></i></a></td>
            </tr>
<?php endforeach; ?>
<?php else: ?>
    <div style="position:absolute;left:50%;top:55px;font-weight: bold;">No Subscribers Yet</div>
<?php endif; ?>
        </table>
    </div>
</div>