<?php
    include_once('Animal.php');
    include_once('ICollect.php');

    class Sheep extends Animal implements ICollect {

        public function Voice(){
            echo "Beeeee\n";
        }

        function Nationality(): string{
            return get_class($this);
        }

        function Collect(): string{
            return "Wool";
        }
    }
?>