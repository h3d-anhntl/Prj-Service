<?php

namespace backend\models\base;

use Yii;

/**
 * This is the model class for table "chucvu".
 *
 * @property int $id
 * @property string $tenChucVu
 * @property string $ngayTao
 * @property string $ghiChu
 *
 * @property Nhanvien[] $nhanviens
 */
class ChucVu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chucvu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ngayTao'], 'safe'],
            [['tenChucVu', 'ghiChu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenChucVu' => 'Ten Chuc Vu',
            'ngayTao' => 'Ngay Tao',
            'ghiChu' => 'Ghi Chu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNhanviens()
    {
        return $this->hasMany(Nhanvien::className(), ['chucVuId' => 'id']);
    }
}
