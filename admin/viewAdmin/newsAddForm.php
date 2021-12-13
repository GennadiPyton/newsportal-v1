<?php ob_start(); ?>

<div class="container" style="min-height:400px;">
<div class="col-md-11">
</div>
</div>

 <h2>News Add</h2>
 <?php
 if(isset($test)){
     if($test==true)
     {
?>
    <div class="alert alert-info">
        <strong>Запись добавлена. </strong><a href="newsAdmin"> Список новостей</a>
    </div>
    <?php
        }
    else if($test==false)
    {
        ?>
            <div class="alert alert-warning">
                <strong>Ошибка добавлений записи!</strong> <a href="newsAdmin"> Список новостей</a>
            </div>
        <?php
    }
 }
 else {
     ?>
 }