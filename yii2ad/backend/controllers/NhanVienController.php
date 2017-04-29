<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 4/12/2017
 * Time: 10:55 AM
 */

namespace backend\controllers;


use fproject\rest\ActiveController;
use backend\models\Nhanvien;
use yii\db\ActiveQuery;
use yii\db\Query;

class NhanVienController extends ActiveController
{
    public $modelClass='backend\models\Nhanvien';

    /**
     * Condition to find all resources with relations.
     * Use '@findAllCondition' as the key for client-side condition
     * @param array $params
     * @return ActiveQuery
     */
    public function findAllCondition($params)
    {
        /** @var ActiveQuery $query */
        /*$query = \Yii::createObject(ActiveQuery::className(), [$this->modelClass]);*/

        ///$query = Nhanvien::find()->select('hovate','email')->with('nghipheps');
        $query = Nhanvien::find();
        return $query;

    }
}