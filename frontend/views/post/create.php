<h1>post/create page</h1>
<?php
use yii\widgets\ActiveForm;
use yii\bootstrap5\Html;

/**
 * @var $model \frontend\models\MyModel
 */

$form = ActiveForm::begin(
        [
            'id' => 'active-form',
            'options' => [
                 'enctype' => 'multipart/form-data'
            ],
        ]
);

echo $form->field($model, 'lastname')->textInput()->label('Lastname');
echo $form->field($model, 'firstname')->textInput()->hint('familiya');
echo $form->field($model, 'gender')->input('text');
echo $form->field($model, 'age')->input('text');
echo Html::submitButton('Yuborish', ['class'=>'btn btn-primary']);

ActiveForm::end();
