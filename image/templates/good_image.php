<?php

$db=mysqli_connect("localhost","root","","img") or die('No connect');
$sql=mysqli_query($db, 'SELECT `id_img` FROM `main`');
while ($id_img=mysqli_fetch_array($sql)) {
$myArray[]=$id_img['id_img'];
}
?>
<div class ="cover-img">
<? foreach($myArray as $value):?>
  
  <div class ="cover"><a href="./public/img/images/<?=$value?>.jpg"><img class="img" alt="image" src="./public/img/images_small/<?=$value?>.jpg"></a>
   <div class ="like"><img  src="./public/img/pic/like.png" alt="count of seen" height=15 widht=17></div></div>
  
<? endforeach;?> 
<? foreach($image_seen as $value):?>
  <div class ="seen" ><img  src="./public/img/pic/seen.jpg" alt="count of seen" height=13 widht=15></div>
<div><?=$value?> </div>
<? endforeach;?> 
</div>

