<?php
class Database {
    private static $dsn = 'mysql:host=localhost;dbname=dsuclass_lanier2';
    private static $username = 'dsuclass_lanier2';
    private static $password = 'dsuclass_lanier2';
    private static $db;

    private function __construct()
    {
    }

    public  static function getDB() {
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include 'view/header.php';
                echo '<h1>Error</h1>h1>';
                echo '<p>' . $error_message . '</p>';
                include 'view/footer.php';
                exit();
            }
        }
        return self::$db;
    }
}

