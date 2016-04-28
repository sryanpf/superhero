<?php

class PowerModel {

    //private data members
    private $db;
    private $dbConnection;
    static private $_instance = NULL;
    private $tblHeroes;

    //To use singleton pattern, this constructor is made private. To get an instance of the class, the getBookModel method must be called.
    private function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
        $this->tblHeroes = $this->db->getHeroesTable();
        

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars. 
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars 
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }

    //static method to ensure there is just one PowerModel instance
    public static function getPowerModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new PowerModel();
        }
        return self::$_instance;
    }

    /*
     * the list_power method retrieves all powers from the database and
     * returns an array of Power objects if successful or false if failed.
     * Powers should also be filtered by categories and/or sorted by titles or category if they are available.
     */

    public function list_power() {

        /* construct the sql SELECT statement in this format
         * SELECT ...
         * FROM ...
         * WHERE ...
         */

        $sql = "SELECT * FROM " . $this->tblHeroes;

        //execute the query
        $query = $this->dbConnection->query($sql);

        // if the query failed, return false. 
        if (!$query)
            return false;

        //if the query succeeded, but no book was found.
        if ($query->num_rows == 0)
            return 0;

        //handle the result
        //create an array to store all returned powers
        $powers = array();

        //loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            $power = new Power($obj->id,stripslashes($obj->name), stripslashes($obj->ability), stripslashes($obj->description), stripslashes($obj->price), stripslashes($obj->quantAvailable));

            //set the id for the power
            $power->setId($obj->id);

            //add the power into the array
            $powers[] = $power;
        }
        return $powers;
    }

    /*
     * the viewPower method retrieves the details of the power specified by its id
     * and returns a power object. Return false if failed.
     * 
     */
    //search the database for powers that match words in names. Return an array of powers if succeed; false otherwise.
    public function search_power($terms) {
        $terms = explode(" ", $terms); //explode multiple terms into an array
        //select statement for AND serach
        $sql = "SELECT * FROM " . $this->tblHeroes . " WHERE (1 ";

        foreach ($terms as $term) {
            $sql .= "AND name LIKE '%" . $term . "%'";
        }

        $sql .= ")";
        
        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false. 
        if (!$query)
            return false;

        //search succeeded, but no power was found.
        if ($query->num_rows == 0)
            return 0;

        //search succeeded, and found at least 1 power found.
        //create an array to store all the returned powers
        $powers = array();

        //loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            $power = new Power($obj->id,$obj->name, $obj->ability, $obj->description, $obj->price);

            //set the id for the power
            $power->setId($obj->id);

            //add the power into the array
            $powers[] = $power;
        }
        return $powers;
    }

    
    
    public function view_power($id) {
        //the select sql statement
        $sql = "SELECT * FROM " . $this->tblHeroes . "," . 
                " WHERE " . $this->tblHeroes . ".category=" .
                " AND " . $this->tblHeroes . ".id='$id'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create a power object
            $power = new Power(stripslashes($obj->name), stripslashes($obj->ability), stripslashes($obj->description), 
                    stripslashes($obj->price), stripslashes($obj->quantAvailable));

            //set the id for the power
            $power->setId($obj->id);

            return $power;
        }

        return false;
    }
}
