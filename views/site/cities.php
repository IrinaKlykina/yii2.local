<?php
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'name of the city',
        'foundation of the city',
        'population',
        'area',
    ]
]);
