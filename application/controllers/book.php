<?php 

class Book extends Framework\Controller {

    public function __construct() {
        parent::__construct();
    }

    public function addBook() {
        if (isset($_POST['submit'])) {
            $model = new Book_Model();
            $model->addData();
        } else {
            $view = new Book_View();
            $view->displayAddForm();
        }
    }

}
