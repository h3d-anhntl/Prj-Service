<?php

namespace backend\models\base;

use Yii;

/**
 * This is the model class for table "nghiphep".
 *
 * @property int $id
 * @property int $nhanVienId
 * @property string $lydo
 * @property string $tuNgay
 * @property string $toiNgay
 * @property int $caNghi
 * @property int $trangThai
 * @property string $ngayTao
 *
 * @property Nhanvien $nhanVien
 */
class NghiPhep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nghiphep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nhanVienId', 'caNghi', 'trangThai'], 'integer'],
            [['tuNgay', 'toiNgay', 'ngayTao'], 'safe'],
            [['lydo'], 'string', 'max' => 255],
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
            'lydo' => 'Lydo',
            'tuNgay' => 'Tu Ngay',
            'toiNgay' => 'Toi Ngay',
            'caNghi' => 'Ca Nghi',
            'trangThai' => 'Trang Thai',
            'ngayTao' => 'Ngay Tao',
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
