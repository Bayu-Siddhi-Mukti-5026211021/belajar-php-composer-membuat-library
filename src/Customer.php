<?php 

    namespace PHP\Composer\Library;

    class Customer {

        private string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function sayHello(string $name = "Guest") : void {
            echo "Hello $name, my name is customer {$this->name}" . PHP_EOL;
        }
    }

?>