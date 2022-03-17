<?php
    include_once('Animal.php');
    include_once('ICollect.php');

    class Cow extends Animal implements ICollect {

        public function Voice(){
            echo "Muuuuuuuu\n";
        }

        function Nationality(): string{
            return get_class($this);
        }

        function Collect(): string{
            return "Milk";
        }
    }
?>