<?php
namespace backend\models;

use yii\behaviors\TimestampBehavior;
use fproject\components\ActiveRecord;
use yii\helpers\Json;

class Nhanvien extends base\NhanVien
{
    public function extraFields()
    {
        return array_merge(parent::extraFields(), [
            'chucVu', 'nghipheps', 'lichcongtacs', 'phongBan', 'ttHonNhan'
        ]);
    }

    public function fields()
    {
        return array_merge(parent::fields(),[
            'chucVu', 'nghipheps', 'lichcongtacs', 'phongBan', 'ttHonNhan'
        ]);
    }
}

?>