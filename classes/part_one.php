<?php

    // classes

    class User {

        public $name;
        public $email;

        public function __construct($name, $email) {
            // $this->email = 'mario@thenetninja.co.uk';
            // $this->name = 'mario';
            $this->name = $name;
            $this->email = $email;
        }

        public function login(){
            // echo 'the user logged in';
            echo $this->name . ' logged in';
        }

    }

    // // Instanciating a class
    // $userOne = new User();

    // $userOne->login();
    // echo $userOne->name;

    $userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');
    // echo $userTwo->email;
    // echo $userTwo->name;
    // $userTwo->login();

    $userTwo->name = 'mario';
    echo $userTwo->name;
?>
