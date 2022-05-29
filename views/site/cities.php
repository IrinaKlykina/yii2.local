<?php
use yii\grid\GridView;
//var_dump($dataProvider);
//die();

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'name of the city',
        'year of foundation',
        'population',
        'area',
    ]
]);
