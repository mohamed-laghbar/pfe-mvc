
<?php 

class m0005_orders
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE orders(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT (10) NOT NULL,
                    product_id INT (10) NOT NULL,
                    quantity INT (10) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=INNODB; 
            ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE orders;";
        $db->pdo->exec($SQL);
    }

}