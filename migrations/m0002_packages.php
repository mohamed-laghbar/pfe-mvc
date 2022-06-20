
<?php 

class m0002_packages 
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE packages(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    image VARCHAR (40) NOT NULL,
                    title VARCHAR(50) NOT NULL,
                    description VARCHAR(180) NOT NULL,
                    price VARCHAR(80) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE packages;";
        $db->pdo->exec($SQL);
    }

}