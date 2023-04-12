<?php

    class Catégorie
    {

        private $horror;
        private $romance;
        private $comedy;
        private $thriller;
        private $fantasy;
        private $adventure;
        private $drama;

        //Constructor
        public function __construct($horror , $romance , $comedy , $thriller , $fantasy , $adventure , $drama )
        {
            $this->horror=$horror;
            $this->romance=$romance;
            $this->comedy=$comedy;
            $this->thriler=$thriller;
            $this->fantasy=$fantasy;
            $this->adventure=$adventure;
            $this->drama=$drama;
            
        }

        //Getters
        public function get_horror()
        {
            return $this->horror;
        }

        public function get_romance()
        {
            return $this->romance;
        }
        public function get_comedy()
        {
            return $this->comedy;
        }
        public function get_thriller()
        {
            return $this->thriller;
        }
        public function get_fantasy()
        {
            return $this->fantasy;
        }
        public function get_adventure()
        {
            return $this->adventure;
        }
        public function get_drama()
        {
            return $this->drama;
        }
        
        //Setters
        public function set_horror(string $horror)
        {
            $this->horror=$horror;
        }
        public function set_romance(string $romance)
        {
            $this->romance=$romance;
        }
        public function set_comedy(string $comedy)
        {
            $this->comedy=$comedy;
        }
        public function set_thriller(string $thriller)
        {
            $this->thriller=$thriller;
        }
        public function set_fantasy(string $fantasy)
        {
            $this->fantasy=$fantasy;
        }
        public function set_adventure(string $adventure)
        {
            $this->adventure=$adventure;
        }
        public function set_drama(string $drama)
        {
            $this->drama=$drama;
        }

    }

?>
