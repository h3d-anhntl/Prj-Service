<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 4/12/2017
 * Time: 10:55 AM
 */

namespace backend\controllers;


use fproject\rest\ActiveController;
use backend\models\Lichcongtac;
use yii\db\ActiveQuery;

class LichCongTacController extends ActiveController
{
    public $modelClass='backend\models\Lichcongtac';

    /**
     * Condition to find all resources with relations.
     * Use '@findAllCondition' as the key for client-side condition
     * @param array $params
     * @return ActiveQuery
     */
    public function findAllCondition($params)
    {
        /** @var ActiveQuery $query */
        $query = \Yii::createObject(ActiveQuery::className(), [$this->modelClass]);

        return $query;
    }
}