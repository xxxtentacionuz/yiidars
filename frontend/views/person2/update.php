<?php


use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$form = ActiveForm::begin();

echo $form->field($model, 'firstname');
echo '<br>'. $form->field($model, 'gender').'<br>';


echo Html::submitButton('Send', ['class' => 'btn btn-success']);

ActiveForm::end();
