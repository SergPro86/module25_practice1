<?php
    class Family {
        public $peopleCount = 3;
        public $lastName = 'Smith';

        public function Eat()
        {
            echo 'У нас вкусный семейный ужин.';
        }
    }

    class Father extends Family {
        public $name = 'Jack';
        public $wife = 'Jesica';
        public $age = 34;

        public function repairCar() {
            echo 'I change wheels';
        }

    }

    class Mother extends Family {
        public $name = 'Jesica';
        public $husband = 'Jack';
        public $age = 30;

        public function Cook() {
            echo 'I am cooking';
        }
    }

    class Child extends Family {
        public $name = 'David';
        public $age = 3;
        public $sex = 'Male';

        public function Game() {
            echo 'I am playing with a toy car';
        }

    }
?>