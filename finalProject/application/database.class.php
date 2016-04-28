<?php
class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'superheroes',
        'tblHeroes' => 'heroes',
        'tblGuests' => 'guests'
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
     public function __construct() {
        try {
        $this->objDBConnection = @new mysqli(
                        $this->param['host'],
                        $this->param['login'],
                        $this->param['password'],
                        $this->param['database'],
                        $this->param['port']
        );
            if (mysqli_connect_errno() != 0) {
                $errmsg = "Connecting database failed: " . mysqli_connect_error();
                throw new DatabaseException($errmsg);
            }
        } catch (DatabaseException $e) {
            $error = new Error();
            $error->display($e->getMessage());
            exit;
        }
    }

    //static method to ensure there is just one Database instance
    static public function getDatabase() {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection() {
        return $this->objDBConnection;
    }

    //returns the name of the table that stores movies
    public function getHeroesTable() {
        return $this->param['tblHeroes'];
    }
    
    //returns the name of the table storing guest names
    public function getGuestTable() {
        return $this->param['tblGuests'];
    }
      //static method to ensure there is just one Database instance
    static public function getInstance() {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

}
