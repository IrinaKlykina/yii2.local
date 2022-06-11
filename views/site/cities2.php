<?php
use yii\grid\GridView;
//var_dump($dataProvider);
//die();
use yii\helpers\Html;

echo Html::a('Добавить город',['add'],['class'=> 'btn btn-info']);

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
