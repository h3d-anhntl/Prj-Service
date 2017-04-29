<?php

use yii\db\Migration;

class m170421_101605_data_default extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170421_101605_data_default cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->batchInsert('{{%phongban}}', [
            'tenPhongBan'
        ], [
            ['Mobile'],
            ['Web'],
            ['Tích hợp'],
            ['Hành chính'],
            ['Test'],
        ]);

        $this->batchInsert('{{%chucvu}}', [
            'tenChucVu'
        ], [
            ['Thực tập sinh'],
            ['Nhân viên kiểm thử phần mềm'],
            ['Quản lý bộ phận Mobie'],
            ['Quản lý bộ phận Tích hợp'],
            ['Quản lý bộ phận Web'],
            ['Team leader'],
        ]);

        $this->batchInsert('{{%tinhtranghonnhan}}', [
            'tinhtranghonnhan'
        ], [
            ['Chưa kết hôn'],
            ['Đã kết hôn'],
            ['Đang độc thân'],
        ]);
    }

    public function down()
    {
        echo "m170421_101605_data_default cannot be reverted.\n";

        return false;
    }

}
