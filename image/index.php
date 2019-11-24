<?php

include './engine/autoload.php';
autoload('config');
//include ENGINE_DIR.'db.php';
//include ENGINE_DIR . 'goods_table_controler.php';
require_once TEMPLATES_DIR.'/header.php';
require_once ENGINE_DIR . 'image_controller.php';
//include TEMPLATES_DIR.'header.php';


require_once TEMPLATES_DIR.'/good_image.php';
//include TEMPLATES_DIR.'goods_image.php';
//include TEMPLATES_DIR.'goods_table.php';

include TEMPLATES_DIR.'footer.php';
?>