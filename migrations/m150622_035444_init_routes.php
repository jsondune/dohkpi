<?php

use yii\db\Schema;
use yii\db\Migration;

class m150622_035444_init_routes extends Migration
{
    public function safeUp()
    {
        $this->execute(
            "INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
                ('/admin/*', 2, NULL, NULL, NULL, 1434863982, 1434863982),
                ('/site/*', 2, NULL, NULL, NULL, 1434863973, 1434863973),
                ('/user/*', 2, NULL, NULL, NULL, 1434864010, 1434864010),
                ('/subscriber/*', 2, NULL, NULL, NULL, 1434949197, 1434949197),
                ('/debug/*', 2, NULL, NULL, NULL, 1435468759, 1435468759),
                ('/gii/*', 2, NULL, NULL, NULL, 1434864010, 1434864010);"
            );
        $this->execute(
            "INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
                ('permission_admin', '/admin/*'),
                ('permission_admin', '/site/*'),
                ('permission_admin', '/gii/*'),
                ('permission_user', '/site/*'),
                ('permission_admin', '/subscriber/*'),
                ('permission_user', '/subscriber/*'),
                ('permission_admin', '/debug/*'),
                ('permission_admin', '/user/*');"
            );
    }

    public function safeDown()
    {
        $this->execute(
        "DELETE FROM `auth_item_child` 
            WHERE `child`='/admin/*' OR 
                `child`='/site/*' OR
                `child`='/user/*' OR
                `child`='/gii/*' OR
                `child`='/subscriber/*' OR
                `child`='/debug/*';"
            );
        $this->execute(
        "DELETE FROM `auth_item` 
            WHERE `name`='/admin/*' OR 
                `name`='/site/*' OR
                `name`='/user/*' OR
                `name`='/gii/*' OR
                `name`='/subscriber/*' OR
                `name`='/debug/*';"
            );

        

    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
