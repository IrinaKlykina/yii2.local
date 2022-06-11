<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id'=>'login-form',
    'options'=> ['class'=>'form-vertical'],
])
?>

    <?= $form->field($model, 'name_of_the_city') ?>
    <?= $form->field($model, 'year_of_foundation') ?>
    <?= $form->field($model, 'population') ?>
    <?= $form->field($model, 'area') ?>
    <div class ='form-group'>
        <div class='col-lg-offset-5 col-lg-7'>
    <?= Html::submitButton('Сохранить', ['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end() ?>
