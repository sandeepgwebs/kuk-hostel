<div class="inner-header" style="background-image: url('<?=Yii::$app->view->theme->baseUrl;?>/images/staff-header.jpg')">
    <div class="container">
        <h2>Department</h2>
        <p>We have around 32 staff members who are responsible for keeping the University</p>
    </div>
</div>
<div class="staff">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Science</h3>
                <ul>
                    <li>Various streams are vaailable in Science wing.</li>
                    <li>Various combinations are available for Science students.</li>
                    <li>B.Sc Computer science,BCA, B.Sc Home Science, B.Sc Bio Tech, B.Sc Medical courses are available.</li>
                    <li>Students are also encouraged to use Lab facility as much as possible .</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>COMPUTER DEPARTMENT</h4>
            </div>
        </div>
        <div class="row">
            <?php foreach($model as $postdata)
            {?>
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <div class="image-box">
                        <img src="<?=\yii\helpers\Url::base().'/uploads/faculity/'.$postdata->image?>">
                    </div>
                    <div class="content-box">
                        <h5><?=$postdata->name?></h5>
                        <p>Assistant Professor</p>
                        <p><?=$postdata->phone?></p>
                        <span class="email">Email:<?=$postdata->email?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>