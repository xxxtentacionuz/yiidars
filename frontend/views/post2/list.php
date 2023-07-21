<?php

use yii\widgets\DetailView;

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'title',
        'description',
        [
            'label' => 'Owner',
            'value' => $model->category->name,
        ],
        'created_at:datetime',
    ],
]);