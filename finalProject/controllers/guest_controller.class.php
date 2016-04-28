<?php
//this script creates the guest controller
class GuestController {

    //This method displays the homepage by calling the display method of the Index view object.
    public function index() {
        $view = new Index();
        $view->display();     
    }

    //This method displays all guests. It first retrieves all guests by calling 
    // the getGuests method of the GuestModel. It then calls the display method
    // of the ShowGuest view object.
    public function show() {
        //get all guests with the GuestModel object
        $guest_model = new GuestModel();
        $guests = $guest_model->getGuests();

        //display all guests with the ShowGuest object
        $view = new ShowGuest();
        $view->display($guests);
    }

    //This method signs a guest by calling the addGuest method of a GuestModel object
    public function sign() {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $birth_date = $_POST['birth_date'];
        $email = $_POST ['email'];
        try {
            // validate input; if invalid, throw exceptions
            if (empty($first_name) || empty($last_name) || empty($birth_date) || empty($email)) {
                throw new DataMissingException("All fields are required.");
            } else if (!Utilities::validatedate($birth_date)) {
                throw new DateException("The birthdate you entered is not a valid date.");
            } else if (!Utilities::checkemail($email)) {
                throw new EmailException("The email you entered is invalid.");
            } else { //all inputs are valid; add them into the database.
                $guest = new Guest($first_name, $last_name, $birth_date, $email);
                $guest_model = new GuestModel;
                $guest_model->addGuest($guest);

                $view = new SignGuest();
                $view->display();
            }
        } catch (DataMissingException $e) {
            $this->error($e->getMessage());
        } catch (DateException $e) {
            $this->error($e->getMessage());
        } catch (EmailException $e) {
            $this->error($e->getMessage());
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    //This method displays an error message by calling the display method of an Error object
    public function error($message) {
        //create an object of the Error class
        $view = new Error();

        //display the error page
        $view->display($message);
    }
}
