<?php
    require('Count.php');
    
    class Farm{
        private $Collects; // ICollect
        private Count $AnimalCount;
        private Count $CollectCount;

        function __construct(){
            $this->AnimalCount = new Count();
            $this->CollectCount = new Count();
        }

        function Add(ICollect $_collects){
            $this->Collects[$this->AnimalCount->GetCount()] = $_collects;
            $this->AnimalCount->Add($_collects->Nationality());
        }

        function Collect(){
            foreach ($this->Collects as &$collect) {
                $this->CollectCount->Add($collect->Collect());
            }
        }

        function RollCall(){
            echo "\n\n======Animal======\n";
            $this->AnimalCount->Print();
            echo "======Collect======\n";
            $this->CollectCount->Print();
            echo "\n\n";
        }
    }
?>