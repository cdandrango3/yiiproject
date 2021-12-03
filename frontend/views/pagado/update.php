<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\pagado */

$this->title = 'Update Pagado: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pagados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pagado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

