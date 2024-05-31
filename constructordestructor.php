<?php
// Start

// Define a class
class MyClass {
    // Constructor method
    public function __construct() {
        echo "Constructor called!\n";
    }

    // User-defined method
    public function myMethod() {
        echo "User-defined method called!\n";
    }

    // Destructor method
    public function __destruct() {
        echo "Destructor called!\n";
    }
}

// Create an object of MyClass
$obj = new MyClass();

// Access the user-defined method
$obj->myMethod();

// Stop
?>
