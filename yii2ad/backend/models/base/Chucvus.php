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
 * @property string $logo
 *
 * @property Nhanvien[] $nhanviens
 */
class Chucvus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;

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
            [['file'], 'file'],
            [['tenChucVu', 'ghiChu'], 'string', 'max' => 255],
            [['logo'], 'string', 'max' => 200],
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
            'logo' => 'Logo',
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
