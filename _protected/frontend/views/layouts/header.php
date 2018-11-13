<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;

?>
<div class="slide-area">
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/logo.png">
                </div>
                <div class="top-nav">
                    <!--<a href="#" class="btn btn-primary">Login</a>-->
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    </ul>
                    <a href="students-wifi-password.html" class="btn btn-primary">WiFi Password Request</a>
                    <a class="btn" href="nirf.html">NIRF</a>
                    <a class="btn" href="research-assistant.html">Vacancies</a>
                    <a class="btn" href="contact-us.html">Contact Us</a>
                    <?php
                        if(Yii::$app->user->isGuest) {
                         ?>
                          <div class="btn">
                            <?= Html::a('Login', ['site/login'], []) ?></div>
                          <div class="btn"> <?= Html::a('Sign Up', ['site/signup'], []) ?></div>
                          <?php
                            } else {
                            ?>

                            (<?= Yii::$app->user->identity->username; ?>
                            <?= Html::a('Log out', ['site/logout'], []) ?>)
                            <?php
                            }
                         ?>

                 </div>
                <div class="search-box">
                    <div class="search">
                        <a class="close-btn">+</a>
                        <?php $form = ActiveForm::begin([
                            'action'  => ['search'],
                            'method'  => 'get',
                        ]);?>
                        <input id="search" name="search" placeholder="Search Here" class="form-control input-md" required value="" type="text">
                        <button class="btn"><?=Html::submitButton('<i class="icon-search"></i>', ['class' => 'btn btn-primary'])?></button>
                    </div>
                    <?php ActiveForm::end();?>
                    <a class="btn search-toggle"><i class="icon-search"></i></a>
                    <div class="contact">
                        <span class="btn btn-primary">+91 181 8888 888</span>
                        <i class="icon-phone btn btn-primary"></i>
                    </div>
                </div>
                <nav class="navbar navbar-expand-md">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span></span>
                        </button>
                        <a class="navbar-brand" href="#">Menu</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><?= Html::a('home', ['site/index'], []) ?></li>
                            <li><?= Html::a('about', ['site/about'], []) ?></li>
                            <li><?= Html::a('staff', ['site/staff'], []) ?></li>
                            <li><?= Html::a('courses', ['site/courses'],[]) ?></li>
                            <li><?= Html::a('prospectus', ['site/prospectus'], []) ?></li>
                            <li><?= Html::a('department', ['site/department'], []) ?>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="arts.html">Arts</a>
                                    </li>
                                    <li>
                                        <a href="commerce.html">Commerce</a>
                                    </li>
                                    <li>
                                        <a href="science.html">Science</a>
                                    </li>
                                </ul>
                            </li>

                            <li><?= Html::a('students', ['site/students'], []) ?></li>
                            <li><?= Html::a('gallery', ['site/gallery'], []) ?></li>
                            <li><?= Html::a('admission_lists', ['site/admission_lists'], []) ?></li>
                            <li><?= Html::a('pride', ['site/pride'], []) ?></li>


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </header>
</div>
