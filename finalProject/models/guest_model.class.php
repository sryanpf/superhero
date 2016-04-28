<?php

/* * *****************************************
 * Marlow Robinson
 * i211
 * 3/24/2016
 * ***************************************** */

//this script creates the guest model

class GuestModel {

    //private data members
    private $db;
    private $dbConnection;

    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }

    //retrieve all entries in the guests table and return them in an array.
    public function getGuests() {
        //query string that retrieves the entire table
        $sql = "SELECT * FROM " . $this->db->getGuestTable();
        try {
            //execute the query
            $query = $this->dbConnection->query($sql);

            if ($query && $query->num_rows > 0) {
                //array to store all guests
                $guests = array();

                //loop through all rows
                while ($result_row = $query->fetch_assoc()) {
                    $guest = new Guest($result_row["last_name"], $result_row["first_name"], $result_row["birth_date"], $result_row["email"]);
                    $guests[] = $guest;
                }
                return $guests;
            }
            $errmsg = $this->dbconnection->error;
            throw new DatabaseException($e->getMessage());
        } catch (DatabaseException $e) {
            $error = new Error();
            $error->display($e->getMessage());
            return false;
        } catch (Exception $e) {
            $error = new Error();
            $error->display("An unexpected error has occurred.");
            return false;
        }
    }

    //add a guest into the "guest" table in the database
    public function addGuest(Guest $guest) {
        //retrieve properties of the Guest object
        $first_name = $guest->getFirstName();
        $last_name = $guest->getLastName();
        $birth_date = $guest->getBirthDate();
        $email = $guest->getEmail();

        //construct an INSERT query
        $sql = "INSERT INTO " . $this->db->getGuestTable() . " VALUES(NULL, '$first_name', '$last_name', '$birth_date', '$email')";

        try {
            $query = $this->dbConnection->query($sql);
            
            if (!$query) {
                $errmsg = $this->dbconnection->error;
                throw new DatabaseException($e->getMessage());
            }
        } catch (DatabaseException $e) {
            $error = new Error();
            $error->display($e->getMessage());
            return false;
        } catch (Exception $e) {
            $error = new Error();
            $error->display("An unexpected error has occurred.");
            return false;
        }
    }
}