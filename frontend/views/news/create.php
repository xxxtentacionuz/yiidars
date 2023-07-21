<h1>News/create page</h1>
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

echo $form->field($model, 'title')->textInput()->label('Yangilik nomi');
echo $form->field($model, 'author_id')->textInput();
echo $form->field($model, 'description')->input('text');
echo $form->field($model, 'category_id')->input('text');

echo Html::submitButton('Yuborish', ['class'=>'btn btn-primary']);

ActiveForm::end();
?>

