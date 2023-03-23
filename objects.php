<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;


// string representation

echo strlen("Hello world!"); // outputs 12
echo "<br>";
echo str_word_count("Hello world!"); // outputs 2
?>