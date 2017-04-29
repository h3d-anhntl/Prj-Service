<?php

namespace backend\models\base;

use Yii;

/**
 * This is the model class for table "tinhtranghonnhan".
 *
 * @property int $id
 * @property string $tinhtranghonnhan
 * @property string $ngayTao
 * @property string $ghiChu
 *
 * @property Nhanvien[] $nhanviens
 */
class TinhTrangHonNhan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tinhtranghonnhan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ngayTao'], 'safe'],
            [['tinhtranghonnhan', 'ghiChu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tinhtranghonnhan' => 'Tinhtranghonnhan',
            'ngayTao' => 'Ngay Tao',
            'ghiChu' => 'Ghi Chu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNhanviens()
    {
        return $this->hasMany(Nhanvien::className(), ['ttHonNhanId' => 'id']);
    }
}
