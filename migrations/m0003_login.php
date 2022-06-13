
<?php 

class m0003_login 
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE login(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    email VARCHAR(50) NOT NULL,
                    password VARCHAR(80) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE login;";
        $db->pdo->exec($SQL);
    }

}