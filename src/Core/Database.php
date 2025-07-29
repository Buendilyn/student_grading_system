<<<<<<< HEAD
<?php
namespace Dimapasok\Gs\Core;
use mysqli;
class Database {
    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'oop';
        $user = 'root';
        $pass = '';
        //mysqli connection 
        $this->conn =new mysqli($host,$user,$pass,$db);
        if ($this->conn->connect_error){
            die("Connection failed:" . $this->conn->connect_error);
        }
    }
} 
=======
<?php
namespace Dimapasok\Gs\Core;
use mysqli;
class Database {
    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'oop';
        $user = 'root';
        $pass = '';
        //mysqli connection 
        $this->conn =new mysqli($host,$user,$pass,$db);
        if ($this->conn->connect_error){
            die("Connection failed:" . $this->conn->connect_error);
        }
    }
}
>>>>>>> 0f7e4b5b4e493dda6b64e1798f732c4c550f1b72
