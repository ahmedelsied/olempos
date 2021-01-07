<h1 class='text-center  me_h1'>Messages</h1> 
<div class='container'>
    <div class='table-responsive' style="position:relative">  
        <table class='main-table text-center table table-bordered'>
            <tr>
                <td>#ID</td>
                <td>name</td>
                <td>email</td>
                <td>subject</td>
                <td>content</td>
                <td>date</td>
                <td>controls</td>
            </tr>
<?php if(!empty($this->messages)): ?>
<?php foreach($this->messages as $message):?>
            <tr>
                <td><?=$message['id']?></td>
                <td><?=$message['name']?></td>
                <td><?=$message['email']?></td>
                <td><?=$message['messageTitle']?></td>
                <td><?=$message['messageContent']?></td>
                <td><?=$message['date']?></td>
                <td>
                    <a href="../../admin_hash_messages/delete/<?=$message['id']?>" class="btn btn-danger del">
                        Delete<i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
<?php endforeach; ?>
<?php else: ?>
    <div style="position:absolute;left:50%;top:55px;font-weight: bold;">No Messages Yet</div>
<?php endif; ?>
        </table>
    </div>
</div>