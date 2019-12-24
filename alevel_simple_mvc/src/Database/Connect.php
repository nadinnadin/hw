<?php


namespace Database;


class Connect {

    private static $instance;
    private $mysqli;

    private function __construct($host, $port, $user, $password, $nameDb, $charset)
    {
        $this->mysqli = new \mysqli($host . ":" . $port, $user, $password, $nameDb);
        $this->mysqli->set_charset($charset);
    }

    public static function getInstance($host, $port, $user, $password, $nameDb, $charset){
        if(self::$instance === null){
            self::$instance = new self($host, $port, $user, $password, $nameDb, $charset);
        }

        return self::$instance;
    }

    public function query($sql)
    {
        $result = $this->mysqli->query($sql);

        $results = [];
        for(;($row = $result->fetch_array(MYSQLI_ASSOC)) !== null;){
            $results[] = $row;
        }

        return $results;
    }

    public function realEscape($value){
        return $this->mysqli->real_escape_string($value);
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}