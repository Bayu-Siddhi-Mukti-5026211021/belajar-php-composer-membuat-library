<?php 

    namespace PHP\Composer\Library;

    class Employee {

        private string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function sayHello(string $name = "Guest") : void {
            echo "Hello $name, my name is employee {$this->name}" . PHP_EOL;
        }
    }

?>