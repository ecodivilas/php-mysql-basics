<?php

    // classes

    class User {

        private $name;
        private $email;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
        }

        public function login(){
            echo $this->name . ' logged in';
        }

        // Getter
        public function getName(){
            return $this->name;
        }

        // Setter
        public function setName($name){
            if(is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return "name has been updated to $name";
            } else {
                return 'not a valid name';
            }
        }
    }

    $userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');

    // echo $userTwo->getName();
    // echo $userTwo->setName(50);
    echo $userTwo->setName('shaun');
    echo $userTwo->getName();
?>
