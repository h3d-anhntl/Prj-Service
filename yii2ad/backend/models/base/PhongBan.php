<?php

namespace backend\models\base;

use Yii;

/**
 * This is the model class for table "phongban".
 *
 * @property int $id
 * @property string $tenPhongBan
 * @property string $ngayTao
 * @property string $ghiChu
 *
 * @property Nhanvien[] $nhanviens
 */
class PhongBan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phongban';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ngayTao'], 'safe'],
            [['tenPhongBan', 'ghiChu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenPhongBan' => 'Ten Phong Ban',
            'ngayTao' => 'Ngay Tao',
            'ghiChu' => 'Ghi Chu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNhanviens()
    {
        return $this->hasMany(Nhanvien::className(), ['phongBanId' => 'id']);
    }
}
