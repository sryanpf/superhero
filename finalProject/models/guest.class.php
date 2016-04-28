<?php

/* * ***************************************
 * Marlow Robinson
 * i211
 * 3/24/2016
 * *************************************** */
//The guest class models a real world guest object

class Guest {
    //private attributes
    private $first_name;
    private $last_name;
    private $birth_date;
    private $email;

    //constructor
    public function  __construct($fname, $lname, $bdate, $email) {
        $this->first_name = $fname;
        $this->last_name = $lname;
        $this->birth_date = $bdate;
        $this->email = $email;
    }

    //retrieve the first name of a visitor
    public function getFirstName() {
        return $this->first_name;
    }

    //retrieve the last name of a visitor
    public function getLastName() {
        return $this->last_name;
    }

    //retrieve the birthdate of a visitor
    public function getBirthDate() {
        return $this->birth_date;
    }

    //retrieve the email of a visitor
    public function getEmail() {
        return $this->email;
    }
}
?>