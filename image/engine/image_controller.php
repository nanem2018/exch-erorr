<?php
$image_info = getAssocResult('SELECT * FROM main; ');
$image_id="SELECT `id_img`  FROM `main`" ;//отбираем в массив id изображений
$image_seen="SELECT `seen`  FROM `main`";// отбираем кол-во просмотров этих изображений
$image_opened="SELECT `opened`  FROM `main`";//заполняем массив эл-ми соответствующими заданному критерию(лайки, открытия)
?>