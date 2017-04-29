<?php

namespace backend\models\base;

use Yii;

/**
 * This is the model class for table "lichcongtac".
 *
 * @property int $id
 * @property int $nhanVienId
 * @property string $lichCongTac
 * @property string $ngayCapNhat
 * @property string $ngayTao
 * @property string $ghiChu
 *
 * @property Nhanvien $nhanVien
 */
class LichCongTac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lichcongtac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nhanVienId'], 'integer'],
            [['ngayCapNhat', 'ngayTao'], 'safe'],
            [['lichCongTac', 'ghiChu'], 'string', 'max' => 255],
            [['nhanVienId'], 'exist', 'skipOnError' => true, 'targetClass' => Nhanvien::className(), 'targetAttribute' => ['nhanVienId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nhanVienId' => 'Nhan Vien ID',
            'lichCongTac' => 'Lich Cong Tac',
            'ngayCapNhat' => 'Ngay Cap Nhat',
            'ngayTao' => 'Ngay Tao',
            'ghiChu' => 'Ghi Chu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNhanVien()
    {
        return $this->hasOne(Nhanvien::className(), ['id' => 'nhanVienId']);
    }
}
