<?php

namespace app\modules\testModul\models;
use yii\db\ActiveRecord;

class formClient extends ActiveRecord{

    
    public static function tableName(){
        return 'Client';
    }
    
    public function rules(){
        return[
            [['name','surname','age'],'required'],
            [['name','surname'],'string' ,'max' => 50, 'tooLong' => 'Значение должно быть не более 50 символов'],
            ['email','email'],
            [['address','organization','position'],'string' ,'max' => 250, 'tooLong' => 'Максимальная длина строки 250 символов'],
            ['info','trim'],
            [['age','pol','phone'],'safe'],
        ];
    }
}
?>