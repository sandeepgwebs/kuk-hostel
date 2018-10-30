<?php
//show content index page use widgets
?>
<div class="slide-area">
    <div class="home-slider owl-carousel owl-theme">
        <?php foreach($model as $slider)
        {
        ?>
        <div class="item">
            <img src="<?=\yii\helpers\Url::base().'/uploads/'.$slider->images?>">
            <div class="content">
                <h2><?=$slider->title?></h2>
                <p><?=$slider->description?></p>
            </div>
        </div>

<?php } ?>
    </div>

    <div class="container">
        <div class="notification-slider owl-carousel owl-theme">
                <?php
                    foreach($notice as $noticedata)
                    { ?>
                        <div class="item">
                            <p><?=$noticedata->discription?></p>
                        </div>
                        <?php
                    }
                ?>
        </div>
    </div>
</div>
