  <?php

//Declaring constants...
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'info');

class config {

    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;
    public $conn;
    public $error;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->conn) {
            $this->error = "Fatal Error: Can't connect to database" . $this->conn->connect_error;
            return false;
        }
    }

    public function save($username, $password, $firstname, $lastname) {
        $sv = $this->conn->prepare("INSERT INTO `user` (username, password, firstname, lastname) VALUES(?, ?, ?, ?)") or die($this->conn->error);
        $sv->bind_param("ssss", $username, $password, $firstname, $lastname);
        if ($sv->execute()) {
            $sv->close();
            $this->conn->close();
            return true;
        }
    }

}
