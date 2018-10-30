<div class="news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5">
                <div class="img-box">
                    <img src="<?=Yii::$app->view->theme->baseUrl;?>/images/news-img.jpg">
                </div>
            </div>
            <div class="col-md-8 col-sm-7">
                <div class="content-box">
                    <h2>Latest news</h2>
                    <div class="news-slider owl-carousel owl-theme">
                        <?php
                        foreach($model as $postdata)
                        {
                        ?>
                        <div class="item">
                            <h3><?=$postdata->title?></h3>
                            <div class="date"><i class="icon-calendar"></i><?=$postdata->date?></div>
                            <p><?=$postdata->discription?></p>
                        </div>

                    <?php
                    }
                    ?>
                    </div>
                    <a href="#">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>