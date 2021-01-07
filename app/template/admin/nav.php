<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="margin-right:25px" href="../../admin/articles"><img src="<?=IMG?>logo/logo.png" alt="logo" width="160"/></a>
        </div>
        <div class="collapse navbar-collapse" id="app-nav">
            <ul class="nav navbar-nav">
                <li class="<?=basename($_SERVER['REQUEST_URI']) == 'admin_hash_dashboard' ? 'active' : null?>"><a href="../../admin_hash_dashboard">Dashboard</a></li>
                <li class="<?=basename($_SERVER['REQUEST_URI']) == 'admin_hash_requests' ? 'active' : null?>"><a href="../../admin_hash_requests">Requests</a></li>
                <li class="<?=basename($_SERVER['REQUEST_URI']) == 'admin_hash_messages' ? 'active' : null?>"><a href="../../admin_hash_messages">Messages</a></li>
                <li class="<?=basename($_SERVER['REQUEST_URI']) == 'admin_hash_subscribers' ? 'active' : null?>"><a href="../../admin_hash_subscribers">Subscribers</a></li>
                <li class="<?=$this->addServiceActive?><?=basename($_SERVER['REQUEST_URI']) == 'admin_hash_services' ? 'active' : null?>"><a href="../../admin_hash_services">Services</a></li>
                <li class="<?=$this->addBlogActive?><?=basename($_SERVER['REQUEST_URI']) == 'admin_hash_blogs' ? 'active' : null?>"><a href="../../admin_hash_blogs">Blogs</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <?=isset($this->adminUser) ? $this->adminUser : null ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="../../main">زيارة الموقع</a></li>
                        <li><a href="../../admin_hash_logout">تسجيل الخروج</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>