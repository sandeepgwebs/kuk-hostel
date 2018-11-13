<?php


foreach ($post as $key){?>
    <h2><?=$key->title?></h2>
    <p><?=$key->description?></p>
     <?=$key->images?>
<?php } ?>