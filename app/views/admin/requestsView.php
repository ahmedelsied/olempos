<h1 class='text-center  me_h1'>Requests</h1> 
<div class='container' style="padding: 0;">
    <div class='table-responsive' style="position:relative">  
        <table class='main-table text-center table table-bordered'>
            <tr>
                <td>#ID</td>
                <td>name</td>
                <td>email</td>
                <td>phone</td>
                <td>Qualification</td>
                <td>Main Service</td>
                <td>Sub-service</td>
                <td>Duration</td>
                <td>note</td>
                <td>Date</td>
                <td>controls</td>
            </tr>
<?php if(!empty($this->requests)): ?>
<?php foreach($this->requests as $request):
    $mainService = $this->servicesModel->getSpec('title','id',$request['mainServiceID'])[0]['title'];
    $subService = !empty($request['branchServiceID']) ? $this->subServicesModel->getSpec('title','id',$request['branchServiceID']) : null;
?>
            <tr>
                <td><?=$request['id']?></td>
                <td><?=$request['name']?></td>
                <td><?=$request['email']?></td>
                <td><?=$request['phone']?></td>
                <td><?=$request['certific']?></td>
                <td><?=$mainService?></td>
                <td><?=!empty($subService) ? $subService[0]['title'] : 'There is no sub-service' ?></td>
                <td><?=!empty($request['time']) ? $request['time'].'شهور' : ''?> </td>
                <td><?=$request['note']?></td>
                <td><?=$request['dateRequest']?></td>
                <td>
                    <a href="../../admin_hash_requests/delete/<?=$request['id']?>" class="btn btn-danger del">
                        Delete<i class="fa fa-times"></i>
                    </a>
                    <?php if($request['completed'] == 0): ?>
                    <a href="../../admin_hash_requests/finished/<?=$request['id']?>" class="btn btn-info del">
                        Mark As done<i class="fa fa-check"></i>
                    </a>
                    <?php endif; ?>
                </td>
            </tr>
<?php endforeach; ?>
<?php else: ?>
    <div style="position:absolute;left:50%;top:55px;font-weight: bold;">No Requests Yet</div>
<?php endif; ?>
        </table>
    </div>
</div>