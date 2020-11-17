<?php

class m001_initial
{
    public function up()
    {
        $db = \app\core\Application::$app->$database;
        $sql = "CREATE TABLE users () ENGINE=INNODB";
        $database->pdo->exec($sql);
    }

    public function down()
    {
        $db = \app\core\Application::$app->$database;
        $sql = "DROP TABLE users";
        $database->pdo->exec($sql);
    }
}