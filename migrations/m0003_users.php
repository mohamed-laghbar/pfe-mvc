
<?php 

class m0003_users
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE users(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    role INT (10) NOT NULL,
                    name VARCHAR(30) NOT NULL,
                    email VARCHAR(50) NOT NULL,
                    adress VARCHAR(90) NOT NULL,
                    phone VARCHAR(20) NOT NULL,
                    password VARCHAR(60) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }

}