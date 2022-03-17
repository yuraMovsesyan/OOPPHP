<?php
    include_once('Animal.php');
    include_once('ICollect.php');

    class Chicken extends Animal implements ICollect {

        public function Voice(){
            echo "Kuuuu-kuuuu\n";
        }

        function Nationality(): string{
            return get_class($this);
        }

        function Collect() : string{
            return "Agg";
        }
    }
?>