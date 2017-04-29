<?php

namespace backend\models\base;

use Yii;

/**
 * This is the model class for table "nhanvien".
 *
 * @property int $id
 * @property string $hoVaTen
 * @property string $tenVietTat
 * @property string $avatar
 * @property string $email
 * @property string $facebook
 * @property string $diaChi
 * @property int $gioiTinh
 * @property string $soDienThoai
 * @property string $ngaySinh
 * @property string $cmtnd
 * @property string $sotkNganHang
 * @property int $ttHonNhanId
 * @property int $phongBanId
 * @property int $chucVuId
 * @property string $ngayTao
 * @property string $ngayCapNhat
 * @property string $ghiChu
 *
 * @property Lichcongtac[] $lichcongtacs
 * @property Nghiphep[] $nghipheps
 * @property Chucvu $chucVu
 * @property Phongban $phongBan
 * @property Tinhtranghonnhan $ttHonNhan
 */
class NhanVien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nhanvien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['avatar'], 'string'],
            [['gioiTinh', 'ttHonNhanId', 'phongBanId', 'chucVuId'], 'integer'],
            [['ngaySinh', 'ngayTao', 'ngayCapNhat'], 'safe'],
            [['hoVaTen', 'tenVietTat', 'email', 'facebook', 'diaChi', 'soDienThoai', 'cmtnd', 'sotkNganHang', 'ghiChu'], 'string', 'max' => 255],
            [['chucVuId'], 'exist', 'skipOnError' => true, 'targetClass' => Chucvu::className(), 'targetAttribute' => ['chucVuId' => 'id']],
            [['phongBanId'], 'exist', 'skipOnError' => true, 'targetClass' => Phongban::className(), 'targetAttribute' => ['phongBanId' => 'id']],
            [['ttHonNhanId'], 'exist', 'skipOnError' => true, 'targetClass' => Tinhtranghonnhan::className(), 'targetAttribute' => ['ttHonNhanId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hoVaTen' => 'Ho Va Ten',
            'tenVietTat' => 'Ten Viet Tat',
            'avatar' => 'Avatar',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'diaChi' => 'Dia Chi',
            'gioiTinh' => 'Gioi Tinh',
            'soDienThoai' => 'So Dien Thoai',
            'ngaySinh' => 'Ngay Sinh',
            'cmtnd' => 'Cmtnd',
            'sotkNganHang' => 'Sotk Ngan Hang',
            'ttHonNhanId' => 'Tt Hon Nhan ID',
            'phongBanId' => 'Phong Ban ID',
            'chucVuId' => 'Chuc Vu ID',
            'ngayTao' => 'Ngay Tao',
            'ngayCapNhat' => 'Ngay Cap Nhat',
            'ghiChu' => 'Ghi Chu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLichcongtacs()
    {
        return $this->hasMany(Lichcongtac::className(), ['nhanVienId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNghipheps()
    {
        return $this->hasMany(Nghiphep::className(), ['nhanVienId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChucVu()
    {
        return $this->hasOne(Chucvu::className(), ['id' => 'chucVuId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhongBan()
    {
        return $this->hasOne(Phongban::className(), ['id' => 'phongBanId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTtHonNhan()
    {
        return $this->hasOne(Tinhtranghonnhan::className(), ['id' => 'ttHonNhanId']);
    }
}
