<?php

namespace app\models;

use yii\db\ActiveRecord;


class Cities2 extends ActiveRecord
{
  //  public $population;


    public static function tableName()
    {
       return 'city2';
    }
    public function label()
    {
        return [
            'name_of_the_city'=>'Название_города',
            'year_of_foundation'=>'Год_основания',
            'population'=>'Население',
            'area'=>'Площадь',
        ];
    }
    public function rules()
    {
        return [
            [ ['population'], 'required'],
         //   [ ['password', 'email', 'phoneno'], 'required'],
        ];
    }

}