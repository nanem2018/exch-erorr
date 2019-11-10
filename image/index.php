<?php

require_once './engine/autoload.php';
autoload('config');
require_once ENGINE_DIR.'db.php';
require_once ENGINE_DIR . 'goods_table_controler.php';


require_once './templates/header.php';



require_once TEMPLATES_DIR.'/good_image.php';
//include TEMPLATES_DIR.'goods_table.php';

require_once TEMPLATES_DIR.'/footer.php';
?>