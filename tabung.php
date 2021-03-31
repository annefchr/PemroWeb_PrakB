<?php
    class Tabung{
        private $diameter;
        private $tinggi;
        private $r;
        private $luasSelimut;
        private $phi = 3.14;
        
        public function setDiameter($option){
            $this->diameter = $option;
            $this->r = $this->diameter/2;
        }
        public function setTinggi($option){
            $this->tinggi = $option;
        }
        public function luasSelimut(){
            $this->luasSelimut = 3.14 * $this->$diameter * $this->$tinggi;
        }
        public function getLuas(){
            return $this->luasSelimut;
        }    
    }
?>