<?php
use yii\helpers\Html;
?>

<ul>
    <li><label>Name</label></li>: <?= Html::encode($model->name)?>
    <li><label>Email</label></li>: <?= Html::encode($model->email)?>
</ul>