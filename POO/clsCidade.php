<?php
    
    class cidade {
        public $id;
        public $name;
// Sem id        
        public function __construct($name = "Tangamandápio"){
            $this->id = null;
            $this->name = $name;
        }
 
    }