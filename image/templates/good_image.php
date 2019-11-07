




     
<?php $myArray =["1","2", "3","4","5","6"]?>
   <?php foreach ($myArray as $value):?>
                  <a href="./public/img/images/<?=$value?>.jpg"><img alt="image" src="./public/img/images_small/<?=$value?>.jpg"></a>  
    <?php endforeach;?>   