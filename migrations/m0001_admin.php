
<?php 

class m0001_admin 
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE admin(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    role_id INT (10) NOT NULL,
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
        $SQL = "DROP TABLE admin;";
        $db->pdo->exec($SQL);
    }

}