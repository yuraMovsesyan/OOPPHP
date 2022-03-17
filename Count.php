<?php
    class Count {
        private $count = 0;
        private $group;

        public function GetCount(): int {
            return $this->count;
        }

        private function SetGroup(string $key, int $val) {
            if (!isset($this->group[$key])) $this->group[$key] = 0;

            $this->group[$key] += $val;
        }

        public function Add(string $name, int $val = 1){
            $this->count += $val;
            $this->SetGroup($name, $val);
        }

        public function Print(){
            if (isset($this->group))
                foreach($this->group as $key => $val) 
                    echo $key." - ".$val."\n";
            else
                echo "void ☹";
        }
    }
?>