<?php 

    namespace PHP\Composer\Library;

    class Manager {

        private string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function sayHello(string $name = "Guest") : void {
            echo "Hello $name, my name is manager {$this->name}" . PHP_EOL;
        }
    }

?>