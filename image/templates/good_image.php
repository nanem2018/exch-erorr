<?php
$db=mysqli_connect('localhost:3306','root','123456','lesson_6') or die('No connect');
$query='SELECT * FROM main';
$result=mysqli_query($db,$query);


mysqli_close($bd);
var_dump($result);
  ?>   
<?php $myArray =["1","2", "3","4","5","6"]?>
 //<?php foreach ($myArray as $value):?>
                  <a href="./public/img/images/<?=$value?>.jpg"><img alt="image" src="./public/img/images_small/<?=$value?>.jpg"></a>  
    <?php endforeach;?>   