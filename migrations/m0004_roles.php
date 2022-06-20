
<?php 

class m0004_roles
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE roles(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    admin INT(30) NOT NULL,
                    user INT(30) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=INNODB;
                   
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE roles;";
        $db->pdo->exec($SQL);
    }

}