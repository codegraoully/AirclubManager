<?php
    
    namespace App\Spec;
    
    class Search {
        
        private $pilote = 'no';
        
        public function __toString() {
            
            return $this->getPilote() . '';
        }
        
        /**
         * @return string
         */
        public function getPilote() {
            
            return $this->pilote;
        }
        
        /**
         * @param string $pilote
         */
        public function setPilote( $pilote ) {
            
            $this->pilote = $pilote;
        }
        
    }
