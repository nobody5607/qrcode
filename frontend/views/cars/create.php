<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Cars */

$this->title = 'Create Cars';
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
