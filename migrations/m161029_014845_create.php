<?php

use yii\db\Migration;

class m161029_014845_create extends Migration {


    /**
     * add comments to columns
     * @param string $table
     * @param array $comments
     */
    private function addComments($table, $comments) {
        foreach ($comments as $column => $comment) {
            $this->addCommentOnColumn($table,$column, $comment);
        }
    }

    public function up() {

        // Пользователи
        $this->createTable("users", [
            'id' => $this->primaryKey(7)->notNull()." auto_increment",
            'photo' => $this->string(255),
            'login' => $this->string(15)->unique(),
            'password' => $this->string(64),
            'auth_key' => $this->string(64),
            'role' => "ENUM('admin', 'user')",
            'status' => "ENUM('1', '0')",
        ]);

        $this->addComments("users", [
            'id' => 'ID',
            'photo' => 'Фотография',
            'login' => 'Логин',
            'password' => 'Пароль',
            'auth_key' => 'Ключ авторизации',
            'role' => 'Роль',
            'status' => 'Статус'
        ]);

        $this->insert("users", [
            'photo' => '',
            'login' => 'admin',
            'password' => '$2y$13$hOhmfScZgNb7LjEqn.ydVexa3LfSMH1bfIoZ3it8S0tvOiX7zG6nK',
            'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
            'role' => 'admin',
            'status' => '1'
        ]);

        // Настройки
        $this->createTable("settings", [
            'id' => $this->primaryKey(7)->notNull()." auto_increment",
            'title' =>$this->string(255),
            'key' =>$this->string(255),
            'value' =>$this->string(255),
        ]);

        $this->addComments("settings", [
            'id' => 'ID',
            'title' => 'Заголовок',
            'key' => 'Ключ',
            'value' => 'Значение'
        ]);

        $this->insert("settings", [
            'title' => 'OAuth-токен Yandex',
            'key' => 'yandex_token',
            'value' => ''
        ]);

        $this->insert("settings", [
            'title' => 'ID счетчика',
            'key' => 'yandex_counter',
            'value' => ''
        ]);

        // Логи
        $this->createTable("log", [
            'id' => $this->primaryKey(7)->notNull()." auto_increment",
            'type' => "ENUM('create','update','delete')",
            'old' => $this->text(),
            'new' => $this->text(),
            'date' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'user' => $this->integer(7),
            'model' => $this->string(15),
            'record' => $this->integer(7)
        ]);

        // Мета-теги
        $this->createTable("meta_tags", [
            'id' => $this->primaryKey(7)->notNull()." auto_increment",
            'name' => $this->string(255),
            'title' => $this->string(255),
            'value' => $this->string(255),
            'active' =>  "ENUM('1','0')",
        ]);

    }

    public function down() {
        $this->dropTable("users");
        $this->dropTable("settings");
        $this->dropTable("log");
        $this->dropTable("meta_tags");
    }

}
