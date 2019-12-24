 <?php


namespace Model;

use Database\Connect;

abstract class Model
{
    private $db;

    public function __construct()
    {
        $host = "localhost";
        $port = 3306;
        $user = "root";
        $password = "";
        $nameDb = "php";
        $charset = "utf8";
        $this->db = Connect::getInstance($host, $port, $user, $password, $nameDb, $charset);
    }

    public function sql($sql, $prepared=[]){
        for($i = 0, $count = count($prepared); $i < $count; $i++){
            $value = $this->db->realEscape($prepared[$i]["value"]);
            $sql = str_replace($prepared[$i]["statement"], $value, $sql);
        }

        return $this->db->query($sql);
    }

    public function getList(){
        return $this->sql("SELECT * FROM `" . $this->tableName() . "`");
    }

    abstract protected function tableName();
}