<?php
use yii\grid\GridView;
//var_dump($dataProvider);
//die();

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'name_of_the_city',
        'year_of_foundation',
        'population',
        'area',
    ]
]);
