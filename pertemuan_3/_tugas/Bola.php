<?php
    class Bola{
        private $jariJari;

        public function getJariJari(){
            return $this->jariJari;
        }
        public function setJariJari($jari) {
            $this->jariJari = $jari;
        }
        public function getLuas() {
            $luas = 0;
            $luas = 4 * pi() * pow($this->jariJari,2);
            return $luas;
        }
        public function getVolume() {
            $volume = 0;
            $volume = 4/3 * pi() * pow($this->jariJari,3);
            return $volume;
        }
    }
?>