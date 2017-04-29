<?php

use yii\db\Migration;

class m170419_160414_db extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170419_160414_db cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->batchInsert('{{%phongban}}', [
            'tenPhongBan', 'ngayTao'
        ], [
            ['Mobile', '2017-04-12'],
            ['Web', '2017-04-12'],
            ['Tích hợp', '2017-04-12'],
            ['Hành chính', '2017-04-12'],
            ['Test', '2017-04-12'],
        ]);

        $this->batchInsert('{{%chucvu}}', [
            'tenChucVu', 'ngayTao'
        ], [
            ['Thực tập sinh', '2017-04-17'],
            ['Nhân viên kiểm thử phần mềm', '2017-04-17'],
            ['Quản lý bộ phận Mobie', '2017-04-17'],
            ['Quản lý bộ phận Tích hợp', '2017-04-17'],
            ['Quản lý bộ phận Web', '2017-04-17'],
            ['Team leader', '2017-04-17'],
        ]);

        $this->batchInsert('{{%tinhtranghonnhan}}', [
            'tinhtranghonnhan', 'ngayTao'
        ], [
            ['Chưa kết hôn', '2017-04-19'],
            ['Đã kết hôn', '2017-04-17'],
            ['Đang độc thân', '2017-04-17'],
        ]);
    }

    public function down()
    {
        echo "m170419_100414_db_1 cannot be reverted.\n";

        return false;
    }
}
