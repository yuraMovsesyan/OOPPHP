<?php
    abstract class Animal {
        public $Id;

        function __construct(){
            $this->Id = rand(100000, 999999);
            $this->Voice();
        }

        abstract public function Voice(); 
    }
?>