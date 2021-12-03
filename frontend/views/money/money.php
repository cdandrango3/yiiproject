<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php
$form=ActiveForm::begin();
?>
<?=
$form->field($model,'n1')?>
<?=
$form->field($model,'n2')?>
<div class="form-group">
<?=
Html::submitButton('Enviar', ['class' => 'btn btn-primary'])
?>
</div>
<?php
$form=ActiveForm::end();
?>
<?php
if($mensaje){
    echo HTML::tag('h1', $mensaje);
}
?>
