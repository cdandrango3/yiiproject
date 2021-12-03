<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\pagado */

$this->title = 'Create Pagado';
$this->params['breadcrumbs'][] = ['label' => 'Pagados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
