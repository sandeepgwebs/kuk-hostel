<?php use yii\helpers\Url; ?>
<nav class="navbar-default navbar-static-side" role="navigation" style="">
    <div class="sidebar-collapse" style="">
        <ul class="nav metismenu" id="side-menu" style="display: block;">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?=yii::$app->view->theme->baseUrl?>/img/profile_small.jpg">
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <?php $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->identity->id);?>
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=Yii::$app->user->identity->username ?></strong>
                             </span> <span class="text-muted text-xs block"><?php foreach($roles as $key => $value){ echo $key; }?><b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?=Url::base()?>/client/profile">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                   kuk-unversty
                </div>
            </li>
            <li class="">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Frontend Manager</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Categories</a> </li>
                    <li><a href="<?=Url::base()?>/slider/">Create New Slider</a> </li>
                    <li><a href="dashboard_2.html">Pages</a></li>
                    <li><a href="dashboard_3.html">Menus</a></li>
                    <li><a href="<?=Url::base() ?>/news/">Latest News</a></li>
                    <li><a href="<?=Url::base() ?>/notice/">Add Notices</a></li>
                    <li><a href="dashboard_5.html">Gallery<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Department</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=Url::base() ?>/department/">Department</a></li>
                    <li><a href="<?=Url::base() ?>/designation/">Designation</a></li>
                    <li><a href="<?=Url::base() ?>/faculity/">Faculity</a></li>

                </ul>
            </li>
    </div>
</nav>