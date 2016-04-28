<?php
class PowerController {

    private $power_model;

    //default constructor
    public function __construct() {
        //create an instance of the powerModel class
        $this->power_model = PowerModel::getPowerModel();
    }

    //index action that displays all powers
    public function index() {
        //retrieve all powers and store them in an array
        $powers = $this->power_model->list_power();

        if (!$powers) {
            //display an error
            $message = "There was a problem displaying power.";
            $this->error($message);
            return;
        }

        // display all powers
        $view = new PowerIndex();
        $view->display($powers);
    }

    //show details of a power
    public function detail($id) {
        //retrieve the specific power
        $power= $this->power_model->view_power($id);

        if (!$power) {
            //display an error
            $message = "There was a problem displaying the power id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display power details
        $view = new PowerDetail();
        $view->display($power);
    }

        //search powers
    public function search() {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all powers
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching powers
        $powers = $this->power_model->search_power($query_terms);

        if ($powers === false) {
            //handle error
            $message = "An error has occurred.";
            $this->error($message);
            return;
        }
        //display matched powers
        $search = new PowerSearch();
        $search->display($query_terms, $powers);
    }

    //autosuggestion
    public function suggest($terms) {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $powers = $this->power_model->search_power($query_terms);

        //retrieve all power names and store them in an array
        $names = array();
        if ($powers) {
            foreach ($powers as $power) {
                $names[] = $power->getName();
            }
        }

        echo json_encode($names);
    }
    //handle an error
    public function error($message) {
        //create an object of the Error class
        $error = new PowerError();

        //display the error page
        $error->display($message);
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        //$message = "Route does not exist.";
        // Note: value of $name is case sensitive.
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
        return;
    }
    

}