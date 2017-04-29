<?php
	namespace backend\models;

    use yii\behaviors\TimestampBehavior;
    use fproject\components\ActiveRecord;
    use yii\helpers\Json;

	class Nghiphep extends base\NghiPhep
	{
        public function behaviors()
        {
            return [
                'timestamp' => [
                    'class' => TimestampBehavior::className(),
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => ['tuNgay','toiNgay', 'ngayTao'],
                    ],
                    'value' => function() {
                        return date('Y-m-d H:i:s');
                    },
                ],
            ];
        }
	}
?>