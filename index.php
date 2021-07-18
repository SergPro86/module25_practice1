<?php
    interface Family {
        const peopleCount = 3;
        const lastName = 'Smith';

        public function Eat();
    }

    class Father implements Family {
        public $name = 'Jack';
        public $wife = 'Jesica';
        public $age = 34;

        public function repairCar() {
            echo 'I change wheels';
        }

        public function Eat()
        {
            echo 'У нас вкусный семейный ужин.';
        }

    }

    class Mother implements Family {
        public $name = 'Jesica';
        public $husband = 'Jack';
        public $age = 30;

        public function Cook() {
            echo 'I am cooking';
        }

        public function Eat()
        {
            echo 'У нас вкусный семейный ужин.';
        }
    }

    class Child implements Family {
        public $name = 'David';
        public $age = 3;
        public $sex = 'Male';

        public function Game() {
            echo 'I am playing with a toy car';
        }

        public function Eat()
        {
            echo 'У нас вкусный семейный ужин.';
        }

    }
?>