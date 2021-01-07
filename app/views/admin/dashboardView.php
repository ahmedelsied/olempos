
	<div class="container home-stats text-center">
		<h2>Dashboard</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="stat stat-total-mem">
					<i class="fas fa-bell"></i>
					<div class="info">
						Total Requests
						<span><a href="../../admin_hash_requests"><?=$this->requestsCount?></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="stat stat-pend-mem">
					<i class="fa fa-envelope"></i>
					<div class="info">
						Total Messages
						<span><a href="../../admin_hash_messages"><?=$this->msgCount?></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="stat stat-total-items">
					<i class="fa fa-users"></i>
					<div class="info">
						Total Subscribers
						<span><a href="../../admin_hash_subscribers"><?=$this->subsCount?></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="stat stat-total-com">
					<i class="fa fa-business-time"></i>
					<div class="info">
						Total Services
						<span><a href="../../admin_hash_services"><?=$this->servicesCount?></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container latest">
		<div class="row"><div class="col-sm-6">
				<div class="panel panel-default panel-box">
					<div class="panel-heading">
						<i class="fa fa-bell"></i> Latest Requests
						<span class="toggle-last pull-right">
							<i class="fa fa-minus"></i>
						</span>
					</div>
					<?php if(!empty($this->requests)): ?>
					<?php foreach($this->requests as $request): ?>
					<div class="panel-body">
                        <div class="comment-box">
                            <span class="member-n"></span>
                            <p class="member-c"><?=$request['name']?>
                                <a href="../../admin_hash_requests" class="btn btn-success btn-xs pull-right"><i class="fa fa-info-circle"></i>All details</a>
                                <a href="../../admin_hash_requests/finished/<?=$request['id']?>" class="btn btn-info btn-xs pull-right"><i class="fa fa-check"></i>Mark As Done</a>
                                <a href="../../admin_hash_requests/delete/<?=$request['id']?>" class="cont-com btn btn-danger btn-xs confirm pull-right"><i class="fa fa-times"></i>Delete</a>
                            </p>
                        </div>
					</div>
					<?php endforeach; ?>
					<?php else: ?>
						<h5 class="text-center panel-body">No Requests Yet</h5>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default panel-box">
					<div class="panel-heading">
						<i class="fa fa-business-time "></i> Latest Services
						<span class="toggle-last pull-right">
							<i class="fa fa-minus"></i>
						</span>
					</div>
					<?php if(!empty($this->services)): ?>
					<?php foreach($this->services as $service): ?>
					<div class="panel-body">
                        <div class="comment-box">
                            <span class="member-n"></span>
                            <p class="member-c"><?=$service['title']?>
                                <a href="../../admin_hash_services/delete/<?=$service['id']?>" class="cont-com btn btn-danger btn-xs confirm pull-right"><i class="fa fa-times"></i>Delete</a>
                                <a href="../../admin_hash_services/edit/<?=$service['id']?>" class="btn btn-success btn-xs pull-right"><i class="fa fa-edit"></i>Edit</a>
                            </p>
                        </div>
					</div>
					<?php endforeach; ?>
					<?php else: ?>
						<h5 class="text-center panel-body">No Services Yet</h5>
					<?php endif; ?>
				</div>
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default panel-box">
					<div class="panel-heading">
						<i class="fa fa-users"></i> Latest Subscribers
						<span class="toggle-last pull-right">
							<i class="fa fa-minus"></i>
						</span>
					</div>
					<?php if(!empty($this->subs)): ?>
					<?php foreach($this->subs as $sub): ?>
					<div class="panel-body">
						<ul class="list-unstyled latest-data">		
                            <li><?=$sub['email']?>
								<a href="../../admin_hash_subscribers/delete/<?=$sub['id']?>" class="btn btn-danger pull-right del"><i class='fa fa-times'></i>Delete</a>
                            </li>
						</ul>
					</div>
					<?php endforeach; ?>
					<?php else: ?>
					<h5 class="text-center panel-body">No Subscribers Yet</h5>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default panel-box">
					<div class="panel-heading">
						<i class="fa fa-envelope"></i> Latest Messages
						<span class="toggle-last pull-right">
							<i class="fa fa-minus"></i>
						</span>
					</div>
					<?php if(!empty($this->msg)): ?>
					<?php foreach($this->msg as $msg): ?>
					<div class="panel-body">
						<ul class="list-unstyled latest-data">
                            <li><?=$msg['messageTitle']?>
                                <a href="../../admin_hash_messages/delete/<?=$msg['id']?>" class="btn btn-danger pull-right"><i class='fa fa-times'></i>delete</a>
                            </li>
						</ul>
					</div>
					<?php endforeach; ?>
					<?php else: ?>
					<h5 class="text-center panel-body">No Messages Yet</h5>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>