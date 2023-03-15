<?php
    class Person {
        private static $count = 0;
        private $name;

        function __construct($name) {
            $this->name = $name;
            self::$count = self::$count + 1;
        }
        function enter() {
            echo "<h1>Enter ".$this->name." ".self::$count." </h1>";
        }
        static function getCount() {
            return self::$count;
        }
    }

    $p1 = new Person('egoing1');
    $p1->enter();
    $p2 = new Person('egoing2');
    $p2->enter();
    $p3 = new Person('egoing3');
    $p3->enter();
    $p4 = new Person('egoing4');
    $p4->enter();

    echo $p4->getCount();
    echo Person::getCount();
?>
